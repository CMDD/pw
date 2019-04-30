@extends('layouts.web')
@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center without-border">
                <div class="col-md-8 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h1>Evangelización</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 blog-list">
                            <div class="row article">
                                <div class="col-12 col-md-4 image" style="background-image: url(img/slide-example.jpg);"></div>
                                <div class="col-12 col-md-8 info">
                                    <span class="date">25 de febrero, 2019</span>
                                    <h2>Jesús el salvador</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id arcu tincidunt ultricies a sed arcu. Mauris venenatis hendrerit sem. Nam sagittis ex vel dolor porta mollis. Donec eget mi in augue lobortis mollis ut in velit. Nam mi arcu, cursus et ultricies a...</p>
                                    <a href="#" class="readmore">Seguir leyendo</a>
                                </div>
                            </div>
                            <div class="row article">
                                <div class="col-12 col-md-4 image" style="background-image: url(img/banner-example.jpg);"></div>
                                <div class="col-12 col-md-8 info">
                                    <span class="date">8 de abril, 2019</span>
                                    <h2>Los niños buscan su hogar</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id arcu tincidunt ultricies a sed arcu. Mauris venenatis hendrerit sem. Nam sagittis ex vel dolor porta mollis. Donec eget mi in augue lobortis mollis ut in velit. Nam mi arcu, cursus et ultricies a...</p>
                                    <a href="#" class="readmore">Seguir leyendo</a>
                                </div>
                            </div>
                            <div class="row article">
                                <div class="col-12 col-md-4 image" style="background-image: url(img/news-example.jpg);"></div>
                                <div class="col-12 col-md-8 info">
                                    <span class="date">13 de mayo, 2019</span>
                                    <h2>Se acerca Péntecostes</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel libero id arcu tincidunt ultricies a sed arcu. Mauris venenatis hendrerit sem. Nam sagittis ex vel dolor porta mollis. Donec eget mi in augue lobortis mollis ut in velit. Nam mi arcu, cursus et ultricies a...</p>
                                    <a href="#" class="readmore">Seguir leyendo</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pag">
                            <a href="#">1</a><a href="#">2</a><span>3</span><a href="#">4</a><a href="#">5</a><a href="#">6</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xl-3">
                    <div class="banner-blue">
                        <ul class="menu-accordion">
                            <li class="has-children opened">
                                <a href="#">Contenido</a>
                                <ul>
                                    <li><a href="#">Eventos</a></li>
                                    <li><a href="#">Librerías</a></li>
                                    <li><a href="#">Donaciones</a></li>
                                    <li><a href="#">Señal en vivo</a></li>
                                    <li><a href="#">Shalom</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Evangelización</a></li>
                            <li><a href="#">Vivir mejor</a></li>
                            <li><a href="#">Hablemos de fe</a></li>
                            <li><a href="#">Formación</a></li>
                            <li><a href="#">Editorial</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Noticias</a></li>
                        </ul>
                        <input type="search">
                    </div>
                    <div class="banner-blue">
                        <img src="img/banner-example.jpg">
                        <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                    </div>
                </div>
            </div>
        </div>
@stop
@push('styles')
<link rel="stylesheet" href="/css/blog.css" type='text/css' media='all'>
@endpush
