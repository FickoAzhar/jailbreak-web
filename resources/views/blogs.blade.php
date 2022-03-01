@extends('layouts.main')

@section('container')
<section class="py-5 mt-5" id="container">
    {{-- <div class="d-flex mb-5 p-0 mt-0">
        <i class="fa-solid fa-house my-auto mx-2"></i>
        <i class="fa-solid fa-angle-right my-auto mx-2"></i>
        Blog
    </div>  --}}
    <div class="container-fluid" id="container">
    <h1 class="mt-5 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blogs">
                {{-- @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif --}}
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($blogs->count())
    {{-- <div class="card mb-3">
        @if ($blogs[0]->image)
            <div style="max-height: 400px; overflow:hidden;">
                <img src="{{ asset('storage/' . $blogs[0]->image) }}" alt="" class="img-fluid">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400?" class="card-img-top" alt="">
        @endif
        <div class="card-body text-center">
        <h3 class="card-title"><a href="/blogs/{{ $blogs[0]->slug }}" class="text-decoration-none text-dark">{{ $blogs[0]->title }}</a></h3>

        <p class="card-text">{{ $blogs[0]->excerpt }}</p>
        <a href="/blogs/{{ $blogs[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
        </div>
    </div> --}}

    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-3">
                    <div class="card">         
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x300?" class="card-img-top" alt="">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-time">{{ $blog->created_at }}</p>
                            <p class="card-text">{{ $blog->excerpt }}</p>
                            <a href="/blogs/{{ $blog->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @else 
    <p class="text-center fs-4">No Post Found</p>
@endif

    <div class="d-flex justify-content-center">
        {{ $blogs->links() }}
    </div>
</section>
@endsection

