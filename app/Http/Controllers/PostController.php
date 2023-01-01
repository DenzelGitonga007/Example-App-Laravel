<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Show the posts with parameters from the url
    public function show($postId) {
        $post = Post::find($postId);
        // Return the post view
        return view('post', compact('post'));
    }
}
