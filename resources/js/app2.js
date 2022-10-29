
require('./bootstrap');

import { createApp } from "vue";
import store from './store/index.js';
import { createRouter, createWebHistory } from 'vue-router'

// import router from "./router.js";
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


    import notfound from './components/404.vue'

    import VueCookies from 'vue-cookies';

    const app = createApp(
      {
          // propsData: { foo }
        }
     
    );
    app.use(VueCookies);
    app.use(store);
// app.use(store);
// app.use(BootstrapVue)

app.component('notfound', require('./components/notfound.vue').default) ;

// app.component('okluon', require('./App.vue').default)  ;
// app.component('game', require('./components/game.vue').default) ;
const routes = [

  {
    path: '/notfound',
    name: 'notfound',
    component: notfound
  }
]
const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})
export default router
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 app.use(router);
 app.mount("#app");
 
 