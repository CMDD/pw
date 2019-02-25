@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    ARTÍCULOS
    <small>Crear</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li >Articulos</li>
    <li class="active">Crear</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-7">
  <div class="box box-primary">
    <div class="box-header">
      <h3 class="box-title">Crear un artículo</h3>
    </div>
    <form >
    <div class="box-body">
        <div class="form-group">
          <label for="">Titulo del artículo</label>
          <input type="text" name="" class="form-control" value="">
        </div>
        <div class="form-group">
          <label for="">Descripcion del artículo</label>
          <textarea id="editor" name="name" class="form-control" rows="8" cols="80"></textarea>
        </div>
    </div>
    </form>
  </div>
</div>
<!-- right column -->
        <div class="col-md-5">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Datos</h3>
            </div>

              <div class="box-body">

                <div class="form-group">
                  <label>Categoria</label>
                  <select class="form-control"  v-model="categoria" >
                    <option  value="">Seleccione...</option>
                    <option value="1" >Eventos</option>
                    <option value="2" >Librerias</option>
                    <option value="3" >Donaciones</option>
                    <option value="4" >Señal en vivo</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tag</label>
                  <select class="form-control"  v-model="categoria" >
                    <option  value="">Seleccione...</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Imagen principal</label>
                  <input type="file" id="file" ref="file" required  @change="imgPrincipal" value="">
                </div>
                <div class="form-group">
                  <label>Otras imagenes</label>
                  <input type="file" id="files" ref="files"  multiple @change="onFileSelected" value="">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" :disabled="enviando" >
                  <span v-if="enviando">Enviando...</span>
                  <span v-else>Subir</span>
                </button>
              </div>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
</div>
</section>
@stop

@push('scripts')
<!-- CK Editor -->
<script src="/admin/bower_components/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor')

  })
</script>
@endpush
