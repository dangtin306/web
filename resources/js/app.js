
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


import momo from './components/momo.vue'
   import home from './components/home.vue'
   import chuyenxu from './components/chuyenxu.vue'
   import naptien from './components/naptien.vue'
    import test from './components/UsersIndex.vue'
    import history from './components/history.vue'
    import realtime from './components/realtime.vue'
    import time from './components/time.vue'
    import game from './components/game.vue'
    import okluon from './components/test.vue'
    import testcode from './components/testcode.vue'
    import order from './components/order.vue'
    import theloai from './components/theloai.vue'
    import profile from './components/profile.vue'
    import link from './components/link.vue'
    import themsdt from './components/themsdt.vue'
    import congdong from './congdong/congdong.vue'
    import plan from './congdong/plan.vue'
    import profile2 from './congdong/profile.vue'
    import sms from './components/sms.vue'
    import VueCookies from 'vue-cookies';
    import VueCardStack from "./components/card.js"; 
    const app = createApp(
      {
          // propsData: { foo }
        }
     
    );
    app.use(VueCookies);
    app.use(store);
// app.use(store);
// app.use(BootstrapVue)
app.component('appvue', require('./App.vue').default) ;
app.component('theloai', require('./components/theloai.vue').default) ;
app.component('profile', require('./components/profile.vue').default) ;
app.component('ExampleComponent', require('./components/chuyenxu.vue').default) ;
// app.component('okluon', require('./App.vue').default)  ;
// app.component('game', require('./components/game.vue').default) ;
const routes = [
  {
    path: '/chuyenxu',
    name: 'chuyenxu',
    component: chuyenxu
  },
  {
    path: '/',
    name: 'home',
    component: home
  },
  {
    path: '/history',
    name: 'history',
    component: history
  },
  {
    path: '/plan',
    name: 'plan',
    component: plan
  },
  {
    path: '/time',
    name: 'time',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: time
  }
  ,
  {
    path: '/profile',
    name: 'profile2',
    component: profile2
  },
  {
    path: '/themsdt',
    name: 'themsdt',
    component: themsdt
  },
  {
    path: '/test',
    name: 'test',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: test
  }
  ,
  {
    path: '/game',
    name: 'game',
    component: game
  }
  ,
  {
    path: '/congdong',
    name: 'congdong',
    component: congdong
  }
  ,
  {
    path: '/naptien',
    name: 'naptien',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: naptien
  }
  ,
  {
    path: '/order',
    name: 'order',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: order
  }
  ,
  {
    path: '/okluon',
    name: 'okluon',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: okluon
  }
  ,
  {
    path: '/testcode',
    name: 'testcode',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: testcode
  }
  ,
  {
    path: '/link',
    name: 'link',
    component: link
  },
  {
    path: '/sms',
    name: 'sms',
    component: sms
  },
  {
    path: '/theloai',
    name: 'theloai',
    component: theloai
  },
  {
    path: '/momo',
    name: 'momo',
    component: momo
  },
  {
    path: '/profile/truyen-tranh/:id',
    name: 'profile',
    component: profile
  },
  {
    path: '/realtime',
    name: 'realtime',
    component: realtime
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
 
 