@extends('layouts.admin')
@section('content')
<div class="topbar">
<div class="show-nav"></div>
    <div class="tabs">
        <span>Configuración:</span>
        <a href="#" class="active">General</a>
    </div>

    <div class="user dropdown">
        <div class="open"><span>J</span></div>
        <div class="dropdown-content">
            <div class="group name">Hola, John</div>
            <div class="group links">
                <a href="#">IXTUS</a>
                <a href="#">Pagina Web</a>
                <a href="#">App ¡El Man Está Vivo!</a>
            </div>
            <a href="#" class="btn"><span>Cerrar sesión</span></a>
        </div>
    </div>

</div>
<div class="content">
    <div class="maincolumn">
        <div class="box slide-editor">
            <div class="slide">
                @foreach($sliders as $slider)
                <div style="background-image: url({{$slider->image}});">
                @if($slider->mostrar_boton)
                <a href="{{$slider->url_boton}}" class="button">{{$slider->texto_boton}}</a>
                @endif
                </div>
                @endforeach
            </div>
            <div class="slide-items">
                @foreach($sliders as $slider)
                <div class="item" style="background-image: url({{$slider->image}});"><a href="{{url('eliminar/slider',$slider->id)}}" class="delete"></a></div>
                @endforeach
            </div>

            <admin-slider></admin-slider>
        </div>
    </div>
    <admin-secciones></admin-secciones>
</div>

@stop
@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('/panel/css/configuracion.css') }}">
@endpush
