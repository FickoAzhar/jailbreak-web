@extends('layouts.main')

@section('container')
<section class="" id="container">
    <div class="">
        {{-- address --}}
        <div class="d-flex container">
            <a href="/" class="me-2"><i class="fa-solid fa-house"></i></a>
            <span class="me-2"><i class="fa-solid fa-chevron-right"></i></span>
            <a href="/blogs"  class="me-2">Blog</a>
            <span class="me-2"><i class="fa-solid fa-chevron-right"></i></span>
            <p class="me-2 text-dark">{{ $blog->title }}</p>
        </div>
        {{-- end address --}}
        <div class="row justify-content-center my-5 mx-5">
            <div class="col-md-7 me-5">
                <h4 class="text-center">{{ $blog->title }}</h4>
                <div class="d-flex justify-content-between p-0">
                    <p class="mt-4 text-dark">{{ $blog->created_at->format('d, M Y')}}</p>
                    <span class="my-auto px-2 borderer">
                        <i class="fa-solid fa-share-nodes"></i>
                    </span>
                </div>
                @if ($blog->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600?/property" alt="" class="img-fluid">
                @endif
                
                <article class="my-3 text-dark blog-body">
                    {!! $blog->body !!}
                </article>
            
            </div>
            <div class="col-md-4">
                <h5 class="pt-5 mt-5 border-2 border-bottom">Produk Lainnya</h5>
                @foreach ($blogs as $blog)
                <a href="/blogs/{{ $blog->slug }}">
                    <div class="blog-post card-effect bg-light my-4">
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x300?/property" class="card-img-top" alt="">
                        @endif
                        <h5 class="mt-3"><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h5>
                        <p>{{ $blog->created_at->format('d, M Y') }}</p>
                    </div> 
                </a>
                @endforeach          
            </div>
        </div>
    </div>
</section>
@endsection

