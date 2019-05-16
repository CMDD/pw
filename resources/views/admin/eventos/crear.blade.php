@extends('layouts.admin')
@section('content')

<div id="container">
            <div class="topbar">
                <div class="show-nav"></div>
                <div class="tabs">
                    <span>Eventos:</span>
                    <a href="#">Todos</a>
                    <a class="active" href="#">Nuevo</a>
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
                <form action="{{url('store-evento')}}" method="POST" enctype="multipart/form-data">
                {!!csrf_field()!!}
                    <div class="maincolumn">
                        <div class="box editor">
                            <input class="title" type="text" name="nombre" placeholder="Nombre del evento">
                            <div class="group date">
                                <span>Fecha:</span>
                                <input type="date" name="fecha" >
                            </div>
                            <div class="group hour">
                                <span>Hora:</span>
                                <input type="text" name="hora_desde" placeholder="00:00 am">a<input name="hora_hasta" type="text" placeholder="00:00 am">
                            </div>
                            <div class="group place">
                                <span>Lugar:</span>
                                <input type="text" name="lugar">
                            </div>
                            <div class="group featuring">
                                <span>Invitados:</span>
                                <input type="text" name="invitados">
                            </div>
                            <p>Descripción e información adicional:</p>
                            <textarea id="ckeditor" name="descripcion"></textarea>
                            <div class="image">
                                <span>Imagen destacada:</span>
                                <input type="file" name="file"  id="file" class="inputfile" />
                                <label for="file"><span>Agregar</span></label>
                                <span><em>Tamaño recomendado: 1920 × 700px</em></span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar">
                        <div class="widget active">
                            <div class="title">Publicación</div>
                            <div class="content">
                            <input type="submit" class="btn" value="Publicar">
                                <!-- <a href="#" class="btn"><span>Publicar</span></a> -->
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@stop

@push('styles')

    <link rel="stylesheet" href="/panel/css/eventos.css" type='text/css' media='all'>

@endpush

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/12.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor.create(
        document.querySelector( '#ckeditor' )
    )
</script>
<!--
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>
-->
@endpush
