@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3 d-flex justify-content-center">
            <div class="col-lg-11">
                <a href="/dashboard/products" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my product</a>
                <a href="/dashboard/products/{{ $product->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/products/{{ $product->slug }}" method="post" class="d-inline mb-5">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
                </form>
                <h3 class="text-center p-3 mt-5">{{ $product->title }}</h3>
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <p>Diposting pada : {{ $product->created_at }}</p>
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
                    <h4>Deskripsi</h4>
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
                                <h6 class="mb-0">{{ $product->category->name }}</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Luas Bangunan</p>
                                <h6 class="mb-0">9m x 5m (45m2)</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Harga Per m2</p>
                                <h6 class="mb-0">Rp. {{ $product->price }}</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Tahun Pembuatan</p>
                                <h6 class="mb-0">{{ $product->year_built }}</h6>
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
        </div>
    </div>
@endsection

