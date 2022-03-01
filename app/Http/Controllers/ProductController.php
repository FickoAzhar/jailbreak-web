<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $title ='';
        return view('products',[
            "title" => "All Products" . $title,
            "active" => 'products',
            // "posts" => Post::all()
            "products" => Product::latest()->filter(request(['search']))->paginate(9)->withQueryString()
        ]);
    }
    public function show(Product $product)
    {
        return view('product',[
            "title" => "Single Product",
            "active" => 'products',
            "product" => $product
        ]);
    }
}
