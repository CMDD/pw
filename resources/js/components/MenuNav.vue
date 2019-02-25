<template>
  <div class="col-md-5 col-lg-3 py-4">
      <div class="banner-blue py-5 px-4">
          <ul class="menu-accordion">
              <li class="has-children opened">
                  <a href="#">Contenido</a>
                  <ul>
                      <li v-for="contenido in contenidos" ><a href="#">{{contenido.nombre}}</a></li>
                  </ul>
              </li>
              <li><a href="#">Evangelización</a></li>
              <li><a href="#">Vivir mejor</a></li>
              <li><a href="#">Hablemos de fe</a></li>
              <li><a href="#">Formación</a></li>
              <li><a href="#">Editorial</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Noticias</a></li>
          </ul>
          <input type="search">
      </div>
  </div>

</template>

<script>
export default {
   data(){
     return{
       contenidos:[
         {
          nombre:'Eventos',
          id:1

         },
         {
           nombre:'Librerías',
           id:2
         },
         {
           nombre:'Donaciones',
           id:3
         },
         {
           nombre:'Señal en vivo',
           id:3
         },
         {
           nombre:'Shalom',
           id:4
         },
         {
           nombre:'Pruebas',
           id:4
         }
       ]
     }
   }
}
</script>

<style lang="css">
</style>
