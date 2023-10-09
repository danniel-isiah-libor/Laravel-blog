<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;

class PostPolicy
{
    public function author(User $user, Post $post)
    {
        // $post = Post::find($id);

        return  $user->id === $post->user_id;
    }
}
