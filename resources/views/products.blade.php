@extends('layouts.main')

@section('container')
    <!-- ABOUT US -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <h1>The Dream's property</h1>
                    <p class="text-align-justify">{{ __('produk&blog.caption') }}</p>

                    <!-- search bar 1 -->
                    <form action="/products">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">{{ __('produk&blog.search') }}</button>
                        </div>
                    </form>

                </div>
                <div class="col-lg-5">
                    <img src="asset/img/about.jpg" alt="" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US -->

    <!-- FEATURES -->
    <section id="container-bg">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-0 py-4 mx-auto text-center">
                <div class="feature col">
                    <h2>100%</h2>
                    <p>{{ __('home.csatisfication') }}</p>
                </div>
                <div class="feature col">
                    <h2>55ha</h2>
                    <p>{{ __('home.larea') }}</p>
                </div>
                <div class="feature col">
                    <h2>60%</h2>
                    <p>{{ __('home.ospace') }}</p>
                </div>
                <div class="feature col">
                    <h2>43km</h2>
                    <p>{{ __('home.jtrack') }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEATURES -->

    <!-- PRODUCT -->
    <section>
        <div class="container-fluid" id="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h1>{{ __('home.catalog1') }}</h1>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                    <div class="col">
                        <div class="card shadow-sm product position-relative overflow-hidden">
                            <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                                <p class="text-white text-center px-3 py-1 my-auto">
                                    @if ($product->category_id === 1) 
                                        <i class="fa-solid fa-house-chimney-user"></i>  <a href="/products?category={{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->name }}</a></p>
                                    @elseif ($product->category_id === 2) 
                                        <i class="fa-solid fa-hotel"></i>  <a href="/products?category={{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->name }}</a></p>
                                    @else
                                        <i class="fa-solid fa-warehouse"></i>  <a href="/products?category={{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->name }}</a></p>
                                    @endif
                            </div>
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p>
                                    <small class="text-muted">{{ $product->lokasi }}
                                    </small>
                                </p>
                                {{ $product->bedroom }}<i class="fa-solid fa-bed"></i>  {{   $product->bathroom }}<i class="fa-solid fa-hot-tub"></i>  {{   $product->luas }} m2
                                <br>Rp {{ $product->price }}</p>
                                <div class="d-flex">
                                    <div class="btn-group mx-auto w-100">
                                        <a href="/products/{{ $product->slug }}" class="btn btn-sm btn-outline-secondary rounded-pill"> {{ __('produk&blog.detail') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $products->links() }}
        </div>
    </section>
    <!-- END PRODUCT -->
@endsection