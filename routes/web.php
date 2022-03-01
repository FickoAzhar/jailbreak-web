<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/product', function () {
    return view('product',[
        "title" => "produk",
        "active" => "produk"
    ]);
});

Route::get('/blogs',[BlogController::class, 'index']);
Route::get('/blogs/{blog:slug}',[BlogController::class, 'show']);