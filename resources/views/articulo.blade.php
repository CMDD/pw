@extends('layouts.web')
@section('content')
<div class="container-fluid">
            <div class="row justify-content-center has-border-white-bottom">
                <div class="col-md-8 col-xl-6">
                    <div class="featured-image">
                        <img src="/{{$articulo->image}}">
                    </div>
                    <h1>{!!$articulo->titulo!!}</h1>
                    {!!$articulo->descripcion!!}
                </div>
                <div class="col-md-4 col-xl-3">
                   <seccion1></seccion1>
                    <div class="banner-blue">
                        <img src="/img/banner-example.jpg">
                        <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center bg-yellow">
                <div class="col-12">
                    <h2 class="subtitle">Artículos relacionados</h2>
                </div>
                <div class="col-sm-4 col-xl-3">
                    <div class="banner-blue">
                        <img src="/img/banner-example.jpg">
                        <h3>Nombre</h3>
                    </div>
                </div>
                <div class="col-sm-4 col-xl-3">
                    <div class="banner-blue">
                        <img src="/img/banner-example.jpg">
                        <h3>Nombre</h3>
                    </div>
                </div>
                <div class="col-sm-4 col-xl-3">
                    <div class="banner-blue">
                        <img src="/img/banner-example.jpg">
                        <h3>Nombre</h3>
                    </div>
                </div>
            </div>
        </div>

@stop

@push('styles')
<link rel="stylesheet" href="/css/articulo.css" type='text/css' media='all'>
@endpush