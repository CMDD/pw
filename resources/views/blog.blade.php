@extends('layouts.web')
@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center without-border">
                <articulos></articulos>
                
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
