<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// My routes
// The index view
Route::get('/', function () {
    return view('index');
});

// About view
Route::get('/about', function () {
    return view('about');
});

// Contact view
Route::get('/contact', function () {
    return view('contact');
});