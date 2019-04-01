@extends('layouts.web')
@section('content')
<div class="container-fluid">
            <div class="row justify-content-center without-border">
                <div class="col-md-8 col-xl-6 ">
                    <div class="row">
                        <div class="col-12">
                            <h1>Eventos en {{$nombre}}</h1>
                        </div>
                    </div>

                    

                    <div class="row">
                    <div class="col-12 event-list">
                        <div class="row event">
                            <div class="col-12 col-sm-3 image" style="background-image: url(/img/slide-example.jpg);"></div>
                            <div class="col-12 col-sm-6 align-self-center title">
                                <span class="month">May</span>
                                <span class="day">25</span>
                                <h2>Retiro de la familia</h2>
                            </div>
                            <div class="col-12 col-sm-3 align-self-center info">
                                <span class="hour">7:00 am - 12:30 pm</span>
                                <span class="place">Plaza de Banderas Minuto de Dios</span>
                                <span class="featuring">Padre Javier Riveros - Carisma Verde</span>
                                <a href="#" class="btn">+ Información</a>
                            </div>
                        </div>
                        <div class="row event">
                            <div class="col-12 col-sm-3 image" style="background-image: url(/img/art-example.jpg);"></div>
                            <div class="col-12 col-sm-6 align-self-center title">
                                <span class="month">Jun</span>
                                <span class="day">10</span>
                                <h2>Retiro de la familia</h2>
                            </div>
                            <div class="col-12 col-sm-3 align-self-center info">
                                <span class="hour">7:00 am - 12:30 pm</span>
                                <span class="place">Plaza de Banderas Minuto de Dios</span>
                                <span class="featuring">Padre Javier Riveros - Carisma Verde</span>
                                <a href="#" class="btn">+ Información</a>
                            </div>
                        </div>
                        <div class="row event">
                            <div class="col-12 col-sm-3 image" style="background-image: url(/img/slide-example.jpg);"></div>
                            <div class="col-12 col-sm-6 align-self-center title">
                                <span class="month">Ago</span>
                                <span class="day">05</span>
                                <h2>Retiro de la familia</h2>
                            </div>
                            <div class="col-12 col-sm-3 align-self-center info">
                                <span class="hour">7:00 am - 12:30 pm</span>
                                <span class="place">Plaza de Banderas Minuto de Dios</span>
                                <span class="featuring">Padre Javier Riveros - Carisma Verde</span>
                                <a href="#" class="btn">+ Información</a>
                            </div>
                        </div>
                    </div>
                </div>
                   
                    
                    <div class="row">
                        <div class="col-12 other-event">
                            <p>Otros eventos en: <a href="#">Medellín</a> - <a href="#">Barranquilla</a> - <a href="#">Cartagena</a> - <a href="#">Ibagué</a></p>
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
<link rel="stylesheet" href="/css/eventos.css" type='text/css' media='all'>
@endpush