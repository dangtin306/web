<template>
    <v-runtime-template :template="laymetachuan"></v-runtime-template>
    <div id="loadingg">
        <img id="loading-image" src="https://hust.media/img/icon/loadgau.png" alt="Loading..." />
      </div>
      <div @click="keolen" class="btn float2 my-float">lên</div>
      
      <div @click="xuong" class="btn float1 my-float"> xuống</div>
    <div class="max-w-2xl px-1 py-4  mx-auto rounded-lg shadow-xl">
      <div v-if="hientruyen == null" class="container-fluid">
        <div class="row" style="background-color: #FFB6C1;">
           <p class="text-center" style="color: #fff;">
            
            <div  class="text-center spinner-border" role="status">
                 
            </div>
            <br>
            Đang tải truyện
           </p>
        </div>
    </div>
            <v-runtime-template :template="hientruyen"></v-runtime-template>
      

    </div>

  
</template>
<div id="loadingg">
  <img id="loading-image" src="<?=$okloadimg;?>" alt="Loading..." />
</div>

 <style>
 .float1{
    position:fixed;
    width:60px;
    height:60px;
    bottom:127px;
    right:20px;
    background-color:#25d366 !important;
    color:#FFF !important;
    border-radius:50px !important;
    text-align:center !important;
    font-size:20px !important;
    box-shadow: 2px 2px 3px #999;
    z-index:100;
  }
  .float2{
    position:fixed;
    width:60px;
    height:60px;
    bottom:190px;
    right:20px;
    background-color:#25d366 !important;
    color:#FFF !important;
    border-radius:50px !important;
    text-align:center !important;
    font-size:25px !important;
    box-shadow: 2px 2px 3px #999;
    z-index:100;
  }
  .my-float{
    margin-top:16px;
  }
  #loadingg {
  position: fixed;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  opacity: 0.7;
  background-color: #fff;
  z-index: 99;
}
 </style>
<style>
.containerfix
{
   width: auto !important;
}
 </style>
 
<script>
import VRuntimeTemplate from "vue3-runtime-template";
    import axios from 'axios';
    import Swal from 'sweetalert2' ;
    export default {
      data() {
          return {
            chap1: null,
              loading: false,
              users: null,
              userss: null,
              size: null ,
              hientruyen: null ,
              listtruyen: null ,
              mota: null ,
              hientruyen: null ,
              laymetachuan: null ,
              error: null,
              linkanh: null,
              infoBox: null,
              width:0,
              height:0
          };
      },
      components: {
    VRuntimeTemplate
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
     
    },)

      },
      
      methods: {
        keolen()
        {
            window.scrollTo(0,0);
        },
        xuong()
        {
            window.scrollTo(0,document.body.scrollHeight);
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
var splitter = '/truyen-tranh/' ;

let config = {
    timeout: 22000,
};
var urlsplit = url.split(splitter)[1];
urlsplit = 'https://tecom.pro/truyen-tranh/apidoctruyen.php/' + urlsplit ;
console.log(urlsplit);
              axios
                  .get(urlsplit ,config)
                  .then(response => {
      console.log(response.data);
                this.hientruyen = response.data ;
                $('#loadingg').hide();
               }).catch(error => this.error2(error)   )
               ;
          },
          laymeta()
          {
            var url = location.href  ;
var splitter = '/truyen-tranh/' ;

let config = {
    timeout: 22000,
};
var urlsplit = url.split(splitter)[1];
urlsplit = 'https://tecom.pro/truyen-tranh/metadoctruyen.php/' + urlsplit ;
console.log(urlsplit);
              axios
                  .get(urlsplit ,config)
                  .then(response => {
      console.log(response.data);
                this.laymetachuan = response.data  ;
                $('#loadingg').hide();
               })
               ;
          }
      }
      ,
  mounted() {
    // var size = window.innerHeight / 30 ;


  }
    }
    </script>