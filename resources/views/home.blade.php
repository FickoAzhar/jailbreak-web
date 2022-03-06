@extends('layouts.main')

@section('container')
    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 mx-auto text-center">
                    <img src="/asset/img/logo-image.png" width="200">
                    <h1 class="text-white mb-4">The Dream's Property</h1>
                </div>
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <a href="#reqview" class="btn btn-outline-light px-5 me-3 text-capitalize">{{ __('home.reqview') }}</a> <i class="fa-solid fa-angle-right fa-2x d-flex align-items-center"></i>
                <a href="#video" class="btn mx-auto btn-outline-light ms-auto px-5 text-capitalize">{{ __('home.playvideo') }}</a>
                <i class="fa-solid fa-angle-left fa-2x d-flex align-items-center me-3 "></i> <a href="#product" class="btn btn-outline-light px-5 text-capitalize">{{ __('home.virtualtour') }}</a>
            </div>
            <div class="mt-5 d-flex justify-content-center">
                <p class="fw-bold fs-6 text-white text-capitalize">{{ __('home.moto') }}</p>
            </div>
        </div>
    </div>
    <!-- END HERO -->

    <!-- ABOUT US -->
    <section>
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color text-uppercase">{{ __('general.aboutUs') }}</h6>
                    <h1>{{ __('home.profile') }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 my-auto py-2 text-end">
                    <p class="text-align-justify">{{ __('home.profexcerpt') }}</p>
                    <a href="/about">
                        <button type="button" class="mt-2 btn btn-primary">{{ __('home.more') }}</button>
                    </a>
                </div>
                <div class="col-lg-5" id="video">
                    <iframe width="100%" height="300" src="https://www.youtube.com/embed/p1-mvDVWj7Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US -->

    <!-- ADVANTAGES -->
    <section class="advantages row w-100 py-0 bg-light mb-5 pb-5">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1 class="text-uppercase">{{ __('home.about') }}</h1>
                        <p>{{ __('home.aboutdesc') }}</p>

                        <div class="d-flex justify-content-between">
                            <div class="me-5">
                                <h6 class="mt-3 text-uppercase">{{ __('home.location') }}</h6>
                                <h6 class="mt-4 text-uppercase">{{ __('home.address') }}</h6>
                                <h6 class="mt-4 text-uppercase">{{ __('home.clusters') }}</h6>
                                <h6 class="mt-4 text-uppercase">{{ __('home.facilities') }}</h6>
                                <h6 class="mt-4 text-uppercase">{{ __('home.totarea') }}</h6>
                            </div>
                            <div class="text-dark">
                                <p class="mt-2">Kemang, Jakarta Selatan</p>
                                <p class="mt-2">Jl. Prapanca No.43 Blok IV</p>
                                <p class="mt-2">10</p>
                                <p class="mt-2">{{ __('home.facilities2') }}</p>
                                <p class="mt-2">{{ __('home.totarea2') }}</p>
                            </div>
                        </div>
                        <a href="/products">
                            <div class="mt-5 d-flex">
                                <h6 class="text-uppercase me-2">{{ __('home.vproject') }}</h6> 
                                <i class="fa-solid fa-angle-right text-dark"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ADVANTAGES -->

    <!-- FEATURES -->
    <section id="container-bg" class="features">
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

    <!-- CATALOG -->
    <section id="product">
        <div class="container-fluid" id="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color text-uppercase">{{ __('home.catalog') }}</h6>
                    <h1>{{ __('home.catalog1') }}</h1>
                </div>
            </div>
   
            <div class="row g-3">
                @foreach ($products as $product)
                
                    <div class="col-lg-4 col-sm-6">
                         
                        <div class="catalog position-relative overflow-hidden"> 
                            @if ($product->image)
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $product->category->name }}" class="card-img-top" alt="{{ $product->category->name }}">
                            @endif
                            

                            <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                                <p class="text-white text-center px-3 py-1 my-auto">
                                    @if ($product->category_id === 1) 
                                        <i class="fa-solid fa-house-chimney-user"></i>  <a href="/products?category={{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->name }}</a>
                                    @elseif ($product->category_id === 2) 
                                        <i class="fa-solid fa-hotel"></i>  <a href="/products?category={{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->name }}</a>
                                    @else
                                        <i class="fa-solid fa-warehouse"></i>  <a href="/products?category={{ $product->category->slug }}" class="text-white text-decoration-none">{{ $product->category->name }}</a>
                                    @endif
                                </p>
                            </div>
                            <a href="/products/{{ $product->slug }}">
                            <div class="overlay position-absolute top-0 left-0 w-100 h-100 d-flex p-4 align-items-end">
                                <div>
                                    <h5 class="text-white">{{ $product->title }}</h5>
                                    <p class="text-white">{{ $product->lokasi }}</p>
                                </div>
                            </div>
                        </a>
                        </div>
                    
                    </div>
                
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            {{ $products->links() }}
        </div>
    </section>
    <!-- END CATALOG -->

    <!-- BLOG -->
    <section class="bg-light pt-5 pb-0" id="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color text-uppercase">{{ __('general.blog') }}</h6>
                    <h1>{{ __('home.news') }}</h1>
                </div>
            </div>
            <div class="row g-4">
                @foreach ($blogs as $blog)
                <div class="col-md-3">
                    <div class="blog-post card-effect">
                            <a href="/blogs/{{ $blog->slug }}">    
                                @if ($blog->image)
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="" class="img-fluid">
                                @else
                                    <img src="https://source.unsplash.com/500x300?/property" class="card-img-top" alt="">
                                @endif
                                <h5 class="mt-4">{{ $blog->title }}</h5>
                                <p class="text-dark">{{ $blog->created_at->format('d, M Y') }}</p>
                            </a>                    
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center mt-5">
                {{ $blogs->links() }}
            </div>
        </div>
    </section>
    <!-- END BLOG -->

    {{-- FORM --}}
    <section id="reqview">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color text-uppercase">Request</h6>
                    <h1>Form {{ __('home.reqview') }}</h1>
                </div>
            </div>

            <form action="" class="row g-3 justify-content-center">
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="E-mail">
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" placeholder="whatsapp">
                </div>
                <div class="col-md-10">
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-10">
                    <textarea name="" id="" cols="30" rows="5" class="form-control"
                        placeholder="Enter Message"></textarea>
                </div>
                <div class="col-md-10 d-grid">
                    <button class="btn btn-primary">{{ __('home.reqview') }}</button>
                </div>
            </form>

        </div>
    </section>
    {{-- END FORM --}}
    

    <script src="/js/script.js"></script>
@endsection
