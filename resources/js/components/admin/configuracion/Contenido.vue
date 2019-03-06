<template>
<div>
<div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>

              <h3 class="box-title">Contenido</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li v-for="contenido in contenidos" :key="contenido.id">
                  <!-- checkbox -->
                  <input type="checkbox" @change="cambiarEstadoContenido(contenido)" v-model="contenido.estado" :checked="contenido.estado">
                  <!-- todo text -->
                  <span class="text">{{contenido.nombre}}</span>
                  <!-- General tools such as edit or delete-->
                  <div class="tools">
                    <i class="fa fa-edit"></i>
                    <i class="fa fa-trash-o"></i>
                  </div>
                </li>
  
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Agregar contenido</button>
            </div>
          </div>
            <!-- /.box -->
          </div>
   <admin-categoria></admin-categoria>
        <!-- /.modal -->
          </div>
</template>
<script>
import axios from 'axios'
export default {
  data(){
    return{
      enviando:false,
      contenidos:[],
      
      contenido:''
    }
  },
  created(){
      axios.get('/api/contenidos/'+ 1).then(res=>{
       this.contenidos = res.data; 
     });
     
  },
  methods:{
    cambiarEstadoContenido(value){
      this.contenido = value;
      axios.post('api/cambiar-estado-contenido/',this.contenido).then(res=>{
          console.log(res);
      });
    }
    
  }
}
</script>

