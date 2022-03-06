@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3 d-flex justify-content-center">
            <div class="col-lg-10">
                <a href="/dashboard/blogs" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my blog</a>
                <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/blogs/{{ $blog->slug }}" method="post" class="d-inline mb-5">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
                <h2 class="text-center mt-5">{{ $blog->title }}</h2>
                <h6 class="mt-4">{{ $blog->created_at->format('d, M Y') }}</h6>
                @if ($blog->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                <img src="https://source.unsplash.com/1200x400?" alt="" class="img-fluid ">
                @endif
                
                <article class="body my-4 fs-6">
                    {!! $blog->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection

