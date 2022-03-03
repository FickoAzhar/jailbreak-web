<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBlogController;

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

Route::get('/', function () {
    return view('home',[
        "title" => "The Dream's Property",
        "active" => "home"
    ]);
});

Route::get('/products',[ProductController::class, 'index']);
Route::get('/products/{product:slug}',[ProductController::class, 'show']);

Route::get('/blogs',[BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}',[BlogController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('admin');

Route::get('/dashboard/blogs/checkSlug', [DashboardBlogController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/blogs',DashboardBlogController::class)->middleware('admin');