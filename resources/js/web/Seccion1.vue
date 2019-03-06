<template>
  <div class="row align-items-center">
    <div class="col-md-5 col-lg-3 py-4">
        <div class="banner-blue py-5 px-4">
            <ul class="menu-accordion">
                <li class="has-children ">
                    <a href="#">Contenido</a>
                    <ul>
                        <li v-for="contenido in contenidos" :key="contenido.id" >
                          <a v-if="contenido.estado" href="#">{{contenido.nombre}}</a>
                        </li>
                    </ul>
                </li>

                <li v-for="categoria in categorias" :key="categoria.id">
                  <a v-if="categoria.estado" href="#">{{categoria.nombre}}</a>
                 </li>
            </ul>
            <input type="search">
        </div>
    </div>
    <div class="col-md-7 col-lg-9 pl-lg-5 py-4">
        <h3>Evangelización</h3>
        <p>Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos. Por eso te hemos traído estos tutoriales para que cambies esa decoración y coloques nuevos elementos, realizados con mucho amor y creatividad. Todos los años queremos que haya algo nuevo en la decoración navideña, algo de acuerdo a nuestra personalidad y nuestros gustos. Por eso te hemos traído estos tutoriales para que cambies esa decoración y coloques nuevos elementos, realizados con mucho amor y creatividad.</p>
        <a href="#" class="readmore">Seguir leyendo<svg viewBox="0 0 28.657 22.458" xmlns="http://www.w3.org/2000/svg"><g transform="translate(163.82 -2046.5)"><path transform="translate(3053.7 3460.4)" d="M-3210.7-1401.276a2.043,2.043,0,0,0,0-2.8l-5.823-6.163a1.653,1.653,0,0,1-.167-2.091,2.558,2.558,0,0,1,3.941-.265l7.267,7.692a3.246,3.246,0,0,1,0,4.459l-7.267,7.692a2.559,2.559,0,0,1-3.941-.265,1.654,1.654,0,0,1,.167-2.091Z"/><path transform="translate(3068.7 3460.4)" d="M-3210.7-1401.276a2.043,2.043,0,0,0,0-2.8l-5.823-6.163a1.653,1.653,0,0,1-.167-2.091,2.558,2.558,0,0,1,3.941-.265l7.267,7.692a3.246,3.246,0,0,1,0,4.459l-7.267,7.692a2.559,2.559,0,0,1-3.941-.265,1.654,1.654,0,0,1,.167-2.091Z"/></g></svg></a>
    </div>
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
       case '/medellin':
         this.id = 2;
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
