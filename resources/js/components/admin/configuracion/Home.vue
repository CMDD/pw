<template>
<div class="">
<!-- Content Header (Page header) -->
  <section class="content-header">
  <h1>
    Configuracion
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
          <h3 class="box-title">SLIDER</h3>
        </div>
        <form >
          <div class="box-body">

            <div class="col-md-12">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                  <img src="img/slide-example.jpg" alt="First slide">
                  </div>
                  <div class="item">
                  <img src="img/slide-example.jpg" alt="Second slide">
                  </div>
                  <div class="item">
                  <img src="img/slide-example.jpg" alt="Third slide">
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <div class="form-group col-md-6">
              <label for="">Imagen</label>
              <input type="file" name="" class="form-control" value="">
            </div>
            <div class="box-footer col-md-12">
              <button type="submit" class="btn btn-primary" :disabled="enviando" >
                <span v-if="enviando">Enviando...</span>
                <span v-else>Subir</span>
              </button>
            </div>

            <div class="col-md-12">
              <div class="timeline-item">


                <h3 class="timeline-header"><a href="#">Imagenes</a> Slider</h3>

                <div class="timeline-body">
                  <img style="width:25%" src="img/slide-example.jpg" alt="..." class="margin">
                  <img style="width:25%" src="img/slide-example.jpg" alt="..." class="margin">
                  <img style="width:25%" src="img/slide-example.jpg" alt="..." class="margin">
                  <img style="width:25%" src="img/slide-example.jpg" alt="..." class="margin">
                </div>
              </div>
            </div>




          </div>
        </form>
      </div>

    </div>
  </div>
</section>
</div>

</template>

<script>
export default {
  data(){
    return{
      enviando:false
    }
  }
}
</script>

<style lang="css">
</style>
