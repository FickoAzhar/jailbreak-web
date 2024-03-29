@extends('dashboard.layouts.main')

@section('container')
    <div class="col-lg-11 container mt-4">
        <div class="card bg-light">
            <div class="py-2 mb-3 border-3 border-bottom">
                <h2 class="text-center">Edit blog</h2>
            </div>
            <form method="post" action="/dashboard/blogs/{{ $blog->slug }}"  class="mb-5" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="card-body py-0 my-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $blog->title) }}">
                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="card-body py-0 my-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $blog->slug) }}">
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="card-body py-0 my-3">
                    <label for="image" class="form-label">blog Image</label>
                    <input type="hidden" name="oldImage" value="{{ $blog->image }}">
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}"class="img-preview img-fluid mb-3 col-sm-5 d-block">  
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
                    <label for="body" class="form-label">Body</label>
                    @error('body')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="body" type="hidden" name="body" value="{{ old('body', $blog->body) }}">
                    <trix-editor input="body"></trix-editor>
                </div>
                <div class="card-body mt-3">
                    <button type="submit" class="btn btn-primary rounded-pill w-100">Update blog</button>
                </div>
            </form>  
        </div>     
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function(){
            fetch('/dashboard/blogs/checkSlug?title=' + title.value)
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

