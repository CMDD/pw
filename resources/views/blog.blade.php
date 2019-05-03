@extends('layouts.web')
@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center without-border">
                <div class="col-md-8 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h1>{{$contenido->nombre}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 blog-list">
                            @foreach($articulos as $articulo)
                            <div class="row article" >
                                <div class="col-12 col-md-4 image" style='background-image:url(/{{$articulo->image}})'></div>
                                <div class="col-12 col-md-8 info"  >
                                    <span class="date">3 de Mayo, 2019</span>
                                    <h2>{{$articulo->titulo}}</h2>                                 
                                    <p>{!!$articulo->descripcion_corta!!}</p>
                                    <a  href="{{url('/articulo/show',$articulo->id)}}"  class="readmore">Seguir leyendo</a>
                                </div>
                            </div>
                           @endforeach
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pag">
                            <a href="#">1</a><a href="#">2</a><span>3</span><a href="#">4</a><a href="#">5</a><a href="#">6</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xl-3">
                    <seccion1></seccion1>
                    <div class="banner-blue">
                        <img src="/img/banner-example.jpg">
                        <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                    </div>
                </div>
            </div>
        </div>
@stop
@push('styles')
<link rel="stylesheet" href="/css/blog.css" type='text/css' media='all'>
@endpush
