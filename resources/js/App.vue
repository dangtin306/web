<template>
    <!-- <div >
      
    
      <router-link class="btn btn-outline-danger" to="/">Home</router-link> |
      <router-link class="btn btn-outline-danger"  to="/time">Hẹn giờ</router-link> |
      <router-link class="btn btn-outline-danger" to="/test">Lịch sử chuyển tiền</router-link> |
      <router-link class="btn btn-outline-danger" to="/game">Game</router-link> | 
      <router-link class="btn btn-outline-danger" to="/okluon">Hướng dẫn sử dụng</router-link> |
      <router-link class="btn btn-outline-danger" to="/testcode">Test tính năng</router-link>
    </div> -->
    

    <body
    class="
      antialiased
      bg-gradient-to-r
      from-pink-300
      via-purple-300
      to-indigo-400
    "
  >
  <header>
     <nav
        class="
         flex-wrap
          flex 
          items-center
          justify-between
          w-full
          py-2
          md:py-0
          px-2
          text-lg text-gray-700
          bg-white
        "
      >
       <div>
          <a href="https://hust.media">
            Hust<br>Media
          </a>
        </div>
        <div class="inline-flex">
          <button @click="back" class="text-break bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-2 rounded-l">
         <h4>Trước</h4>   
          </button>
          <button @click="next"  class="text-break bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-2 px-2 rounded-r">
            <h4>Next</h4>   
          </button>
        </div>
        <div  @click="doSomething" class="py-2 px-2" >     
              <svg 
            xmlns="http://www.w3.org/2000/svg"
            id="menubutton"
            class="h-6 w-6 cursor-pointer md:hidden block"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M4 6h16M4 12h16M4 18h16"
            />
          </svg>
          </div>
       <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
          <ul
            class="
              pt-4
              text-base text-gray-700
              md:flex
              md:justify-between 
              md:pt-0"
          >
            <li>
              <router-link class="md:p-4 py-2 block hover:text-purple-400" to="/">Chuyển xu</router-link> 
            </li>
            <li>
              <router-link class="md:p-4 py-2 block hover:text-purple-400"  to="/test">Lịch sử chuyển tiền</router-link> 
            </li>
            <li>
              <router-link class="md:p-4 py-2 block hover:text-purple-400"  to="/game">Game</router-link> 
            </li>
            <li>
              <router-link class="md:p-4 py-2 block hover:text-purple-400" to="/okluon">Hướng dẫn sử dụng</router-link>
            </li>
            <li>
              <router-link class="md:p-4 py-2 block hover:text-purple-400" to="/testcode">Test tính năng</router-link>
            </li>
          </ul>
        </div>
    
    </nav>
  </header>
  
  <router-view/>

</body>

  </template>
  <style>
  </style>  

  <script>

export default {
    data() {
        return {
          button : document.querySelector('#menubutton'),
          menu : document.querySelector('#menu')
        };
    },
   
    computed: {

    },
    created() {

    },
    methods: {
back(){
  history.back() ;
}
,
next(){
  history.forward() ;
},
      doSomething()
    {
     
        // const button = document.querySelector('#menubutton');
// const menu = document.querySelector('#menu');
 
  menu.classList.toggle('hidden');



  
    
    },


    }
  }
  </script>

  <style>
    .okbaybe{flex-wrap: inherit;}
  </style>