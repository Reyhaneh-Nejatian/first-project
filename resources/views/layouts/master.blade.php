<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- css bootstrap -->
    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    @yield('css')
</head>
<body>
    @yield('content')

<!-- js -->
    <script src="{{asset('dist/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
@yield('js')
</body>
</html>
