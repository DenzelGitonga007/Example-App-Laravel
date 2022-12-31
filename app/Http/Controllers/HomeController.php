<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Fuction to read the DB records
    public function index () {
        // Fetch the categories record
        $allCategories = ['category_1', 'category_2'];

        // Return the index view
        return view('index', ['categories' => $allCategories]);
    }
}
