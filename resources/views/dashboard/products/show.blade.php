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
                <h2 class="text-center p-3 mt-5">{{ $product->title }}</h2>
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <p>Diperbarui pada : {{ $product->updated_at->format('d, M Y') }}</p>
                    </div>
                </div>

                @if ($product->image)
                    <div style="max-height: 350px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="" class="img-fluid">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?" alt="" class="img-fluid">
                @endif
                
                <article class="deskripsi pt-3 my-3 fs-6">
                    <h5>Deskripsi</h5>
                    <div class="body border border-dark py-3 px-4">
                        {!! $product->deskripsi !!}
                    </div>
                </article>
                <div class="detail mt-4">
                    <h5>Detail</h5>
                    <div class="border border-dark p-2">
                        <div class="row p-3">
                            <div class="col-6">
                                <p class="mb-1 mt-2">Kategori</p>
                                <h6 class="mb-0">{{ $product->category->name }}</h6>
                                <hr class="mt-0">
                            </div>
                            <div class="col-6">
                                <p class="mb-1 mt-2">Luas Bangunan</p>
                                <h6 class="mb-0">{{ $product->luas }} m2</h6>
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
                                <p class="text-dark fs-6">
                                    {!! $product->facility !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection

