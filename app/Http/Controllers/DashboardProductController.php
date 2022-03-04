<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class DashboardProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ='';
        return view('dashboard.products.index',[
            "products" => Product::all()
             // "products" => Product::latest()->filter(request(['search']))->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.products.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'image' => 'image|file|max:1024|required',
            'lokasi' => 'required',
            'deskripsi' => 'required',
            'price' => 'required',
            'year_built' => 'required',
            'sertificate' => 'required',
            'tot_floors' => 'required',
            'luas' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'facility' => 'required',
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        product::create($validatedData);

        return redirect('/dashboard/products')->with('success','New product has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('dashboard.products.show',[
            'product' => $product,
            "products" => Product::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.products.edit',[
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'lokasi' => 'required',
            'image' => 'image|file|max:1024',
            'deskripsi' => 'required',
            'price' => 'required',
            'year_built' => 'required',
            'sertificate' => 'required',
            'tot_floors' => 'required',
            'luas' => 'required',
            'facility' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
        ];

        if($request->slug != $product->slug){
            $rules['slug'] = 'required|unique:products';
        }
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('product-images');
        }

        product::where('id', $product->id)
            ->update($validatedData);

        return redirect('/dashboard/products')->with('success','product has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->image){
            Storage::delete($product->image);
        }
            product::destroy($product->id);
            return redirect('/dashboard/products')->with('success','product has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(product::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
