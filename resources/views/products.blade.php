@extends('layouts.main')

@section('container')
    <!-- ABOUT US -->
    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 my-auto">
                    <h1>The Dream's property</h1>
                    <p class="text-align-justify">Kami menyediakan beberapa pilihan kategori properti yang terbaik. Pilihlah properti yang menurut anda terbaik bagi anda dan keluarga. Untuk mencari properti sesuai lokasi yang anda inginkan, silahkan lakukan pencarian dibawah ini.
                    </p>

                    <!-- search bar 1 -->
                    <form action="/products">
                        {{-- @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif
                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif --}}
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </div>
                    </form>

                    <!-- search bar 2 -->
                    <!-- <div class="input-group flex-nowrap py-3">
                        <span class="input-group-text"><i class="fa-solid fa-search"></i></span>
                        <input type="text" class="form-control" placeholder="Cari produk properti" aria-label="Username" aria-describedby="addon-wrapping">
                    </div> -->

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
                    <p>Client Satisfaction</p>
                </div>
                <div class="feature col">
                    <h2>55ha</h2>
                    <p>Land Area</p>
                </div>
                <div class="feature col">
                    <h2>60%</h2>
                    <p>Open Space</p>
                </div>
                <div class="feature col">
                    <h2>43km</h2>
                    <p>Jogging Track</p>
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
                    <h1>Produk yang kami tawarkan</h1>
                    <p>Lorem ipsum dolor sit amet consectetur nisi necessitatibus repellat distinctio eveniet eaque fuga in cumque optio consectetur harum vitae debitis sapiente praesentium aperiam aut</p>
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
                                <p class="card-text">{{ $product->excerpt }}</p>
                                2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                                <div class="d-flex">
                                    <div class="btn-group mx-auto w-100">
                                        <a href="/products/{{ $product->slug }}" class="btn btn-sm btn-outline-secondary rounded-pill">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="col">
                    <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c1.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-house-chimney-user"></i>  Rumah</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c2.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-house-chimney-user"></i>  Rumah</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c3.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c4.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-warehouse"></i>  Villa</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c5.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                  <div class="card shadow-sm product position-relative overflow-hidden">
                        <img src="asset/img/c6.jpg" alt="">
                        <div class="caption position-absolute top-0 left-0 mt-2 ms-0">
                            <p class="text-white text-center px-3 py-1 my-auto"><i class="fa-solid fa-hotel"></i>  Apartement</p>
                        </div>
                        <div class="card-body">
                            <h3 class="card-text fs-6">Rumah Joglo Jakarta Barat</h3>
                            <p class="card-text fs-6">Jl. Prapanca R No.43 Blok IV Jakarta Barat
                                <br>2 <i class="fa-solid fa-bed"></i> 2 <i class="fa-solid fa-hot-tub"></i> 45 m2
                                <br>Rp 5.000.000.000</p>
                            <div class="d-flex">
                                <div class="btn-group mx-auto w-100">
                                    <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $products->links() }}
        </div>
        {{-- <nav aria-label="Page navigation example">
            <ul class="pagination mt-4 justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav> --}}
    </section>
    <!-- END PRODUCT -->
@endsection