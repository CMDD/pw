<template>
  <div class="banner-blue">
    <ul class="menu-accordion" >
    <li class="has-children opened">
    <a href="#">Contenido</a>
    <ul>
    <li v-for="contenido in contenidos" :key="contenido.id" ><a href="/articulo/show">{{contenido.nombre}}</a></li>

    </ul>
    </li>
    <li v-if="categoria.estado" v-for="categoria in categorias" :key="categoria.id" ><a href="#">{{categoria.nombre}}</a></li>
    </ul>
    <input type="search">
  </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
     return{
       contenidos:'',
       categorias:'',
       id:''
     }
   },
   created(){
     console.log(this.$route.path);
     switch (this.$route.path) {
       case '/':
         this.id = 1;
         break;
       case '/emisora/bogota':
         this.id = 1;
         break;
       case '/emisora/medellin':
         this.id = 2;
         break;
       case '/emisora/cartagena':
         this.id = 3;
         break;
       case '/emisora/barranquilla':
         this.id = 4;
         break;
       case '/emisora/ibague':
         this.id = 5;
         break;
     
       default:
         break;
     }
     axios.get('/api/contenidos/'+ this.id).then(res=>{
       this.contenidos = res.data; 
     });
     axios.get('/api/categorias/'+ this.id).then(res=>{
       this.categorias = res.data; 
     });
   }
    
}
</script>
<style>

</style>

