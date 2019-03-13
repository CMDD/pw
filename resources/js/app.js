

window.Vue = require('vue');


//WEB COMPONENT
Vue.component('seccion1', require('./web/Seccion1.vue').default);
Vue.component('noticias', require('./web/Noticias.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('menu-nav', require('./components/MenuNav.vue').default);
//FIN WEB COMPONENT

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('articulo-crear-component', require('./components/admin/articulos/Create.vue').default);
Vue.component('configuracion-general', require('./components/admin/configuracion/General.vue').default);
Vue.component('admin-contenido', require('./components/admin/configuracion/Contenido.vue').default);
Vue.component('admin-categoria', require('./components/admin/configuracion/Categoria.vue').default);
Vue.component('admin-slider', require('./components/admin/configuracion/Slider.vue').default);



window.Vue = require('vue');
import Router from 'vue-router'
Vue.use(Router)


let router = new Router({
  routes:[
    {
      path:'/admin/create',
      component: require('./components/admin/articulos/Create').default
    },
    {
      path:'/configuracion/genearl',
      component: require('./components/admin/configuracion/General').default
    }
  ],
  // mode: 'history'
});

const app = new Vue({
    el: '#app',
    router
});
