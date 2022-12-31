<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fuction to read the DB records
    public function index () {
        // Fetch the categories record
        $categories = Category::all();
        // Fetch the posts
        $posts = Post::latest()->get();

        // Return the index view
        return view('index', compact('categories', 'posts'));

    }
}
