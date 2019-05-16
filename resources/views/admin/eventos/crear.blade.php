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
                <form>
                    <div class="maincolumn">
                        <div class="box editor">
                            <input class="title" type="text" placeholder="Nombre del evento">
                            <div class="group date">
                                <span>Fecha:</span>
                                <input type="text" placeholder="D">/<input type="text" placeholder="M">/<input type="text" placeholder="A">
                            </div>
                            <div class="group hour">
                                <span>Hora:</span>
                                <input type="text" placeholder="00:00 am">a<input type="text" placeholder="00:00 am">
                            </div>
                            <div class="group place">
                                <span>Lugar:</span>
                                <input type="text">
                            </div>
                            <div class="group featuring">
                                <span>Invitados:</span>
                                <input type="text">
                            </div>
                            <p>Descripción e información adicional:</p>
                            <textarea id="ckeditor"></textarea>
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
                                <a href="#" class="btn"><span>Publicar</span></a>
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

    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'ckeditor' );
    </script>

@endpush
