@extends('layouts.main')

@section('container')
<section class="mt-5" id="container">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1>{{ $blog->title }}</h1>

                @if ($blog->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?" alt="" class="img-fluid">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $blog->body !!}
                </article>
            
            </div>
        </div>
    </div>
</section>
@endsection

