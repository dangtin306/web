<template>
    <v-runtime-template :template="laymetachuan"></v-runtime-template>
  <div class="container">
      <div class="header-container">
        <img :src='linkanh'
         alt="" class="header-image" />
        <div class="header">
          <svg href="javascript:void(0)" fill="#ffffff" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg" class="header-icon">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
          </svg>
    <router-link to="/nativeapp/search" >
          <svg fill="#ffffff" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg" class="u-float-right header-icon">
            <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg></router-link>
          <div v-if="listtruyen == null" >
            <h1 class="main-heading">Chờ xíu nhé <br>Đang tải dữ liệu</h1>
            <div  class="text-center spinner-border" role="status">
                   
            </div>
     </div>
     <div v-else>
        <div v-if="tentacpham">
            <h1 class="main-heading">{{ tentacpham }}</h1>
        </div>
    
            <span class="tag">{{ thoiluong }}</span>
            <span class="tag">{{ trangthai }}</span>
            <div class="stats">
              <span class="stat-module">
              <span class="stat-number">{{ phathanh }}</span>
              </span>
              <span class="stat-module">
                <span class="stat-number"> {{ theloai }} </span>
              </span>
            </div>
     </div>
         
        </div> <!-- END header -->
      </div>
      
      <div class="overlay-header"></div>
      
      <div class="bodyok">
          <router-link :to="chap1">
              <img  src="https://i.pinimg.com/originals/10/ae/d9/10aed99a89bcd8ca74b6283d30db4a52.gif"
               alt="Hugh Jackman" class="body-image ava" />
          </router-link>
        <div class="body-action-button u-flex-center">
          <svg fill="#ffffff" height="28" viewBox="0 0 24 24" width="28" xmlns="http://www.w3.org/2000/svg">
            <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
          </svg>
        </div>
        <span class="body-stats"> <span>{{sodiem}}</span></span>
        <span class="body-stats">Followers <span>1.9k</span></span>
        <div class="u-clearfix"></div>
        <div  class="body-info" :class="{ show: showmotatruyen }">
          <p>
              {{ mota }}
          </p>
        </div>
        <div @click="hienmotatruyen" class="body-more">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <div class="card u-clearfix">
          <span class="card-heading">Danh sách chap</span>
          <span class="card-more">
            <svg fill="#777777" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 0h24v24H0z" fill="none"/>
              <path d="M6 10c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm12 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm-6 0c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
            </svg>
          </span>
          <div v-if="listtruyen == null" class="text-center spinner-border" role="status">
                   
          </div>
            <v-runtime-template :template="listtruyen"></v-runtime-template>
        
    <br><br>
      
          <ul class="card-list">
           
          </ul>
        </div>
      </div>
      
    </div>
  </template>
  <script>
  import VRuntimeTemplate from "vue3-runtime-template";
      import axios from 'axios';
      export default {
        data() {
            return {
              chap1: '/',
                loading: false,
                users: null,
                userss: null,
                size: null ,
                laymetachuan: null ,
                tentacpham: null ,
                listtruyen: null ,
                mota: null ,
                hientruyen: null ,
                error: null,
                showmotatruyen: false,
                linkanh: null,
                infoBox: null,
                sodiem: null ,
                phathanh: null ,
                thoiluong: null ,
                trangthai: null ,
                theloai: null ,
                width:0,
                height:0
            };
        },
        components: {
      VRuntimeTemplate
    },
        created() {
            this.fetchData();
            this.laymeta();
        },
        methods: {
          hienmotatruyen()
          {
  if (this.showmotatruyen == true )
  {
    this.showmotatruyen = false
  }
  else
  {
    this.showmotatruyen = true
  }
          },
          laymeta()
            {
              var url = location.href  ;
              var splitter = 'profile?url=' ;
  
  
  var urlsplit = url.split(splitter)[1];
  let config = {
      timeout: 22000,
  };
  var urlsplit = url.split(splitter)[1];
  urlsplit = 'https://tecom.pro/anime/meta.php/?url=' + urlsplit ;
  console.log(urlsplit);
                axios
                    .get(urlsplit ,config)
                    .then(response => {
        console.log(response.data);
                  this.laymetachuan = response.data  ;
                  console.log(this.laymetachuan   );
                  $('#loadingg').hide();
                 })
                 ;
            },
            fetchData() {
              var url = location.href  ;
  var splitter = 'profile?url=' ;
  
  
  var urlsplit = url.split(splitter)[1];
  
  var ahdhajdnhk = 'https://tecom.pro/anime/profile.php?url=' + urlsplit ;
                this.error = this.users = null;
                this.loading = true;
                const apikey = this.$cookies.get("apikey");
                console.log(apikey);
                axios
                    .get(ahdhajdnhk)
                    .then(response => {
                           this.loading = false;
                  this.usersss = response.data   ;
                  this.users =  JSON.stringify(this.usersss) ;
                  this.userss =  JSON.parse(this.users) ;
                  this.danhmuctruyen =   this.userss.danhmuctruyen ;
                  this.tentacpham =   this.userss.tentacpham ;
                  this.linkanh =   this.userss.linkanh ;
                  this.mota =   this.userss.mota ;
                  this.sodiem = this.danhmuctruyen.diem ;
                  this.mota = this.mota.replace( 'animehay', 'Hust Media') ;
         this.mota = this.mota.replace( 'Animehay', 'Hust Media') ;
         this.mota = this.mota.replace( 'ANIMEHAY', 'Hust Media') ;
  
                  this.listtruyen =   this.userss.listtruyen ;
                  this.chap1 =   this.userss.chap1 ;
                  this.phathanh =   this.danhmuctruyen.phathanh ;
                  this.thoiluong = this.danhmuctruyen.thoiluong ;
                  this.trangthai = this.danhmuctruyen.trangthai ;
                  this.theloai = this.danhmuctruyen.theloai ;
                  // console.log(this.listtruyen   );
                  // console.log(this.mota   );
                 
                  // this.size=this.$refs.infoBox.clientWidth;
                  // this.Height= size + 'px' ;
                  // console.log(this.size);
                    });
            }
        }
        ,
    mounted() {
      // var size = window.innerHeight / 30 ;
  
  
    }
      }
      </script>
    <style>
      .ava {
          max-width: 31%;
          height: auto;
      }
      .chu {
           font-size: 12px; 
           height: auto;
          /* font-weight: inherit; */
      }
      .test {
  
      }
      html {
          background-color: #fefefe;
          box-sizing: border-box;
          font-family: 'Roboto', sans-serif;
          font-size: 14px;
          font-weight: 400;
        }
        
        *, *:before, *:after {
          box-sizing: inherit;
        }
        
        .u-float-right {
          float: right;
        }
        
        .u-flex-center {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
        }
        
        .u-clearfix:before,
        .u-clearfix:after {
            content: " ";
            display: table;
        }
        
        .u-clearfix:after {
            clear: both;
        }
        
        .u-clearfix {
            *zoom: 1;
        }
        
        .container {
          box-shadow: 0 0 50px rgba(0,0,0,.3);
          margin: 10px auto;
          overflow: hidden;
          width: 360px;
        }
        
        .header-container {
          position: relative;
          z-index: 0;
        }
        
        .header-image {
          left: 0;
          position: absolute;
          top: 0;
          z-index: -1;
          height: auto;
          -webkit-animation: zoomEffect 35s infinite;
                  animation: zoomEffect 35s infinite;
          -webkit-animation-timing-function: linear;
                  animation-timing-function: linear;
          -webkit-animation-direction: alternate;
                  animation-direction: alternate;
          -webkit-backface-visibility: hidden;
                  backface-visibility: hidden;
        }
        
        @-webkit-keyframes zoomEffect {
          0% {
            -webkit-transform: scale(1) translateX(0);
                    transform: scale(1) translateX(0);
          }
          100% {
            -webkit-transform: scale(1.2) translateX(-360px) translateY(-80px);
                    transform: scale(1.2) translateX(-360px) translateY(-80px);
          }
        }
        
        @keyframes zoomEffect {
          0% {
            -webkit-transform: scale(1) translateX(0) translateY(0);
                    transform: scale(1) translateX(0) translateY(0);
          }
          100% {
            -webkit-transform: scale(1.2) translateX(-360px) translateY(-80px);
                    transform: scale(1.2) translateX(-360px) translateY(-80px);
          }
        }
        
        .header {
          color: #fff;
          padding: 15px;
          height: 300px;
        }
        
        .header > svg {
          cursor: pointer;
        }
        
        .main-heading {
          color: #fff;  
          font-size: 26px;
          font-weight: 300;
          margin-bottom: 12px;
        }
        
        .tag {
          background-color: rgba(255, 255, 255, .35);
          border-radius: 20px;
          font-size: 11px;
          margin-right: 8px;
          padding: 4px 10px;
          text-transform: uppercase;
        }
        
        .stats {
          margin-top: 35px;
        }
        
        .stat-module {
          display: inline-block;
          font-size: 12px;
          margin-right: 20px;
          text-transform: uppercase;
        }
        
        .stat-number {
          display: inline-block;
          font-weight: 600;
          margin-left: 4px;
        }
        
        .overlay-header {
          background-color: #eee;
          height: 100px;
          margin: -50px 0 0 -25%;
          transform: rotate(-10deg);
          width: 150%;
          z-index: 0;
        }
        
        .bodyok {
          background-color: #eee;
          color: #555;
          margin-top: -50px;
          padding: 0 15px 15px;
          position: relative;
          width: 107%;
        
          left: -11px;
        }
        
        .body-image {
          border-radius: 100%;
          box-shadow: 5px 10px 75px rgba(0, 0, 0, .4);
          float: left;
          margin: -90px 0 20px;
          position: relative;
          z-index: 2;
        }
        
        .body-action-button {
          background-color: #383838;
          border-radius: 50%;
          box-shadow: 1px 2px 12px rgba(0,0,0,.4);
          cursor: pointer;
          height: 40px;
          position: absolute;
          right: 15px;
          top: -97px;
          width: 40px;
        }
        
        .body-stats {
          display: inline-block;
          font-size: 12px;
          font-weight: 700;
          float: left;
          margin: -14px 0  0 30px;
          position: relative;
          text-transform: uppercase;
          width: 20%;
        }
        
        .body-stats > span {
          display: inline-block;
          font-weight: 900;
          margin-top: 8px;
        }
        
        .body-info {
          clear: left;
          position: relative;
          max-height: 100px;
          overflow: hidden;
          transition: all 600ms ease-out;
        }
        .body-info.show {
          clear: left;
          position: relative;
          max-height: none;
          overflow: hidden;
          transition: all 600ms ease-out;
        }
        .body-more {
          background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(238,238,238,1) 100%);
          background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(238,238,238,1) 100%);
          background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(238,238,238,1) 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#eeeeee',GradientType=0 );
          cursor: pointer;
          margin: -57px auto 0px;
          padding: 20px 0 20px;
          position: relative;
          text-align: center;
        }
        
        .body-more span {
          background-color: #fff;
          border-radius: 50%;
          box-shadow: 1px 1px 5px rgba(0,0,0,.3);
          display: inline-block;
          height: 6px;
          margin-right: 2px;
          width: 6px;
        }
        
        .card {
          background: #fff;
          border-radius: 2px;
          box-shadow: 0 0 5px rgba(0, 0, 0, .15);
          margin-top: 15px;
          padding: 10px;
        }
        
        .card-heading {
          font-size: 12px;
          text-transform: uppercase;
        }
        
        .card-more {
          cursor: pointer;
          float: right;
        }
        
        .card-list {
          list-style-type: none;
          margin: 10px 0 0;
          overflow-x: scroll;
          padding: 0;
          white-space: nowrap;
        }
        
        .card-list::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 2px rgba(0,0,0,0.3);
            border-radius: 2px;
            background-color: #F5F5F5;
        }
        
        .card-list::-webkit-scrollbar
        {
            height: 3px;
            background-color: #F5F5F5;
        }
        
        .card-list::-webkit-scrollbar-thumb
        {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.2);
            background-color: #ddd;
        }
        
        .card-list li {
          display: inline;
          margin-left: 10px;
        }
        
        .card-list li:first-child {
          margin-left: 0;
        }
  </style>
  