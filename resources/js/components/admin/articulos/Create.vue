<template>
  <div class="">
  <div id="container">
            <div class="topbar">
                <div class="show-nav"></div>
                <div class="tabs">
                    <span>Artículos:</span>
                    <a href="#">Todos</a>
                    <a class="active" href="#">Nuevo</a>
                    <a href="#">Tags</a>
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
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="maincolumn">        
                    <div class="box editor">                        
                           
                            <input class="title" name="titulo" type="text" placeholder="Título">
                            <label class="url">https://minutodedios.fm/<input type="text" name="slug" placeholder="url"></label>
                            <textarea id="ckeditor" name="descripcion"></textarea>  
                            <div class="image">
                                <span>Imagen destacada:</span>
                                <input type="file" id="file" class="inputfile" />
                                <label for="file"><span>Agregar</span></label>
                                <span><em>Tamaño recomendado: 1920 × 700px</em></span>
                            </div>                      
                    </div>
                </div>
                <div class="sidebar">
                    <div class="widget active">
                        <div class="title">Publicación</div>
                        <div class="content">
                            
                            <button type="submit" class="btn">Publicar</button>
                           
                        </div>
                    </div>
                    <div class="widget">
                        <div class="title">Categorías</div>
                        <div class="content">
                            
                            <div  class="child">
                                    <label><input value="" name="contenido"  type="checkbox">hhh</label>
                                </div>
                           
                        </div>
                    </div>
                    <div class="widget">
                        <div class="title">Tags</div>
                        <div class="content">
                            Lista de etiquetas...
                        </div>
                    </div>
                    <div class="widget">
                        <div class="title">Otra cosa</div>
                        <div class="content">
                            Otra cosa...
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>

  </div>
</template>

<script>
import axios from 'axios'
export default {
  data(){
    return{
      categorias:[],
      enviando:false,
      
      
    }
  },
  created(){
    axios.get('/api/categorias/'+ 1).then(res=>{
       this.categorias = res.data; 
     });
  },
  methods:{
    crearArticulo(){
        console.log('llegando...');
        
    }
  }
}
</script>

<style lang="css">

</style>
