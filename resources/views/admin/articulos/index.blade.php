@extends('layouts.admin')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    ARTÍCULOS
    <small>Descripción</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active">Inicio</li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Listado de Artículos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Titulo</th>
                  <th>Descripcion</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Titulo</td>
                  <td>Descripcion</td>
                  <td>
                    <a class="btn btn-primary btn-xs" href="#"> <i class="fa fa-eye"></i> </a>
                    <a class="btn btn-danger btn-xs" href="#"> <i class="fa fa-times"></i> </a>
                  </td>
                </tr>
                <tr>
                  <td>Titulo</td>
                  <td>Descripcion</td>
                  <td>
                    <a class="btn btn-primary btn-xs" href="#"> <i class="fa fa-eye"></i> </a>
                    <a class="btn btn-danger btn-xs" href="#"> <i class="fa fa-times"></i> </a>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</section>
@stop

@push('style')
<!-- DataTables -->
<link rel="stylesheet" href="admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
<!-- DataTables -->
<script src="admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true,
      language: {
                    url: "{{ asset('css/spanish.json') }}"
                }
    })
  })
</script>
@endpush
