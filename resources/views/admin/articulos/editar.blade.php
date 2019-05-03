@extends('layouts.admin')
@section('content')
<div id="container">
            <div class="topbar">
                <div class="show-nav"></div>
                <div class="tabs">
                    <span>Artículos:</span>
                    <a href="/lista/articulos">Todos</a>
                    <a class="active" href="#">Nuevo</a>
                    <a href="#">Tags</a>
                </div>

                @include('admin.partials.perfil')

            </div>
            <div class="content">
            <form action="{{url('actualizar/articulo',$articulo->id)}}" method="POST" enctype="multipart/form-data">
                <div class="maincolumn">        
                    <div class="box editor">                        
                        {!!csrf_field()!!}
                        <input class="title" required name="titulo" type="text" value="{{$articulo->titulo}}">
                        <input name="autor" class="author" type="text" value="{{$articulo->autor}}">
                        <textarea id="ckeditor" name="descripcion"  required>{{$articulo->descripcion}}</textarea>
                        <div class="image">
                            <span>Imagen destacada:</span>
                            <input type="file"  name="file" id="file" class="inputfile" />
                            <label for="file"><span>Agregar</span></label>
                            <span><em>Tamaño recomendado: 1200 × 700px</em></span>
                        </div>
                        <label class="description">Descripción corta:<textarea rows="4" name="descripcion_corta">{{$articulo->descripcion_corta}}</textarea></label>
                    </div>
                </div>
                <div class="sidebar">
                   
                    <div class="widget active">
                        <div class="title">Categorías</div>
                        <div class="content">
                            @foreach($contenidos as $contenido)
                            <div  class="child">
                                    <label><input  value="{{$contenido->id}}" name="contenido"  type="checkbox">{{$contenido->nombre}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget active">
                        <div class="title">Publicación</div>
                        <div class="content">
                            <button type="submit" class="btn"><span>Editar</span></button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>

@stop

@push('style')

<link rel="stylesheet" href="css/articulos.css" type='text/css' media='all'>
@endpush

@push('scripts')
<!--
<script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(
        document.querySelector( '#ckeditor' )
    )
</script>-->

<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
@endpush
