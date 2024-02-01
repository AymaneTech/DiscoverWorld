<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Http\Requests\PostRequest;
use App\Models\Destination;
use App\Models\Post;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    private $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        if (request()->has('search') || request()->has('destination') || request()->has('sort')) {
            Cache::forget("data");
        }

        $data = Cache::remember("data", 14400, function () {
            $posts = Post::filter(request(["search", "destination", "sort"]))->get();
            return [
                "posts" => $posts,
                "destinations" => Destination::all(),
                "statistics" => [
                    "users" => User::count(),
                    "posts" => Post::count(),
                    "destinations" => Destination::count(),
                ]
            ];
        });
        return view('index', $data);
    }

    public function create()
    {
        $destinations = Cache::remember("destinations", 14000, function () {
            return Destination::all();
        });
        return view('posts.create', [
            "destinations" => $destinations,
        ]);
    }

    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();

        $post = Post::create($validatedData);
        Cache::forget("data");
        $this->imageService->store($validatedData["images"], $post);
        return redirect("/")->with("success", "Post created successfully");
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            "post" => $post
        ]);
    }
}
