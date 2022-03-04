@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-3 border-bottom">
        <h1 class="h2 m-0">Tambah Produk Baru</h1>
    </div>

    <div class="col-lg-11 container">
        <form method="post" action="/dashboard/products"  class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
             
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        @if(old('category_id') == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            
            <div class="mb-3">
                <label for="image" class="form-label">Gambar produk</label>
                <img class="img-preview img-fluid mb-3 col-sm-5">
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required autofocus value="{{ old('lokasi') }}">
                @error('lokasi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                @error('deskripsi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
                <trix-editor input="deskripsi"></trix-editor>
            </div>

            <div class="border-2 border-bottom mt-5 mb-3">
                <h6>Detail</h6>
            </div>
            
            <div class="mb-3 row">
                <div class="col-md-6 mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required autofocus value="{{ old('price') }}">
                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="luas" class="form-label">Luas</label>
                    <input type="text" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas" required autofocus value="{{ old('luas') }}">
                    @error('luas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="year_built" class="form-label">Tahun Dibuat</label>
                    <input type="text" class="form-control @error('year_built') is-invalid @enderror" id="year_built" name="year_built" required autofocus value="{{ old('year_built') }}">
                    @error('year_built')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="sertificate" class="form-label">Sertifikat</label>
                    <input type="text" class="form-control @error('sertificate') is-invalid @enderror" id="sertificate" name="sertificate" required autofocus value="{{ old('sertificate') }}">
                    @error('sertificate')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="tot_floors" class="form-label">total lantai</label>
                    <input type="text" class="form-control @error('tot_floors') is-invalid @enderror" id="tot_floors" name="tot_floors" required autofocus value="{{ old('tot_floors') }}">
                    @error('tot_floors')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="bedroom" class="form-label">Kamar Tidur</label>
                    <input type="text" class="form-control @error('bedroom') is-invalid @enderror" id="bedroom" name="bedroom" required autofocus value="{{ old('bedroom') }}">
                    @error('bedroom')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="bathroom" class="form-label">Kamar Mandi</label>
                    <input type="text" class="form-control @error('bathroom') is-invalid @enderror" id="bathroom" name="bathroom" required autofocus value="{{ old('bathroom') }}">
                    @error('bathroom')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>    
            </div>

            <div class="border-2 border-bottom mt-5 mb-3">
                <h6>fasilitas</h6>
            </div>
            <div class="mb-4">
                <label for="facility" class="form-label m-0"></label>
                @error('facility')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="facility" type="hidden" name="facility" value="{{ old('facility') }}">
                <trix-editor input="facility"></trix-editor>
            </div>
            

            <button type="submit" class="btn btn-primary rounded-pill w-100">Create product</button>
        </form>       
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/products/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
        });

        document.addEventListener('trix-file-accept', function(e){
            e.preventDefault();
        })

        function previewImage(){
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>
@endsection