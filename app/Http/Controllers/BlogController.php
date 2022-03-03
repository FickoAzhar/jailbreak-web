<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $title ='';
        return view('blogs',[
            "title" => "All Blogs" . $title,
            "active" => 'blogs',
            // "blogs" => Blog::all()
            "blogs" => Blog::latest()->filter(request(['search']))->paginate(9)->withQueryString()
        ]);
    }
    public function show(Blog $blog)
    {
        return view('blog',[
            "title" => "Single Blog",
            "active" => 'blogs',
            "blogs" => Blog::latest()->paginate(4)->withQueryString(),
            "blog" => $blog
        ]);
    }
}
