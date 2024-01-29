<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create', [
            "categories" => Category::all()
        ]);
    }

    public function store(PostRequest $request)
    {
        $validatedData = $request->validated();

        $imageName = time().'.'.$request->image->extension();
        $validatedData["image"] = $imageName;
        Post::create($validatedData);

        $request->image->move(public_path('images/storage'), $imageName);

        return redirect("/")->with("success", "Post created successfully");
    }
}