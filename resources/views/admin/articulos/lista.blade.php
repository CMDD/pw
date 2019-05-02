@extends('layouts.admin')
@section('content')
    <div id="container">
        <div class="topbar">
            <div class="show-nav"></div>
            <div class="tabs">
                <span>Artículos:</span>
                <a class="active" href="/lista/articulos">Todos</a>
                <a  href="#">Nuevo</a>
                <a href="#">Tags</a>
            </div>

            @include('admin.partials.perfil')

        </div>

        <div class="content">
            <div class="maincolumn">
                <div class="box list">
                    <table>
                        <tr class="titles"><td>Título</td><td>Categoría</td><td>Autor</td><td>Fecha de publicación</td><td class="actions">Acciones</td></tr>
                        <tr><td>Reflexión de navidad para familias desesperadas</td><td>Noticias, Artículos</td><td>Padre Javier Riveros</td><td>12 de mayo, 2019</td><td class="actions"><a href="#" class="view"></a><a href="#" class="edit"></a><a href="#" class="delete"></a></td></tr>
                        <tr><td>Reflexión de navidad para familias desesperadas</td><td>Artículos</td><td>Padre Javier Riveros</td><td>12 de mayo, 2019</td><td class="actions"><a href="#" class="view"></a><a href="#" class="edit"></a><a href="#" class="delete"></a></td></tr>
                        <tr><td>Reflexión de navidad para familias desesperadas</td><td>Evangelización</td><td>Padre Javier Riveros</td><td>12 de mayo, 2019</td><td class="actions"><a href="#" class="view"></a><a href="#" class="edit"></a><a href="#" class="delete"></a></td></tr>
                        <tr><td>Reflexión de navidad para familias desesperadas</td><td>Formación, Evangelización</td><td>Padre Javier Riveros</td><td>12 de mayo, 2019</td><td class="actions"><a href="#" class="view"></a><a href="#" class="edit"></a><a href="#" class="delete"></a></td></tr>
                    </table>
                    <div class="pagination"><a href="#">1</a><span>2</span><a href="#">3</a><a href="#">4</a></div>
                </div>
            </div>
        </div>

    </div>

@stop

@push('style')

<link rel="stylesheet" href="css/articulos.css" type='text/css' media='all'>
@endpush

@push('scripts')

@endpush
