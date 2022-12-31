<?php

use App\Http\Controllers\HomeController;
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
// Route::get('/', function () {
//     return view('index');
// });
// // About view
// Route::get('/about', function () {
//     return view('about');
// });
// // Contact view
// Route::get('/contact', function () {
//     return view('contact');
// });

// For static views
# Index view
// Route::view('/', 'index')->name('home');
# About view
Route::view('about', 'about')->name('about');
# Contact view
Route::view('/contact', 'contact')->name('contact');

// For dynamic views
// Index view
Route::get('/', [HomeController::class, 'index'])->name('home');