<?php

namespace App\Services;

use App\Models\Image;
use App\Models\Post;

/**
 * Class ImageService.
 */
class ImageService
{
    public function store($images, Post $post)
    {
        foreach ($images as $image) {
            $imageName = $this->moveImage($image);
            Image::create([
                "url" => $imageName,
                "post_id" => $post->id
            ]);
        }
    }

    public function moveImage($image)
    {
        $imageName = time() . "." . $image->extension();
        $image->move(public_path('images/storage'), $imageName);
        return $imageName;
    }
}
