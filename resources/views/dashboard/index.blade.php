@extends('dashboard.layouts.main')

@section('container')
    <div class="dashboard1">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-2 border-bottom">
            <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
        </div>
    </div>
@endsection