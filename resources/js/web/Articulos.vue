<template>
    <div class="col-md-8 col-xl-6">
                    <div class="row">
                        <div class="col-12">
                            <h1>Evangelización</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 blog-list">
                            <div class="row article" v-for="articulo in articulos" :key="articulo.id">
                                <div class="col-12 col-md-4 image" style="background-image: url(/img/slide-example.jpg);"></div>
                                <div class="col-12 col-md-8 info"  >
                                    <span class="date">25 de febrero, 2019</span>
                                    <h2>{{articulo.titulo}}</h2>
                                    
                                    <div v-html="articulo.descripcion_corta">

                                    </div>
                                  
                                    
                                    <a href="/articulo/show" class="readmore">Seguir leyendo</a>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 pag">
                            <a href="#">1</a><a href="#">2</a><span>3</span><a href="#">4</a><a href="#">5</a><a href="#">6</a>
                        </div>
                    </div>
                </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        return{
            'articulos':[]
        }
    },
    created(){
        this.getArticulos()
    },
    methods:{
        getArticulos(){
            axios.get('/api/lista/articulos').then(res =>{
                this.articulos = res.data;
            });
        }
    }
}
</script>
