
require('./bootstrap');

import { createApp } from "vue";
import store from './store/index.js';
import { createRouter, createWebHistory } from 'vue-router'

// import { plugin as vueMetaPlugin } from "vue-meta";
import { createMetaManager, defaultConfig, plugin as metaPlugin } from 'vue-meta'
const metaManager = createMetaManager(false, {
    ...defaultConfig,
    meta: { tag: 'meta', nameless: true },
});

// import router from "./router.js";
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register thdoitheem with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import orders from './order/orders.vue'
   import home from './components/home.vue'
   import themcauhinh from './congdong/themcauhinh.vue'
      import FacebookEmojis from './order/FacebookEmojis.vue'
   import chuyenxu from './components/chuyenxu.vue'
   import naptien from './components/naptien.vue'
    import test from './components/UsersIndex.vue'
    import history from './components/history.vue'
    import realtime from './components/realtime.vue'
    import time from './components/time.vue'
    import game from './components/game.vue'
    import okluon from './components/test.vue'
    import testcode from './components/testcode.vue'
    import theloai from './components/theloai.vue'
    import truyentranh from './truyen/truyen.vue'
    import truyentranhsearch from './truyen/search.vue'
    import truyenchuyen from './truyen/truyenchuyen.vue'
    import link from './components/link.vue'
    import themsdt from './components/themsdt.vue'
    import congdong from './congdong/congdong.vue'
    import cheofb from './congdong/cheofb.vue'
    // import exchangepoints from './congdong/exchangepoints.vue'
    import plan from './congdong/plan.vue'
    import kiemtien from './congdong/kiemtien.vue'
    import webapp from './congdong/biolink.vue'
    import profile2 from './congdong/profile.vue'
    import sms from './components/sms.vue'
    import truyentranhhome from './truyen/home.vue'
    import historycomics from './truyen/historycomics.vue'
    import ScriptX from 'vue-scriptx'
    import thankuser from './congdong/thankuser.vue'
    // import xulytruyen from './components/xulytruyen.vue'
import Ads from 'vue-google-adsense'
import cauhinh from './congdong/cauhinh.vue'
    import VueCookies from 'vue-cookies';
    import historyclone from "./order/historyclone.vue"; 
    import comment from "./order/comment.vue"; 
    import account from "./order/account.vue"; 
    import payeer from "./order/payeer.vue"; 
    import themotp from "./order/themotp.vue";
    import aboutus from "./congdong/aboutus.vue"; 
    import momoauto from "./congdong/momoauto.vue"; 
    import animehome from "./video/home.vue"; 
    import animetheloai from "./video/theloai.vue"; 
    import animeplay from "./video/play.vue"; 
    import animeprofile from "./video/profile.vue"; 
    import dsfsdfsdfsfdsfd from "./video/theloai.vue"; 
    import cheoig from "./instagram/cheoig.vue"; 
    import id from "./order/id.vue"; 
    import muathe from "./order/muathe.vue";
    import instacauhinh from "./instagram/cauhinh.vue";
    import instakiemtien from "./instagram/kiemtien.vue";
    import instaexchangepoints from "./instagram/exchangepoints.vue";
    import VueScrollTo from 'vue-scrollto'; 
    const app = createApp(
      {
          // propsData: { foo }
        }
     
    );
    app.provide(/* key */ 'message', /* value */ 'loading')
    app.use(ScriptX);
    app.use(VueScrollTo);
    app.use(Ads.Adsense);
    app.use(Ads.InArticleAdsense);
    app.use(Ads.InFeedAdsense);
    app.use(VueCookies);
    app.use(store);
// app.use(store);
// app.use(BootstrapVue)

app.use(metaManager);

app.component('appvue', require('./App.vue').default) ;
app.component('appvue2', require('./App2.vue').default) 
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
    path: '/anime/home',
    name: 'animehome',
    component: animehome ,
  },
  {
    path: '/cheoig',
    name: 'cheoig',
    component: cheoig ,
  },
  {
    path: '/anime/the-loai',
    name: 'dsfsdfsdfsfdsfd',
    component: dsfsdfsdfsfdsfd,
    props: (route) => ({ theloai: route.query.theloai })
  },
  {
    path: '/anime/the-loai/:animetheloai',
    name: 'animetheloai',
    component: animetheloai ,
  },
  {
    path: '/anime/play',
    name: 'animeplay',
    component: animeplay 
  },
  {
    path: '/anime/profile',
    name: 'animeprofile',
    component: animeprofile 
  },
  {
    path: '/kiemtien/:tenkiemtien',
    name: 'kiemtien',
    component: kiemtien,
    props: route => ({ tenkiemtien: route.params.tenkiemtien})
  },
  {
    path: '/kiemtien/:social/:tenkiemtien',
    name: 'kiemtienok',
    component: instakiemtien,
    props: route => ({
      tenkiemtien: route.params.tenkiemtien,
      social: route.params.social
    })
  },
  {
    path: '/momoauto',
    name: 'momoauto',
    component: momoauto
  },
   {
    path: '/cauhinh/:cauhinh',
    name: 'cauhinh',
    component: cauhinh,
   
  },
  {
    path: '/themcauhinh',
    name: 'themcauhinh',
    component: themcauhinh
  },
    {
    path: '/thankuser',
    name: 'thankuser',
    component: thankuser
  },
  {
    path: '/muathe',
    name: 'muathe',
    component: muathe
  },
  {
    path: '/truyen-tranh/home',
    name: 'truyentranhhome',
    component: truyentranhhome ,
  },
  {
    path: '/nativeapp/cauhinh/:cauhinh',
    name: 'instacauhinh',
    component: instacauhinh ,
  },
  {
    path: '/nativeapp/search',
    name: 'truyentranhsearch',
    component: truyentranhsearch ,
  },
   {
    path: '/nativeapp/historycomics',
    name: 'historycomics',
    component: historycomics ,
  },
  {
    path: '/nativeapp/themotp',
    name: 'themotp',
    component: themotp ,
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
       path: '/nativeapp/kiemtien/:tenkiemtien',
    name: 'instakiemtien',
    component: instakiemtien,
    props: route => ({ tenkiemtien: route.params.tenkiemtien})
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
    name: 'ordersAll',
    component: orders
  },
   {
    path: '/orders/:tentheloai',
    name: 'ordersCategory',
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
    path: '/cheofb',
    name: 'cheofb',
    component: cheofb
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
    component: naptien
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
    path: '/huongdan',
    name: 'huongdanPage',
    component: okluon
  }
  ,
  {
    path: '/huongdan/:tenhuongdan',
    name: 'huongdanDetailPage',
    component: okluon,
    
  },
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
    path: '/FacebookEmojis',
    name: 'FacebookEmojis',
    component: FacebookEmojis
  },
  {
    path: '/sms',
    name: 'sms',
    component: sms
  },
  {
    path: '/nativeapp/exchangepoints',
    name: 'instaexchangepoints',
    component: instaexchangepoints
  },

  {
    path: '/the-loai/:tentheloai',
    name: 'theloai',
    component: theloai,
    props: route => ({ tentheloai: route.params.tentheloai, page: route.query.page })
    
  },

  {
    path: '/payeer',
    name: 'payeer',
    component: payeer
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
 
 