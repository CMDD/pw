<template>

    

    <div class="slide-add">
        <form @submit.prevent="subirSlider">
        <div class="add">
           
        <input type="file" ref="file" id="file" @change="onFileSelected" class="inputfile" />
        <label for="file"><span>Agregar</span></label>
        </div>
        <div class="options">
        <label><input v-model="form.mostrar" @checked="form.mostrar" type="checkbox" class="show-btn">¿Mostrar botón?</label>
        <div class="inputs">
        <label>Texto: <input v-model="form.texto_boton" type="text"></label>
        <label>Enlace: <input v-model="form.url_boton" type="text"></label>
        </div>
        </div>
        
            <button class="save" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg"  width="40" fill="#09ab51" viewBox="0 0 24 24">
                    <path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/>
                </svg> 
        </button>

         </form> 
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
            form:{
                image:'',
                texto_boton:'',
                url_boton:'',
                mostrar:false,
                emisora_id : ''
            }
           
        }
    },
    created(){

            
    },
    methods:{
       
        onFileSelected (event){
            this.form.image = this.$refs.file.files[0];
        },
        subirSlider(){
            let fd = new FormData();
            fd.append('image',this.form.image);
            fd.append('mostrar_boton',this.form.mostrar);
            fd.append('texto_boton',this.form.texto_boton);
            fd.append('url_boton',this.form.url_boton);
            fd.append('emisora_id',user_emisora);
            axios.post('api/crear/slider',
            fd,{
                headers:{
                    'Content-Type': 'multipart/form-data'
                }
            }
            ).then(res =>{
                console.log(res.data);
                // toastr.success('Slider creado correctamente');
                window.location.reload()
                
                // setTimeout(toastr.success('Slider creado correctamente'),500000);
                
                
            });
            
            
        }
        
        
    }
    
}
</script>
