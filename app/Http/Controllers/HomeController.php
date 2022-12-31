<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fuction to read the DB records
    public function index () {
        // Fetch the categories record
        $allCategories = Category::all();

        // Return the index view
        return view('index', ['categories' => $allCategories]);
    }
}
