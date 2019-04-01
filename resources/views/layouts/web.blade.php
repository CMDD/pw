<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="emisora" content="{{Session::get('emisora')}}" > 
    <title>Red de Emisoras Minuto de Dios</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" type='text/css' media='all'>
    <link rel="stylesheet" href="/css/main.css" type='text/css' media='all'>
   
    @stack('styles')
    <link rel="stylesheet" href="/css/slick.css" type='text/css' media='all'>

</head>
<body>
    <div id="app">
    <div class="player">
            <div class="mini">
                <span class="control paused"></span>
                <span class="title">Señal en vivo</span>
                <span class="btn-open"></span>
            </div>
            <div class="full">
                <div class="head">
                    <span class="control paused"></span>
                    <span class="title">Señal en vivo</span>
                </div>
                <select>
                    <option>EMD Bogotá 107.9FM</option>
                    <option>EMD Medellín 1079FM</option>
                    <option>EMD Cartagena 1079AM</option>
                    <option>EMD Barranquilla 107.9FM</option>
                    <option>EMD Ibagué 1234AM</option>
                    <option>RCCRadio.fm</option>
                </select>
                <div class="list">
                    <div class="item">
                        <div class="hour">08:00 am</div><div class="name">Este es el día</div>
                    </div>
                    <div class="item now">
                        <div class="hour">10:00 am</div><div class="name">Volando y orando</div>
                    </div>
                    <div class="item">
                        <div class="hour">12:00 pm</div><div class="name">Noticiero</div>
                    </div>
                    <div class="item">
                        <div class="hour">01:00 pm</div><div class="name">Santo Rosario</div>
                    </div>
                </div>
                <span class="btn-close"></span>
            </div>
        </div>
        <div class="container-fluid header">
            <nav class="container navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand mr-auto mr-lg-5" href="#"><img src="/img/logo.svg" width="180" alt="Red de Emisoras Minuto de Dios"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mx-2   {{Session::get('emisora') == 'bogota' ? 'active':''}}">
                          <a href="/emisora/bogota" class="nav-link">Bogotá</a>
                        </li>
                        <li class="nav-item mx-2 {{Session::get('emisora') == 'medellin' ? 'active':''}}">
                          <a href="/emisora/medellin" class="nav-link">Medellín</a>
                        </li>
                        <li class="nav-item mx-2 {{Session::get('emisora') == 'cartagena' ? 'active':''}}">
                            <a class="nav-link" href="/emisora/cartagena">Cartagena</a>
                        </li>
                        <li class="nav-item mx-2 {{Session::get('emisora') == 'barranquilla' ? 'active':''}}">
                            <a class="nav-link" href="/emisora/barranquilla">Barranquilla</a>
                        </li>
                        <li class="nav-item mx-2 {{Session::get('emisora') == 'ibague'? 'active':''}}">
                            <a class="nav-link" href="/emisora/ibague">Ibagué</a>
                        </li>
                    </ul>
                    <div class="d-inline-block my-2 my-lg-0">
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="/img/facebook-icon.svg" width="20"></a>
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="/img/instagram-icon.svg" width="20"></a>
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="/img/twitter-icon.svg" width="25"></a>
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="/img/youtube-icon.svg" width="25"></a>
                    </div>
                </div>
            </nav>
        </div>
        
        @yield('content')
        <footer-component></footer-component>
</div>


    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
    <script type="text/javascript" src="/js/slick.min.js"></script>
    <script type="text/javascript" src="/js/app.js"></script>
</body>

</html>
