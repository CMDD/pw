<template>
<div>
<label><input type="checkbox" disabled checked>Contenido</label>
<div class="child"><label><input type="checkbox">Evangelización</label><span class="delete"></span></div>
<div class="child"><label><input type="checkbox" checked>Formación</label><span class="delete"></span></div>
<div class="child"><label><input type="checkbox">Editorial</label><span class="delete"></span></div>

<a href="#" class="add">Agregar sección</a>

<label><input type="checkbox">Eventos</label>
<label><input type="checkbox" checked>Real Audio</label>
<label><input type="checkbox" checked>Donaciones</label>
<label><input type="checkbox" checked>Contacto</label>
</div>
</template>
<script>
import axios from 'axios'
let user = document.head.querySelector('meta[name="user"]');
var user_emisora;
if (user){
 var user_emisora = JSON.parse(user.content).emisora_id;
}
export default {
  data(){
    return{
      enviando:false,
      contenidos:[],
      
      
      form:{
        contenido:'',
        emisora_id:''
      }
    }
  },
  created(){
      axios.get('api/contenidos/'+ user_emisora ).then(res=>{
       this.contenidos = res.data; 
     });

     this.form.emisora_id = user_emisora;
     
  },
  methods:{
    cambiarEstadoContenido(value){
      this.contenido = value;
      axios.post('api/cambiar-estado-contenido/',this.form).then(res=>{
          console.log(res);
      });
    }
    
  }
}
</script>

