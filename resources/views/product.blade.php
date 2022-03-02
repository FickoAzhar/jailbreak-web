@extends('layouts.main')

@section('container')
<section class="mt-5" id="container">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8">
                <h3 class="text-center mb-3">{{ $product->title }}</h3>
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <p>Kategori :</p>
                        <p class="Rumah border border-dark ms-1 px-1">{{ $product->category->name }}</p>
                    </div>
                    <div>
                        <i class="fa-solid fa-share-nodes p-2 m-auto border border-dark"></i>
                    </div>
                </div>

                @if ($product->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?" alt="" class="img-fluid">
                @endif
                
                <article class="deskripsi my-3 fs-6">
                    <h4>Detail</h4>
                    <div class="border border-dark py-3 px-4">
                        {!! $product->deskripsi !!}
                    </div>
                </article>
                <div class="detail mt-5">
                    <h4>Detail</h4>
                    <div class="border border-dark p-2">
                        <div class="row p-3">
                            <div class="col-6">
                                <p class="mb-1 mt-2">Kategori</p>
                                <h6 class="mb-0">Rumah</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Luas Bangunan</p>
                                <h6 class="mb-0">9m x 5m (45m2)</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Harga Per m2</p>
                                <h6 class="mb-0">Rp.45000000</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Tahun Pembuatan</p>
                                <h6 class="mb-0">2017</h6>
                                <hr class="mt-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fasilitas mt-5">
                    <h4>Fasilitas</h4>
                    <div class="border border-dark p-2">
                        <div class="row p-3">
                            <div class="col-6 d-flex py-1">
                                <i class="fa-solid fa-bed"></i>
                                <h6 class="ms-3">2 kamar tidur</h6>
                            </div>
                            <div class="col-6 d-flex py-1">
                                <i class="fa-solid fa-person-swimming"></i>
                                <h6 class="ms-3">1 Kolam renang dewasa</h6>
                            </div>
                            <div class="col-6 d-flex py-1">
                                <i class="fa-brands fa-pagelines"></i>
                                <h6 class="ms-3">taman seluas 5m2</h6>
                            </div>
                            <div class="col-6 d-flex py-1">
                                <i class="fa-solid fa-utensils"></i>
                                <h6 class="ms-3">1 ruang makan</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">            
                <form action="" class="position-sticky sticky-top buatform">
                    <div class="row border g-2 border-light justify-content-center p-2 rounded shadow ">
                        <h5 class="text-center py-3">Form request</h5>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="E-mail">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="No whatsapp">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Enter whatsapp">
                        </div>
                        <div class="col-md-12">
                            <textarea name="" id="" cols="30" rows="5" class="form-control"
                                placeholder="Masukan Pesan"></textarea>
                        </div>
                        <div class="col-md-12 d-grid py-2">
                            <button class="btn btn-primary">Request View</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- MAPS -->
            <section class="container" id="container">
                <div class="maps">
                    <h3 class="text-center mt-0 pt-0 mb-4">Lokasi</h3>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.2735402105336!2d109.24713381405701!3d-7.434954175311657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655ea49d9f9885%3A0x62be0b6159700ec9!2sTelkom%20Institute%20of%20Technology%20Purwokerto!5e0!3m2!1sen!2sid!4v1645769991631!5m2!1sen!2sid" class="w-100" height="450" style="border: 2px solid black;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
            <!-- END MAPS -->
            <!-- PRODUCT LAIN-->
        </div>
    </div>
    <section class="p-0">
        <div class="container-fluid" id="container">
                <h4>Produk Lainnya</h4>
                <hr>
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
                                            <a href="/products/{{ $product->slug }}" class="btn btn-sm btn-outline-secondary rounded-pill">Lihat Detail</a>
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
    </section>
</section>
@endsection

