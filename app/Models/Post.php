<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "body",
        "image",
        "user_id",
        "category_id"
    ];

    protected $with = ["category", "author"];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters["search"] ?? false, fn($query, $search) => $query
            ->where("title", "like", "%" . $search . "%")
            ->orWhere("body", "like", "%" . $search . "%"));

        $query->when($filters["category"] ?? false, fn($query, $category) => $query
            ->whereHas('category', fn($query) => $query->where("name", $category)
            )
        );
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function author (){
        return $this->belongsTo(User::class, "user_id");
    }
}
