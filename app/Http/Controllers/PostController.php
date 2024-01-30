<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            "posts" => Post::latest()->filter(request(["search", "category"]))->get(),
            "categories" => Category::all(),
        ]);
    }

    public function create()
    {
        return view('posts.create', [
            "categories" => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $incomingFields = $request->validate([
            'images.*' => 'required|image',
        ]);

        foreach ($incomingFields['images'] as $image) {
            $imageName = uniqid() . "_" . time() . "_" . $image->getClientOriginalName();
            $image->move(public_path("images/storage"), $imageName);
        }

        dd("n");


//        return redirect("/")->with("success", "Post created successfully");
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            "post" => $post
        ]);
    }
}
