<template>
<div>
<div class="topbar">
                <div class="show-nav"></div>
                <div class="tabs">
                    <span>Configuración:</span>
                    <a href="#" class="active">General</a>
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
                <div class="maincolumn">
                    <div class="box">

                    </div>
                </div>
                <div class="sidebar">
                    <div class="widget sections active">
                        <div class="title">Secciones</div>
                        <div class="content">
                            <label><input type="checkbox" disabled checked>Contenido</label>
                                <div v-for="contenido in contenidos" :key="contenido.id" class="child">
                                    <label><input  :checked="contenido.estado" type="checkbox">{{contenido.nombre}}</label>
                                    <span  onClick="javascript: return confirm('¿Estas seguro?');"  v-on:click="eliminar(contenido)" class="delete"></span>
                                </div>

                                <div v-if="addinput" class="child temp">
                                    <div><input checked type="checkbox"></div>
                                    <div><input v-model="contenido" type="text"></div>
                                    <div @click="addContenido"  class="save disabled">
                                    <svg  xmlns="http://www.w3.org/2000/svg" width="18" fill="#09ab51" viewBox="0 0 24 24">
                                    <path  d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                                    </svg>
                                    </div>
                                </div>
                                

                                <a href="#" @click.prevent="mostrarInput" class="add">Agregar sección</a>

                                <label><input type="checkbox">Eventos</label>
                                <label><input type="checkbox" checked>Real Audio</label>
                                <label><input type="checkbox" checked>Donaciones</label>
                                <label><input type="checkbox" checked>Contacto</label>
                        </div>
                    </div>
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
export default {
    data(){
        return{
            contenidos:[],
            addinput:false,
            contenido:''
        }
    },
    created(){
        this.getContenidos()
    },
    methods:{
        addContenido(){
             axios.get('/api/contenido/'+this.contenido).then(res=>{ 
                    console.log(res.data);
                    this.getContenidos()
                    this.contenido='';
                    this.addinput = false;
                    toastr.success('Se creó correctamente');
             });
        },
        mostrarInput(){
            this.addinput = true
        },
        eliminar(value){
            axios.post('api/delete/contenido/',value).then(res=>{
              console.log(res.data);
              this.getContenidos()
          });
        },
        getContenidos(){
            axios.get('/api/contenidos/'+ 1).then(res=>{
            this.contenidos = res.data; 
     });
        }
    }
    
}
</script>
