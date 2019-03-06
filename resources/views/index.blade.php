<!DOCTYPE html>
<html lang="es-ES">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Red de Emisoras Minuto de Dios</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type='text/css' media='all'>
    <link rel="stylesheet" href="css/style.css" type='text/css' media='all'>
    <link rel="stylesheet" href="css/slick.css" type='text/css' media='all'>
</head>

<body>
    <div id="app">
        <div class="container-fluid header">
            <nav class="container navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand mr-auto mr-lg-5" href="#"><img src="img/logo.svg" width="180" alt="Red de Emisoras Minuto de Dios"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item mx-2   {{request()->is('/') ? 'active':''}}">
                          <a href="/" class="nav-link">Bogotá</a>
                        </li>
                        <li class="nav-item mx-2 {{request()->is('medellin') ? 'active':''}}">
                          <a href="/medellin" class="nav-link">Medellín</a>
                        </li>
                        <li class="nav-item mx-2 {{request()->is('cartagena') ? 'active':''}}">
                            <a class="nav-link" href="/cartagena">Cartagena</a>
                        </li>
                        <li class="nav-item mx-2 {{request()->is('barranquilla') ? 'active':''}}">
                            <a class="nav-link" href="/barranquilla">Barranquilla</a>
                        </li>
                        <li class="nav-item mx-2 {{request()->is('ibague') ? 'active':''}}">
                            <a class="nav-link" href="/ibague">Ibagué</a>
                        </li>
                    </ul>
                    <div class="d-inline-block my-2 my-lg-0">
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="img/facebook-icon.svg" width="20"></a>
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="img/instagram-icon.svg" width="20"></a>
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="img/twitter-icon.svg" width="25"></a>
                        <a class="d-inline-block mx-1 icon-social" href="#"><img src="img/youtube-icon.svg" width="25"></a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="slide-home">
            <div style="background-image: url(img/slide-example.jpg);">
                <div class="content">
                    <img src="img/elmanestavivo.svg">
                    <a href="#" class="button">¡Suscríbete aquí!</a>
                </div>
            </div>
            <div style="background-image: url(img/slide-example.jpg);">
                <div class="content">
                    <img src="img/elmanestavivo.svg">
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row has-border-white">
                <div class="container">
                    <seccion1></seccion1>
                </div>
            </div>

            <noticias></noticias>
            <div class="row has-border-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 py-3 px-xl-5">
                            <div class="banner-blue">
                                <img src="img/banner-example.jpg">
                                <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 px-xl-5">
                            <div class="banner-blue">
                                <img src="img/banner-example.jpg">
                                <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 px-xl-5">
                            <div class="banner-blue">
                                <img src="img/banner-example.jpg">
                                <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-yellow">
                <div class="container">
                    <h2 class="subtitle">Redes sociales</h2>
                    <div class="row">
                        <div class="col-md-4 py-3 px-xl-5">
                            <div style="height: 400px; background: #fff;">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 px-xl-5">
                            <div style="height: 400px; background: #fff;">
                            </div>
                        </div>
                        <div class="col-md-4 py-3 px-xl-5">
                            <div style="height: 400px; background: #fff;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer-component></footer-component>
</div>


    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>
