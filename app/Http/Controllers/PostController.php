<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Destination;
use App\Models\Post;
use App\Services\ImageService;
use App\Services\StatisticService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $imageService;
    protected $statisticService;

    public function __construct(ImageService $imageService, StatisticService $statisticService)
    {
        $this->imageService = $imageService;
        $this->statisticService = $statisticService;
    }

    public function index()
    {
        return view('index', [
            "posts" => Post::latest()->filter(request(["search", "destination"]))->get(),
            "destinations" => Destination::all(),
            "statistics" => $this->statisticService->statistics(),
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
