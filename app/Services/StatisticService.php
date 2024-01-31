<?php

namespace App\Services;

use App\Models\Destination;
use App\Models\Post;
use App\Models\User;

/**
 * Class StatisticService.
 */
class StatisticService
{
    public function statistics()
    {
        return [
            "users" => User::count(),
            "posts" => Post::count(),
            "destinations" => Destination::count(),
        ];
    }
}
