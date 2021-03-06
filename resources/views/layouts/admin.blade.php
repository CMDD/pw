<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="user" content="{{Auth::User()}}">
    <meta name="emisora" content="{{Session::get('emisora')}}" > 
    <title>Administrador</title>
        <link rel="stylesheet" href="/panel/css/main.css" type='text/css' media='all'>
        <link rel="stylesheet" type="text/css" href="{{ asset('/panel/css/main.css') }}">
        @stack('styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('/panel/css/slick.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/panel/css/articulos.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div id="nav">
            <div class="top">
                <img src="/panel/img/logo-ixtus.svg">
                <div class="hide-nav"></div>
            </div>
            <div class="menu">
                @include('admin.partials.nav')
            </div>
            <div class="bottom">

            </div>
        </div>

        <div id="container">
           @yield('content')
        </div>

    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/panel/js/main.js"></script>
    <script type="text/javascript" src="/panel/js/slick.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
    @stack('scripts')


</body>

</html>