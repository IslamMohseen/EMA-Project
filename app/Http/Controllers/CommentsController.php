<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
        Comment::create([

            'body' => request('body'),
            'post_id' => $post->id
        ]);
        return back();
    }
}
