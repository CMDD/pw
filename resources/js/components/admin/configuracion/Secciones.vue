<template>
<div class="sidebar">
    <div class="widget sections active">
        <div class="title">Secciones</div>
        <div class="content">
            <label><input type="checkbox" disabled checked>Contenido</label>
                <div v-for="(contenido,index) in contenidos" :key="'A'+index" class="child">
                    <label><input  :checked="contenido.estado" type="checkbox">{{contenido.nombre}}</label>
                    <span  onClick="javascript: return confirm('¿Estas seguro?');"  v-on:click="eliminar(contenido)" class="delete"></span>
                </div>

                <div v-if="addinput" class="child temp">
                    <div><input checked type="checkbox"></div>
                    <div><input v-model="form.contenido" type="text"></div>
                    <div @click="addContenido"  class="save disabled">
                    <svg  xmlns="http://www.w3.org/2000/svg" width="18" fill="#09ab51" viewBox="0 0 24 24">
                    <path  d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                    </svg>
                    </div>
                </div>
                
                <a href="#" @click.prevent="mostrarInput" class="add">Agregar sección</a>
                <label v-for="(categoria,index) in categorias" :key="'b'+index"><input @change="cambiarEstadoCategoria(categoria)" v-model="categoria.estado"  :checked="categoria.estado" type="checkbox">{{categoria.nombre}}</label>
                
        </div>
    </div>
</div>
            
</template>
<script>
import axios from 'axios'
import toastr from 'toastr'
toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
  "progressBar": true,
};

let user = document.head.querySelector('meta[name="user"]');
var user_emisora;
if (user){
 var user_emisora = JSON.parse(user.content).emisora_id;
}
export default {
    data(){
        return{
            contenidos:[],
            categorias:[],
            addinput:false,
            form:{
                contenido:'',
                emisora_id:''
            }
            
        }
    },
    created(){
        this.getContenidos()
        this.cargarCategorias()
        this.form.emisora_id = user_emisora;
    },
    methods:{
        addContenido(){
             axios.post('api/add/contenido/',this.form).then(res=>{ 
                    this.getContenidos()
                    this.form.contenido='';
                    this.addinput = false;
                    toastr.success('Se creó correctamente');
             });
        },
        mostrarInput(){
            this.addinput = true
        },
        eliminar(value){
            axios.post('api/delete/contenido/',value).then(res=>{
                
              this.getContenidos()
          });
        },
        getContenidos(){
            axios.get('api/contenidos/'+ user_emisora ).then(res=>{
            this.contenidos = res.data; 
     });
        },
        cargarCategorias(){
          axios.get('api/categorias/'+ 1 ).then(res=>{
            this.categorias = res.data; 
          });
        },
        cambiarEstadoCategoria(value){
            axios.post('api/cambiar-estado-categoria/',value).then(res=>{
              console.log(res);
          });
        }
    }
    
}
</script>
