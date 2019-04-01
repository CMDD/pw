<template>
  <div class="banner-blue">
    <ul class="menu-accordion" >
    <li class="has-children opened">
    <a href="#">Contenido</a>
    <ul>
    <li v-for="contenido in contenidos" :key="contenido.id" ><a href="/articulo/show">{{contenido.nombre}}</a></li>

    </ul>
    </li>
    <li v-if="categoria.estado" v-for="categoria in categorias" :key="categoria.id" ><a v-bind:href="'/'+categoria.url+'/'+categoria.emisora_id">{{categoria.nombre}}</a></li>
    </ul>
    <input type="search">
  </div>
</template>

<script>
import axios from 'axios'

var emisora_content = document.getElementsByTagName('meta').emisora.content;


export default {
    data(){
     return{
       contenidos:'',
       categorias:'',
       id:''
     }
   },
   created(){
     console.log(emisora_content );
     switch (emisora_content ) {
       case '/':
         this.id = 1;
         break;
       case 'bogota':
         this.id = 1;
         break;
       case 'medellin':
         this.id = 2;
         break;
       case 'cartagena':
         this.id = 3;
         break;
       case 'barranquilla':
         this.id = 4;
         break;
       case 'ibague':
         this.id = 5;
         break;
     
       default:
         break;
     }
     axios.get('/api/contenidos/'+ this.id).then(res=>{
       this.contenidos = res.data; 
     });
     axios.get('/categorias/'+ this.id).then(res=>{
       this.categorias = res.data; 
     });
   }
    
}
</script>
<style>

</style>

