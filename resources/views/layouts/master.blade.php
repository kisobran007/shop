<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('styles')
</head>
<body>
    @include('partials.header')
    <div class="container">
    @yield('content')
    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    @yield('scripts')
</body>
</html>
