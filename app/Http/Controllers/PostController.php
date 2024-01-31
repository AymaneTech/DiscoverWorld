<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Destination;
use App\Models\Post;
use App\Models\User;
use App\Services\ImageService;

class PostController extends Controller
{
    protected $imageService;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        return view('index', [
            "posts" => Post::latest()->filter(request(["search", "destination", "sort"]))->get(),
            "destinations" => Destination::all(),
            "statistics" => [
                "users" => User::count(),
                "posts" => Post::count(),
                "destinations" => Destination::count(),
            ],
        ]);
    }

    public function create()
    {
        return view('posts.create', [
            "destinations" => Destination::all()
        ]);
    }

    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();

        $post = Post::create($validatedData);
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
