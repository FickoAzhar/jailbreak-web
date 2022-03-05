@extends('layouts.main')

@section('container')
    <!-- HERO -->
    <div class="hero vh-100 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto text-center">
                    <img src="/asset/img/logo-image.png" width="200">
                    <h1 class="text-white">The Dream's Property</h1>
                    <p class="text-white my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quia
                        sequi eius. Quas, totam aliquid. Repudiandae reiciendis vel excepturi ipsa voluptate dicta!</p>
                    <div class="row mt-5">
                        <a href="#" class="col btn mx-2 btn-outline-light">Request Viewing</a>
                        <a href="#" class="col btn mx-2 btn-outline-light ms-auto">Play Video</a>
                        <a href="#" class="col btn mx-2 btn-outline-light">360 virtual tour</a>
                    </div>
                    
                </div>
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
                    <h1>{{ __('general.profile') }}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 my-auto py-2 text-end">
                    <p class="text-align-justify">{{ __('general.profexcerpt') }}</p>
                    <button type="button" class="mt-2 btn btn-primary">{{ __('general.more') }}</button>
                </div>
                <div class="col-lg-5">
                    <img src="/asset/img/about.jpg" alt="" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </section>
    <!-- END ABOUT US -->

    <!-- ADVANTAGES -->
    <section class="advantages row w-100 py-0 bg-light">
        <div class="col-lg-6 col-img"></div>
        <div class="col-lg-6 py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <h1>A HOME DESIGNED FOR YOU</h1>
                        <p>The Dream’s Property merupakan kawasan Premium yang dikelilingi oleh keindahan pegunungan serta udara yang sejuk. Kawasan pengembangan yang telah di rancang dengan sangat baik untuk membangun sebuah hunian keluarga Anda.</p>

                        <div class="feature d-flex mt-5">
                            <div class="iconbox me-3">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div>
                                <h5>kelebihan 1</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class="fa-solid fa-hand-holding-dollar"></i>
                            </div>
                            <div>
                                <h5>kelebihan 2</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
                        <div class="feature d-flex">
                            <div class="iconbox me-3">
                                <i class="fa-solid fa-circle-down"></i>
                            </div>
                            <div>
                                <h5>kelebihan 3</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil perspiciatis illo </p>
                            </div>
                        </div>
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
                    <p>{{ __('general.csatisfication') }}</p>
                </div>
                <div class="feature col">
                    <h2>55ha</h2>
                    <p>{{ __('general.larea') }}</p>
                </div>
                <div class="feature col">
                    <h2>60%</h2>
                    <p>{{ __('general.ospace') }}</p>
                </div>
                <div class="feature col">
                    <h2>43km</h2>
                    <p>{{ __('general.jtrack') }}</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END FEATURES -->

    <!-- CATALOG -->
    <section>
        <div class="container-fluid" id="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color text-uppercase">{{ __('general.catalog') }}</h6>
                    <h1>{{ __('general.catalog1') }}</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga
                        in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
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
    <section class="bg-light pt-5" id="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="text-color text-uppercase">{{ __('general.blog') }}</h6>
                    <h1>{{ __('general.news') }}</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
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
@endsection
