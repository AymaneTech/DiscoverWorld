<?php

namespace App\Models;

use App\Events\PostCreated;
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

        $query->when($filters["destination"] ?? false, fn($query, $destination) => $query
            ->whereHas('destination', fn($query) => $query->where("slug", $destination)
            )
        );
        $sort = $filters["sort"] ?? '';
        $isOldest = $sort === "oldest";

        $query->when($isOldest, function ($query) {
            return $query->oldest();
        }, function ($query) {
            return $query->latest();
        });
        if (!count(array_filter($filters))) {
            $query->latest();
        }
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
