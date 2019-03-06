<template>
<div>
 <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="box box-primary">
            <div class="box-header">
              <i class="ion ion-clipboard"></i>
              <h3 class="box-title">Catagorias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
                <li v-for="categoria in categorias" v-if="!categoria.subcategoria"  :key="categoria.id">
                    
                        <!-- checkbox -->
                            <input type="checkbox"   @change="cambiarEstadoCategoria(categoria)" v-model="categoria.estado" :checked="categoria.estado">
                            <!-- todo text -->
                            <span class="text">{{categoria.nombre}}</span>
                            <!-- General tools such as edit or delete-->
                            <div class="tools">
                                <i class="fa fa-edit"></i>
                                <i class="fa fa-trash-o"></i>
                            </div>
                </li>
              </ul>
               <div class="box box-solid">
                 

                   
                </div> 
               
        </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
              <button data-toggle="modal" data-target="#modal-categoria" type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Agregar catgoria</button>
              <button data-toggle="modal" data-target="#modal-subcategoria" type="button" class="btn btn-default pull-left"><i class="fa fa-plus"></i> Agregar subcatgoria</button>
            </div>
          </div>
            <!-- /.box -->
          </div>
        <div class="modal fade" id="modal-categoria">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">AGREGAR CATEGORIA</h4>
              </div>
              <form @submit.prevent="crearCategoria">
              <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input required class="input-categoria" v-model="form.nombreCategoria" type="text" placeholder="NOMBRE">
                            <textarea class="input-categoria" v-model="form.descripcionCategoria" placeholder="DESCRIPCIÓN" id="" cols="30" rows="2"></textarea>
                            <input  v-model="form.permitirSubcategoria" type="checkbox"  > Permitir agregar subcategorias
                        </div>
                        <div class="col-md-6">
                        <p>Cuando no sabes qué camino debes tomar, es tiempo de no tomar ningún camino, sino de pararse,    orar y esperar a que amanezca. La luz del día nos dará las referencias necesarias para elegir el camino que toca recorrer.</p>
                    </div>
                    </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">CREAR</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

         <div class="modal fade" id="modal-subcategoria">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">AGREGAR SUBCATEGORIA</h4>
              </div>
              <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <select class="input-categoria" name="" id="">
                              <option  value="">Seleccione categoria</option>
                              <option v-for="categoria in categorias"   :key="categoria.id">
                                {{categoria.nombre}}
                              </option>
                            </select>
                            <input class="input-categoria" type="text" placeholder="NOMBRE SUBCATEGORIA">
                            <textarea class="input-categoria" placeholder="DESCRIPCIÓN" id="" cols="30" rows="2"></textarea>
                            
                        </div>
                        <div class="col-md-6">
                        <p>Cuando no sabes qué camino debes tomar, es tiempo de no tomar ningún camino, sino de pararse,    orar y esperar a que amanezca. La luz del día nos dará las referencias necesarias para elegir el camino que toca recorrer.</p>
                    </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">CREAR</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data(){
        return{
            categorias:[],
            form:{
            nombreCategoria:'',
            descripcionCategoria:'',
            permitirSubcategoria:''
            }
            

        }
    },
    created(){
      this.cargarCategorias();
        
    },
    methods:{
        cargarCategorias(){
          axios.get('/api/categorias/'+ 1).then(res=>{
            this.categorias = res.data; 
          });
        },
        cambiarEstadoCategoria(value){
            axios.post('api/cambiar-estado-categoria/',value).then(res=>{
              console.log(res);
          });
        },
        crearCategoria(){
          axios.post('api/crear/categoria/',this.form).then(res=>{
            console.log(res.data);
            this.cargarCategorias();
          });
        }
    }
}
</script>

<style>
.input-categoria{
    display: block;
    border: 0;
    border-bottom: 1px solid #ccc;
    width: 100%;
    max-width: 600px;
    margin-bottom: 10px;
    margin-top: 6%;
}
.input-categoria {
    outline: none;
}
</style>

