<template>
<div>
    <div class="slide">
        <div style="background-image: url(img/slide-example.jpg);">
            <a href="#" class="button">¡Suscríbete aquí!</a>
        </div>
        

    </div>

    <div class="slide-items">
        <div v-for="(slider,i) in sliders" :key="'a' + i"  class="item" v-bind:style="{ backgroundImage: 'url(' + slider.image + ')' }">
            <span class="delete"></span>
        </div> 
    </div>

    <div class="slide-add">
        <div class="add">
        <input type="file" id="file" class="inputfile" />
        <label for="file"><span>Agregar</span></label>
        </div>
        <div class="options">
        <label><input type="checkbox" class="show-btn">¿Mostrar botón?</label>
        <div class="inputs">
        <label>Texto: <input type="text"></label>
        <label>Enlace: <input type="text"></label>
        </div>
        </div>
        <div class="save">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" fill="#09ab51" viewBox="0 0 24 24"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>
        </div>
    </div>
</div>
    
</template>

<script>
import axios from 'axios'
export default {

    data(){
        return{
            sliders:[],
           
        }
    },
    created(){
        this.getSliders();

    },
    methods:{
        getSliders(){
            axios.get('api/slider/'+1).then(res => {
                this.sliders = res.data;
                
                console.log(res.data);
                
            });
        }
        
    }
    
}
</script>
