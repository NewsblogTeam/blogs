<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @include('layout.head')
</head>
<body>
    <div class="container">
        <div class="header">
            @include('layout.header')
        </div>
        <div class="content">
            @yield('content')
        </div>
        <div class="footer">
            @include('layout.footer')
        </div>
    </div>
</body>
</html>
