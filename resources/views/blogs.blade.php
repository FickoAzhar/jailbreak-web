@extends('layouts.main')

@section('container')
<section class="py-5 mt-5" id="container">
    <div class="d-flex container">
        <a href="/" class="me-2"><i class="fa-solid fa-house"></i></a>
        <span class="me-2"><i class="fa-solid fa-chevron-right"></i></span>
        <p class="text-dark">blog</p>
    </div>
    <div class="container-fluid" id="container">
    <h3 class="mt-5 text-center">{{ $title }}</h3>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blogs">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($blogs->count())
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-3">
                    <a href="/blogs/{{ $blog->slug }}">
                        <div class="card blog">         
                            @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x300?/property" class="card-img-top" alt="">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $blog->title }}</h5>
                                <p class="card-time text-dark">{{ $blog->created_at->format('d, M Y') }}</p>
                                <p class="card-text text-dark">{{ $blog->excerpt }}</p>
                                <p class="card-text mt-3">{{ __('produk&blog.more') }}  <i class="fa-solid fa-angles-right my-auto"></i></p>
                            </div>
                        </div>
                    </a>
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

