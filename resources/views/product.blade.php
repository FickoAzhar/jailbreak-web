@extends('layouts.main')

@section('container')
<section id="container">
    <div class="container">
        {{-- Address --}}
        <div class="d-flex container">
            <a href="/" class="me-2"><i class="fa-solid fa-house"></i></a>
            <span class="me-2"><i class="fa-solid fa-chevron-right"></i></span>
            <a href="/products"  class="me-2">{{ __('general.product') }}</a>
            <span class="me-2"><i class="fa-solid fa-chevron-right"></i></span>
            <p class="me-2 text-dark">{{ $product->title }}</p>
        </div>
        {{-- end address --}}
        <div class="row my-5">
            <div class="col-md-8">
                <h3 class="text-center mb-3">{{ $product->title }}</h3>
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <p class="text-dark">{{ __('produk&blog.category') }} :</p>
                        <p class="borderer ms-1 px-1">{{ $product->category->name }}</p>
                    </div>

                    <div>
                        <a href="#" class="px-2 py-1 m-auto borderer me-3 "><i class="fa-brands fa-whatsapp "></i>  {{ __('produk&blog.contact') }}</a>
                        <i class="fa-solid fa-share-nodes px-2 py-1 m-auto borderer"></i>
                    </div>
                </div>

                @if ($product->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?" alt="" class="img-fluid">
                @endif
                
                <article class="deskripsi mb-3 mt-5 fs-6">
                    <h6>{{ __('produk&blog.description') }}</h6>
                    <div class="border border-dark py-3 px-4 text-dark">
                        {!! $product->deskripsi !!}
                    </div>
                </article>
                <div class="detail mt-5">
                    <h6>Detail</h6>
                    <div class="border border-dark p-2">
                        <div class="row p-3">
                            <div class="col-6">
                                <p class="mb-1 mt-2">{{ __('produk&blog.category') }}</p>
                                <p class="mb-0 text-dark fw-bold">{{ $product->category->name }}</p>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">{{ __('produk&blog.luas') }}</p>
                                <p class="mb-0 text-dark fw-bold">{{ $product->luas }}</p>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">{{ __('produk&blog.price') }}</p>
                                <p class="mb-0 text-dark fw-bold">{{ $product->price }}</p>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">{{ __('produk&blog.ybuilt') }}</p>
                                <p class="mb-0 text-dark fw-bold">{{ $product->year_built }}</p>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">{{ __('produk&blog.certificate') }}</p>
                                <p class="mb-0 text-dark fw-bold">{{ $product->sertificate }}</p>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">{{ __('produk&blog.tfloor') }}</p>
                                <p class="mb-0 text-dark fw-bold">{{ $product->tot_floors }} lantai</p>
                                <hr class="mt-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fasilitas mt-5">
                    <h6>{{ __('home.facilities') }}</h6>
                    <div class="border border-dark p-2">
                        <div class="row p-3">
                            <div class="col-6 d-flex py-1">
                                <p class="text-dark">
                                    {!! $product->facility !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">            
                <form action="" class="position-sticky sticky-top form-req">
                    <div class="row border g-2 border-light justify-content-center p-2 rounded shadow ">
                        <h5 class="text-center py-3">Form request</h5>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="whatsapp">
                        </div>
                        <div class="col-md-12">
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-md-12">
                            <textarea name="" id="" cols="30" rows="5" class="form-control"
                                placeholder="Message"></textarea>
                        </div>
                        @auth
                            <div class="col-md-12 d-grid py-2">
                                <button class="btn btn-primary">{{ __('home.reqview') }}</button>
                            </div>
                        @else
                            <fieldset disabled>
                                <div class="col-md-12 d-grid py-2">
                                    <button class="btn btn-primary">{{ __('home.reqview') }}</button>
                                </div>
                            </fieldset>
                        @endauth
                    </div>
                </form>
            </div>

            <!-- MAPS -->
            <section class="container" id="container">
                <div class="maps">
                    <h4 class="text-center mt-0 pt-0 mb-4">{{ __('home.location') }}</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2735402105336!2d109.24713381405701!3d-7.434954175311657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sTelkom%20Institute%20of%20Technology%20Purwokerto!5e0!3m2!1sen!2sid!4v1645769991631!5m2!1sen!2sid" class="w-100" height="450" style="border: 2px solid black;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
            <!-- END MAPS -->

            <!-- PRODUCT LAIN-->
        </div>
    </div>
    <section class="p-0">
        <div class="container-fluid" id="container">
                <h4 class="border-2 border-bottom">{{ __('produk&blog.otherproducts') }}</h4>
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-4">
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
                                    2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                    <br>Rp 5.000.000.000</p>
                                    <div class="d-flex">
                                        <div class="btn-group mx-auto w-100">
                                            <a href="/products/{{ $product->slug }}" class="btn btn-sm btn-outline-secondary rounded-pill">{{ __('produk&blog.detail') }}</a>
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
</section>
@endsection

