<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>


    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    
    {{-- google fonts roboto --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">


    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="{{ asset('frontend/css/bootstrab5.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet" />
    
    {{-- owl css files --}}
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('frontend/css/owl.theme.default.min.css') }}" rel="stylesheet" />
</head>

<style>
    a{
        text-decoration: none !important;
    }
</style>

<body>
    @include('layouts.inc.frontnav')
    <div class="content">
        @yield('content')
    </div>


    {{-- jquery --}}
    <script src="{{ asset('frontend\js\jquery-3.6.0.min.js') }}"></script>
    {{-- scripts core files --}}
    <script src="{{ asset('frontend\js\bootstarbscript.js') }}"></script>
    {{-- owl js files --}}
    <script src="{{ asset('frontend\js\owl.carousel.min.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    {{-- custom js --}}
    <script src="{{ asset('frontend\js\custom.js') }}"></script>

    {{-- script cdn --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>





    {{-- display the message  sweet alert --}}
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

    @yield('scripts')
</body>


</html>
