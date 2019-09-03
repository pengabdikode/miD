<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>MID.ID | @yield('title')</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ URL::to('img/core-img/favicon.ico')}}">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ URL::to('css/core-style.css') }}">
    <link rel="stylesheet" href="{{ URL::to('style.css') }}">

</head>
<body>
    
    @include('partials.header')

    @include('partials.sidecart')

    @yield('content')

    @include('partials.footer')

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ URL::to('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ URL::to('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ URL::to('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{ URL::to('js/plugins.js')}}"></script>
    <!-- Classy Nav js -->
    <script src="{{ URL::to('js/classy-nav.min.js')}}"></script>
    <!-- Active js -->
    <script src="{{ URL::to('js/active.js')}}"></script>

</body>

</html>


