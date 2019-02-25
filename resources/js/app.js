

window.Vue = require('vue');

//WEB COMPONENT
Vue.component('web-home', require('./web/Home.vue').default);
Vue.component('footer-component', require('./components/FooterComponent.vue').default);
Vue.component('menu-nav', require('./components/MenuNav.vue').default);
//FIN WEB COMPONENT

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('articulo-crear-component', require('./components/admin/articulos/Create.vue').default);
Vue.component('configuracion-home', require('./components/admin/configuracion/Home.vue').default);



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
      path:'/admin/configuracion',
      component: require('./components/admin/configuracion/Home').default
    },
    {
      path:'/',
      component: require('./web/Home').default
    }
  ]
});

const app = new Vue({
    el: '#app',
    router
});
