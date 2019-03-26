@extends('layouts.web')
@section('content')
<div class="slide-home" >
    
    @forelse($sliders as $slider)
    <div style="background-image: url(/{{$slider->image}});">
        <div class="content">
            <!-- <img src="/img/elmanestavivo.svg"> -->
            @if($slider->mostrar_boton)
            <a href="#" class="button">{{$slider->texto_boton}}</a>
            @endif
        </div>
    </div>
    
    @empty 
    <div style="background-image: url(/img/slide-example.jpg);">
        <div class="content">
            <!-- <img src="/img/elmanestavivo.svg"> -->
            <!-- <a href="#" class="button">Sin Slider</a> -->
            
        </div>
    </div>
        
    @endforelse   
</div>
        
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center has-border-white">
                <div class="col-md-5 col-lg-4 col-xl-3">
                    <seccion1></seccion1>
                </div>
                <div class="col-md-7 col-lg-8 col-xl-6">
                    <h3>Evangelización</h3>
                    <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos. Por eso te hemos traído estos tutoriales para que cambies esa decoración y coloques nuevos elementos, realizados con mucho amor y creatividad. Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos. Por eso te hemos traído estos tutoriales para que cambies esa decoración y coloques nuevos elementos, realizados con mucho amor y creatividad.</p>
                    <a href="#" class="readmore">Seguir leyendo</a>
                </div>
            </div>
            <noticias></noticias>
            
            <div class="row has-border-white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 py-3 px-xl-5">
                            <div class="banner-blue">
                                <img src="/img/banner-example.jpg">
                                <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 px-xl-5">
                            <div class="banner-blue">
                                <img src="/img/banner-example.jpg">
                                <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos.</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 px-xl-5">
                            <div class="banner-blue">
                                <img src="/img/banner-example.jpg">
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

@stop
@push('styles')
<link rel="stylesheet" href="/css/home.css" type='text/css' media='all'>
@endpush        