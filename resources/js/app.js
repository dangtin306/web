
require('./bootstrap');

import { createApp } from "vue";
import store from './store/index.js';
import { createRouter, createWebHistory } from 'vue-router'

import { plugin as vueMetaPlugin } from "vue-meta";
import { createMetaManager, defaultConfig, plugin as metaPlugin } from 'vue-meta'
const metaManager = createMetaManager(false, {
    ...defaultConfig,
    meta: { tag: 'meta', nameless: true },
});
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

import orders from './order/orders.vue'
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
    import truyentranh from './truyen/truyen.vue'
    import truyenchuyen from './truyen/truyenchuyen.vue'
    import profile from './components/profile.vue'
    import link from './components/link.vue'
    import themsdt from './components/themsdt.vue'
    import congdong from './congdong/congdong.vue'
    import plan from './congdong/plan.vue'
    import webapp from './congdong/biolink.vue'
    import profile2 from './congdong/profile.vue'
    import sms from './components/sms.vue'
    import ScriptX from 'vue-scriptx'

    
import Ads from 'vue-google-adsense'

    import VueCookies from 'vue-cookies';
    import historyclone from "./order/historyclone.vue"; 
    import comment from "./order/comment.vue"; 
    import doithe from "./order/doithe.vue";
    import account from "./order/account.vue"; 
    import aboutus from "./congdong/aboutus.vue"; 
    import id from "./order/id.vue"; 
    const app = createApp(
      {
          // propsData: { foo }
        }
     
    );
    app.use(ScriptX);
    app.use(Ads.Adsense);
    app.use(Ads.InArticleAdsense);
    app.use(Ads.InFeedAdsense);
    app.use(VueCookies);
    app.use(store);
// app.use(store);
// app.use(BootstrapVue)

app.use(metaManager);
app.component('appvue', require('./App.vue').default) ;
app.component('webapp', require('./congdong/biolink.vue').default) ;
app.component('notfound', require('./components/404.vue').default) ;
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
    path: '/webapp',
    name: 'webapp',
    component: webapp
  },
  {
    path: '/doithe',
    name: 'doithe',
    component: doithe
  },
  {
    path: '/truyen-tranh/:name2',
    name: 'truyentranh',
    component: truyentranh ,
  },
  {
    path: '/truyenchuyen/:name',
    name: 'truyenchuyen',
    component: truyenchuyen
    
  },
  {
    path: '/',
    name: 'home',
    component: home
  },
  {
    path: '/id',
    name: 'id',
    component: id
  },
  {
    path: '/home/',
    name: '/home/',
    component: home
  },
  {
    path: '/orders',
    name: 'orders',
    component: orders
  },
  {
    path: '/historyclone',
    name: 'historyclone',
    component: historyclone
  },
  {
    path: '/aboutus',
    name: 'aboutus',
    component: aboutus
  },
  {
    path: '/comment',
    name: 'comment',
    component: comment
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
    path: '/account',
    name: 'account',
    component: account
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
    path: '/the-loai/:id',
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
 
 