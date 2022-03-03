<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('admin');
        return view('dashboard.blogs.index',[
            "blogs" => Blog::all()
            // 'blogs' => Blog::where('user_id',auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.blogs.create');
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
            'slug' => 'required|unique:blogs',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        blog::create($validatedData);

        return redirect('/dashboard/blogs')->with('success','New blog has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('dashboard.blogs.show',[
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('dashboard.blogs.edit',[
            'blog' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $rules = [
            'title' => 'required|max:255',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ];

        if($request->slug != $blog->slug){
            $rules['slug'] = 'required|unique:blogs';
        }
        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('blog-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        blog::where('id', $blog->id)
            ->update($validatedData);

        return redirect('/dashboard/blogs')->with('success','blog has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if($blog->image){
            Storage::delete($blog->image);
        }
        blog::destroy($blog->id);
        return redirect('/dashboard/blogs')->with('success','blog has been deleted!');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
