<template>
    <v-runtime-template :template="laymetachuan"></v-runtime-template>
    <div class="fixrow row items-center  mx-auto">
      <div class="col mt-0">
    <div id="loadingg">
        <img id="loading-image" src="https://hust.media/img/icon/loadgau.png" alt="Loading..." />
      </div>
  
    <div  ref="infoBox" class="max-w-4xl px-1 py-4  mx-4 rounded-lg shadow-xl">
      <div v-if="videos == null" class="container-fluid">
        <div class="row" style="background-color: #FFB6C1;">
           <p class="text-center" style="color: #fff;">
            
            <div  class="text-center spinner-border" role="status">
                 
            </div>
            <br>
            Đang tải video
           </p>
        </div>
    </div>
    <div v-else>
        <div class="flex flex-col shadow-xl justify-center  " style="position: relative;">

  <div class="mt-1 inline-block text-white px-2 py-1 rounded-full">{{tieude}}</div>

          

          <div class="mt-2 container-fluid flex space-x-4 mb-auto">
              <button v-if="FBO != '' && FBO != null" @click="hienvideo = 'FBO'" class="bg-pink-300 hover:bg-pink-400 text-white font-bold py-2 px-4 rounded">
               Server instagram
              </button>
              <button v-if="VPRO != '' && VPRO != null" @click="hienvideo = 'VPRO'" class="bg-green-400 hover:bg-green-500 text-white font-bold py-2 px-4 rounded">
               Server Hust Media
              </button>
                <router-link v-if="hrefprofile" :to="hrefprofile">
              <button class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded">
                Quay lại
               </button>   </router-link>
            </div>
            
            <div  style="  bottom: 0;">
                <div class="relative " >
                  <iframe   class="py-4   left-0 w-full" v-bind:src="videoSrc"
                    frameborder="0" scrolling="0"  allowfullscreen  v-bind:style="{ height: videoHeight + 'px', display: isLoaded ? 'block' : 'none'  }"
            ></iframe>
                </div>
              </div>
          <div v-if="infoBox == 0"  >
<br>     <br>
<div   class=" row" style="background-color: #FFB6C1;">
    <p class="text-center" style="color: #fff;">
     
     <div  class="text-center spinner-border" role="status">
          
     </div>
     <br>
     Đang tải video
    </p>
 </div>
          </div>
               <div v-if="mota == null ">
                <div class="text-center ">
           <h5 class="text-pink-500">  Vui lòng chọn 1 server </h5>   
           <br>   <router-link to="/anime/home" >
            <button v-if="FBO != '' " class="bg-pink-300 hover:bg-pink-400 text-white font-bold py-2 px-4 rounded">
                HOME
               </button>
           </router-link>  
          
                </div>
               </div>
               <div class="max-h-16 ">
                <div class="cards">
             
                  <Adsense
              data-ad-client="ca-pub-4574266110812955"
               data-ad-slot="8795043992"
               data-full-width-responsive="no"
               ins-class="display: block; height: 50px;"
               ins-style="display: block; height: 50px;"

               
               >
            </Adsense>
            </div>
          
          </div>
          
            </div>
    </div>
    <div v-if="listtap" style="display: flex; justify-content: center; align-items: center; ">
      <div>
        <v-runtime-template :template="listtap"></v-runtime-template> 
      </div>
      
    </div>
</div> 

</div>
    </div>
    <br><br> <br><br> <br>
  
</template>



<script>
import VRuntimeTemplate from "vue3-runtime-template";
    import axios from 'axios';
    import Swal from 'sweetalert2' ;
    export default {
      data() {
          return {
            currentVideo: null ,
            FBO: null ,
            VPRO: null ,
            chap1: null,
              loading: false,
              users: null,
              userss: null,
              theloai: null ,
              size: null ,
              listtap: null ,
              hienvideo: null ,
              listtruyen: null ,
              mota: null ,
              laymetachuan: null ,
              videos: null ,
              error: null,
              linkanh: null,
              videoSrc: null ,
              infoBox: 1 ,
              videoHeight: null ,
              hrefprofile: null ,
              tieude: null ,
              width:0,
              height:0 ,
              isLoaded: false 
          };
      },
      components: {
    VRuntimeTemplate
  },
  watch: {
    hienvideo() {
        this.mota = "andasaskdm" ;
        this.isLoaded = false;
     
this.infoBox = 0 ;
this.videoSrc = this.videos[this.hienvideo];
        setTimeout(() => {
            this.nsdnakasmdkam();
          }, 3700) ;
   
    }
  },
      created() {
        setTimeout(function(){
    $('#loadingg').hide();}, 17000) ;
    this.laymeta();
          this.fetchData();
          this.$watch(
      () => this.$route.params,
      (toParams, previousParams) => {
       console.log(toParams.name2);
       var ewjhrfjwehfjkjewfj = '/truyen-tranh/' + toParams.name2 ;
     
    },) ;
    setTimeout(() => {
            this.dokhoangcach();
          }, 3000) ;
      },
      
      methods: {
        dokhoangcach()
        {
          const width = this.$refs.infoBox.offsetWidth;
        console.log(width) ;
    const height = width * 11 / 16;
    this.videoHeight = height;
        },
        nsdnakasmdkam()
        {
            this.infoBox = 1 ;
            this.isLoaded = true;

        },
    
        error2(error)
          {
            console.log(error.name) ;
            if (error.name) 
            {
              Swal.fire({
  title: error.name ,
  heightAuto : false,
 
})
$('#loadingg').hide();
            }
          },
          
          fetchData() {
        //   this.linkanh = this.$route.query.id ;
            var url = location.href  ;
            var splitter = 'play?url=' ;
  


let config = {
    timeout: 27000,
};
var urlsplit = url.split(splitter)[1];
urlsplit = 'https://hust.media/anime/play.php?url=' + urlsplit ;
// console.log(urlsplit);
              axios
                  .get(urlsplit ,config)
                  .then(response => {
      // console.log(response.data);
                this.videos = response.data ;
                this.videos =  JSON.stringify(this.videos) ;
                  this.videos =  JSON.parse(this.videos) ;
                  this.listtap = this.videos.listtap ;
                  this.tieude = this.videos.tile ;
                  this.hrefprofile = this.videos.hrefprofile ;
  this.VPRO = this.videos.VPRO  ;
  this.FBO = this.videos.FBO  ;
                $('#loadingg').hide();
               }).catch(error => this.error2(error)   )
               ;
          },
          laymeta()
          {
            var url = location.href  ;
            var splitter = 'play?url=' ;
  

let config = {
    timeout: 27000,
};
var urlsplit = url.split(splitter)[1];
urlsplit = 'https://hust.media/anime/meta.php?url=' + urlsplit ;
// console.log(urlsplit);
              axios
                  .get(urlsplit ,config)
                  .then(response => {
      // console.log(response.data);
                this.laymetachuan = response.data  ;
                setTimeout(() => {     
        this.checkdateread();  }, 500) ;
                $('#loadingg').hide();
               })
               ;
          },
          checkdateread() {
            console.log(document.title)
            var url = location.href  ;
            var linkdoctruyen = window.location.href ;
            var splitter = '/truyen-tranh/' ;
            var urlsplit = url.split(splitter)[1];
urlsplit = 'https://hust.media/truyen-tranh/checkdateread.php/' + urlsplit ;
         this.error = this.users = null;
         this.loading = true;
         this.apikey = this.$cookies.get("apikey");
         if ( this.apikey == '' || this.apikey == null )
           {
            this.apikey = "guest"   ;
           } 

         console.log(this.apikey);
         axios
             .post( urlsplit, {
              tentruyendoc: document.title ,
              linkdoctruyen: linkdoctruyen ,
          apikey: this.apikey 
    } )
             .then(response => {
                    this.loading = false;
           this.users = response.data  ;
this.info = response.data ,
   this.status = this.info.status     ,
   this.message = this.info.message  
   if ( this.status == 10  )
   {
     Swal.fire({
title: this.message ,
heightAuto : false,

});
   }
   else
   {
     console.log(this.info);
           this.gridData  = this.info ;

           var Target  = response.data[0] ;
           console.log(this.gridData);
   }
          
             });
     },
      }
      ,
  mounted() {
    // var size = window.innerHeight / 30 ;


  }
    }
    </script>