@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <a href="/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my blog</a>
                <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/blogs/{{ $blog->slug }}" method="post" class="d-inline mb-5">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
                <h1 class="text-center mt-5">{{ $blog->title }}</h1>
                <h6 class="mt-4">{{ $blog->created_at }}</h6>
                @if ($blog->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid mt-3">
                    </div>
                @else
                <img src="https://source.unsplash.com/1200x400?" alt="" class="img-fluid mt-3">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $blog->body !!}
                </article>
                
            </div>
        </div>
    </div>
@endsection

