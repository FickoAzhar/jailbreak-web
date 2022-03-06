@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-0 mb-3 border-2 border-bottom">
        <h2>The Dream's Property Blog</h2>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif


    <div class="table-responsive mt-4">
      <div class="d-flex justify-content-end me-3">
        <a href="/dashboard/blogs/create" class="btn btn-primary mb-3"><span data-feather="plus"></span>  New blog</a>
      </div>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Title</th>
              <th scope="col">Created at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->created_at->format('d, M Y') }}</td>
                    <td>
                        <a href="/dashboard/blogs/{{ $blog->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/blogs/{{ $blog->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                        <form action="/dashboard/blogs/{{ $blog->slug }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                        </form>
                    </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection