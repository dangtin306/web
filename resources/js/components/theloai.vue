<template>
  

    <div class="users">
        <div style="display: flex; justify-content: center; align-items: center; ">

            <p>  Page: {{page}} {{tentheloai}}</p>

          </div>         
          <div style="display: flex; justify-content: center; align-items: center; ">

              <v-runtime-template :template="listpage"></v-runtime-template> 
      
        </div>
        <div class="loading" v-if="loading">
            <div class="l-container ádasdasdasdasd">
                <div  ref="infoBox">
                <div class="b-game-card" >
                    <div class="b-game-card__cover">
                <div class="b-game-card__cover" style="background-image: url(https://img.pikbest.com/png-images/20190918/cartoon-snail-loading-loading-gif-animation_2734139.png!bw340);"></div>
              </div></div></div></div>
        </div>
    
        <div v-if="error" class="error">
            {{ error }}
        </div>

 
        <div v-if="hientruyen">
          
        </div>
        <ul v-if="userss" >
    
            <div class="l-container ádasdasdasdasd">
                <li v-for="{ tentruyen , sochap , linktruyen , linkanh } in userss"> 
                    <!-- <a :href="'https://hust.media' + linktruyen" > -->
                        <div @click="tattruyen(linktruyen)"  class="md:p-4 py-2 block hover:text-purple-400" >
                    <!-- ,query: { id: linkanh } -->
                        <div  class="b-game-card" ref="infoBox" >
                            <div class="b-game-card__cover">
                                <span class="test" 
                                :style="{ 'font-size': Height }" >{{ tentruyen  }}  </span>
                               
                                <span class="test" 
                                :style="{ 'font-size': Height }" > số chap {{ sochap  }}  </span>
                                <img :src= linkanh  alt="Girl in a jacket" width="500" height="600">
                            </div>
                        </div>
                    </div>
                    
                    <!-- </a> -->
                   
                    
                </li>
              </div>
             
         
                <div style="display: flex; justify-content: center; align-items: center; ">
                  <div>
                    <v-runtime-template :template="listpage"></v-runtime-template> 
                  </div>
                 
                </div>
       <br>
      
        </ul>
    </div>
    </template>
    <style>
    .ádasdasdasdasd{
        margin-top: -27px !important;
    }
    ul.pagination {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap; /* phần tử sẽ tự động xuống dòng khi không còn chỗ */
      }
    .pagination {
        display: flex;
        white-space: nowrap;
        justify-content: center;
        margin-top: 2px;
      }
      
      .pagination li {

        margin-right: 10px;
      }
      
      .pagination li:last-child {
        margin-right: 0;
      }
      
      .pagination a {
        padding: 2px 4px;
        border: 1px solid #ccc;
        color: #333;
      }
      
      .pagination a:hover {
        background-color: #ccc;
      }
      
      .pagination .active a {
        background-color: #333;
        color: #fff;
        border-color: #333;
      }</style>
    <style lang="scss" scoped>
        @import "truyen.scss"; //new scss file from resources/sass directory
     </style>
     <script>
     import VRuntimeTemplate from "vue3-runtime-template";
        import axios from 'axios';
        export default {
          data() {
              return {
                  loading: false,
                  users: null,
                  userss: null,
                  size: null ,
                  hientruyen: null ,
                  error: null,
                  listpage: null ,
                  infoBox: null,
                  width:0,
                  height:0
              };
          },
          components: {
    VRuntimeTemplate
  },
  props: ['tentheloai', 'page'],
          created() {
              this.fetchData();
              
          },
          methods: {
              fetchData() {
      
                var url = location.href  ;
    var splitter = '/the-loai/' ;
    
    
    var urlsplit = url.split(splitter)[1];
    var dbshcfhsajkhcjas = 'https://hust.media/the-loai/api.php?' + urlsplit ;
    
                  this.error = this.users = null;
                  this.loading = true;
                  const apikey = this.$cookies.get("apikey");
                  console.log(apikey);
                  axios
                      .get(dbshcfhsajkhcjas
        )
                      .then(response => {
                             this.loading = false;
                    this.usersss = response.data   ;
                    this.users =  JSON.stringify(this.usersss) ;
                    this.userss =  JSON.parse(this.users).listtruyen ;
                    this.listpage =  JSON.parse(this.users).listpage ;
                    console.log(this.userss);
                   
                    // this.size=this.$refs.infoBox.clientWidth;
                    // this.Height= size + 'px' ;
                    // console.log(this.size);
                      });
              },
              tattruyen(link){
                window.location.assign(link);
                this.userss = '' ;
                this.hientruyen = 'ok' ;
                this.loading = true ;
                console.log(this.userss);
              }
          }
          ,
      mounted() {
        // var size = window.innerHeight / 30 ;
        var size = this.$refs.infoBox.clientHeight / 20;
       
        this.Height= size + 'px' ;
    
        console.log(this.Height);
    
      }
        }
        </script>
   <style>
    .chu {
        font-size: 12px; 
        height: auto;
       /* font-weight: inherit; */
   }
   .test {

   }
   </style>