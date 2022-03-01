<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/icon/css/all.css">
    <link rel="stylesheet" href="/css/style.css">

    <title>{{ $title }}</title>
</head>
<body>
    @include('partials.navbar')
      
    @yield('container')

    @include('partials.footer')

    <script src="/js/bootstrap.bundle.min.js"></script>
</body>
</html>
