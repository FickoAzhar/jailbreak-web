@extends('dashboard.layouts.main')

@section('container')
    <div class="col-lg-11 container mt-4">
        <div class="card bg-light">
            <div class="py-2 border-3 border-bottom">
                <h2 class="text-center">Edit product</h2>
            </div>
            <form method="post" action="/dashboard/products/{{ $product->slug }}"  class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body py-0 my-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $product->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="card-body py-0 my-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $product->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="card-body py-0 my-3">
                    <label for="category" class="form-label">Category</label>
                    <select class="form-select" name="category_id">
                        @foreach ($categories as $category)
                            @if(old('category_id', $product->category_id) == $category->id)
                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="card-body py-0 my-3">
                    <label for="image" class="form-label">product Image</label>
                    <input type="hidden" name="oldImage" value="{{ $product->image }}">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"class="img-preview img-fluid mb-3 col-sm-5 d-block">  
                    @else
                        <img class="img-preview img-fluid mb-3 col-sm-5">  
                    @endif
                    <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="card-body py-0 my-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" required autofocus value="{{ old('lokasi', $product->lokasi) }}">
                    @error('lokasi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="card-body py-0 my-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    @error('deskripsi')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $product->deskripsi) }}">
                    <trix-editor input="deskripsi"></trix-editor>
                </div>

                <div class="card-body mt-2 py-0 mt-5">
                    <h6 class="border-2 border-bottom">Detail</h6>
                </div>
                
                <div class="card-body row py-0 my-0">
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required autofocus value="{{ old('price', $product->price) }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="luas" class="form-label">Luas</label>
                        <input type="text" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas" required autofocus value="{{ old('luas', $product->luas) }}">
                        @error('luas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="year_built" class="form-label">Tahun Dibuat</label>
                        <input type="text" class="form-control @error('year_built') is-invalid @enderror" id="year_built" name="year_built" required autofocus value="{{ old('year_built', $product->year_built) }}">
                        @error('year_built')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="sertificate" class="form-label">Sertifikat</label>
                        <input type="text" class="form-control @error('sertificate') is-invalid @enderror" id="sertificate" name="sertificate" required autofocus value="{{ old('sertificate', $product->sertificate) }}">
                        @error('sertificate')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tot_floors" class="form-label">total lantai</label>
                        <input type="text" class="form-control @error('tot_floors') is-invalid @enderror" id="tot_floors" name="tot_floors" required autofocus value="{{ old('tot_floors', $product->tot_floors) }}">
                        @error('tot_floors')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="bedroom" class="form-label">Kamar Tidur</label>
                        <input type="text" class="form-control @error('bedroom') is-invalid @enderror" id="bedroom" name="bedroom" required autofocus value="{{ old('bedroom', $product->bedroom) }}">
                        @error('bedroom')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="bathroom" class="form-label">Kamar Mandi</label>
                        <input type="text" class="form-control @error('bathroom') is-invalid @enderror" id="bathroom" name="bathroom" required autofocus value="{{ old('bathroom', $product->bathroom) }}">
                        @error('bathroom')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>    
                </div>

                <div class="card-body mt-4 py-0">
                    <h6 class="border-2 border-bottom">fasilitas</h6>
                </div>
                <div class="card-body py-0 my-0">
                    <label for="facility" class="form-label m-0"></label>
                    @error('facility')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="facility" type="hidden" name="facility" value="{{ old('facility', $product->facility) }}">
                    <trix-editor input="facility"></trix-editor>
                </div>
                <div class="card-body mt-2">
                    <button type="submit" class="btn btn-primary rounded-pill w-100">Update product</button>
                </div>
            </form> 
        </div>      
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

