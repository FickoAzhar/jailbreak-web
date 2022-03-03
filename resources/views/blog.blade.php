@extends('layouts.main')

@section('container')
<section class="mt-5" id="container">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h4 class="text-center">{{ $blog->title }}</h4>
                <p class="mt-4">{{ $blog->created_at }}</p>
                @if ($blog->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x600?" alt="" class="img-fluid">
                @endif
                
                <article class="my-3">
                    <p class="text-justify">
                        {!! $blog->body !!}
                    </p>
                </article>
            
            </div>
            <div class="col-md-4">
                <h4 class="pt-5 mt-5">Produk Lainnya</h4>
                <hr>
                @foreach ($blogs as $blog)
                    <div class="blog-post card-effect bg-light my-4">
                        @if ($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/500x300?" class="card-img-top" alt="">
                        @endif
                        <h5 class="mt-3"><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h5>
                        <p>{{ $blog->created_at }}</p>
                    </div> 
                @endforeach          
            </div>
        </div>
    </div>
</section>
@endsection

