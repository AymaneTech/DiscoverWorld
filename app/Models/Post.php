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
        "user_id",
        "destination_id",
        "slug",
    ];

    protected $with = ["destination", "author", "image"];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters["search"] ?? false, fn($query, $search) => $query
            ->where("title", "like", "%" . $search . "%")
            ->orWhere("body", "like", "%" . $search . "%"));

        $query->when($filters["destination"] ?? false, fn($query, $category) => $query
            ->whereHas('category', fn($query) => $query->where("slug", $category)
            )
        );
        ($filters["sort"] ?? null === 'newest')
            ? $query->orderBy('created_at', 'desc')
            : $query->orderBy('created_at', 'asc');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }
}
