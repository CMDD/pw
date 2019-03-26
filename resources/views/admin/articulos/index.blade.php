@extends('layouts.admin')
@section('content')
<div id="container">
            <div class="topbar">
                <div class="show-nav"></div>
                <div class="tabs">
                    <span>Artículos:</span>
                    <a href="#">Todos</a>
                    <a class="active" href="#">Nuevo</a>
                    <a href="#">Tags</a>
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
            <form action="{{url('crear/articulo')}}" method="POST" enctype="multipart/form-data">
                <div class="maincolumn">        
                    <div class="box editor">                        
                            {!!csrf_field()!!}
                            <input class="title" name="titulo" type="text" placeholder="Título">
                            <label class="url">https://minutodedios.fm/<input type="text" name="slug" placeholder="url"></label>
                            <textarea id="ckeditor" name="descripcion"></textarea>  
                            <div class="image">
                                <span>Imagen destacada:</span>
                                <input type="file" id="file" class="inputfile" />
                                <label for="file"><span>Agregar</span></label>
                                <span><em>Tamaño recomendado: 1920 × 700px</em></span>
                            </div>                      
                    </div>
                </div>
                <div class="sidebar">
                    <div class="widget active">
                        <div class="title">Publicación</div>
                        <div class="content">
                            
                            <button type="submit" class="btn">Publicar</button>
                           
                        </div>
                    </div>
                    <div class="widget">
                        <div class="title">Categorías</div>
                        <div class="content">
                            @foreach($contenidos as $contenido)
                            <div  class="child">
                                    <label><input value="{{$contenido->id}}" name="contenido"  type="checkbox">{{$contenido->nombre}}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="widget">
                        <div class="title">Tags</div>
                        <div class="content">
                            Lista de etiquetas...
                        </div>
                    </div>
                    <div class="widget">
                        <div class="title">Otra cosa</div>
                        <div class="content">
                            Otra cosa...
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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>

@endpush
