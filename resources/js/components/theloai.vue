<template>
  

    <div class="users">
        <div class="loading" v-if="loading">
            <div class="l-container">
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
    
            <div class="l-container">
                <li v-for="{ tentruyen , sochap , linktruyen , linkanh } in userss"> 
                    <!-- <a :href="'https://hust.media' + linktruyen" > -->
                        <router-link class="md:p-4 py-2 block hover:text-purple-400" :to="{
                            path:  '/profile' + linktruyen  
                           
                    }" >
                    <!-- ,query: { id: linkanh } -->
                        <div @click="tattruyen" class="b-game-card" ref="infoBox" >
                            <div class="b-game-card__cover">
                                <span class="test" 
                                :style="{ 'font-size': Height }" >{{ tentruyen  }}  </span>
                               
                                <span class="test" 
                                :style="{ 'font-size': Height }" > số chap {{ sochap  }}  </span>
                                <img :src= linkanh  alt="Girl in a jacket" width="500" height="600">
                            </div>
                        </div>
                    </router-link>
                    
                    <!-- </a> -->
                    
                    
                </li>
              </div>
        
               
       
        </ul>
    </div>
    </template>
    <style lang="scss" scoped>
        @import "truyen.scss"; //new scss file from resources/sass directory
     </style>
     <script>
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
                  infoBox: null,
                  width:0,
                  height:0
              };
          },
          created() {
              this.fetchData();
              
          },
          methods: {
              fetchData() {
      
                var url = location.href  ;
    var splitter = '/the-loai/' ;
    
    
    var urlsplit = url.split(splitter)[1];
    
    
                  this.error = this.users = null;
                  this.loading = true;
                  const apikey = this.$cookies.get("apikey");
                  console.log(apikey);
                  axios
                      .post('/theloai', {
                        apikey: urlsplit 
          })
                      .then(response => {
                             this.loading = false;
                    this.usersss = response.data   ;
                    this.users =  JSON.stringify(this.usersss) ;
                    this.userss =  JSON.parse(this.users) ;
                    console.log(this.userss);
                   
                    // this.size=this.$refs.infoBox.clientWidth;
                    // this.Height= size + 'px' ;
                    // console.log(this.size);
                      });
              },
              tattruyen(){
                this.userss = '' ;
                this.hientruyen = 'ok' ;
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