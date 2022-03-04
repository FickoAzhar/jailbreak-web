<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $title ='';
        return view('home',[
            "title" => "Home",
            "active" => 'home',
            // "posts" => Post::all()
            "products" => Product::latest()->paginate(6)->withQueryString(),
            "blogs" => Blog::latest()->paginate(8)->withQueryString()
        ]);
    }
}
