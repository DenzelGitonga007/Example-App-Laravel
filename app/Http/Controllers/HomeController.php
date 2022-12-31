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
        // Fetch the posts and display the categories upon request
        $posts = Post::when(request('category_id'), function ($query) {
            $query->where('category_id', request('category_id'));
        })
        ->latest()
        ->get();

        // Return the index view
        return view('index', compact('categories', 'posts'));

    }
}
