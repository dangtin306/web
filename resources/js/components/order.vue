<template>
  <div id="loadingg">
      <img id="loading-image" src="https://hust.media/img/icon/loadgau.png" alt="Loading..." />
    </div>
  <div class="max-w-2xl px-1 py-4  mx-auto rounded-lg shadow-xl">
    <div v-if="hientruyen == null" class="container-fluid">
      <div class="row" style="background-color: #FFB6C1;">
         <p class="text-center" style="color: #fff;">
          
          <div  class="text-center spinner-border" role="status">
               
          </div>
          <br>
          Đang tải danh sách
         </p>
      </div>
  </div>
  <div v-if="hientruyen != null" style="display: flex; justify-content: center; align-items: center;">
    <nav class="component_pagination">
    <div class="">
    <ul class="pagination">
    <li class="page-item pagination-item pagination-item__active">
      <router-link to="?listtrang=1" class="page-link pagination-link">1</router-link></li>
    <li class="page-item pagination-item ">
      <router-link to="?listtrang=2" class="page-link pagination-link">2</router-link></li>
    <li class="page-item pagination-item ">
      <router-link to="?listtrang=3" class="page-link pagination-link">3</router-link></li>
    <li class="page-item pagination-item ">
      <router-link to="?listtrang=4" class="page-link pagination-link">4</router-link></li>
    <li class="page-item pagination-item ">
      <router-link to="?listtrang=5" class="page-link pagination-link">5</router-link></li>
    <li class="page-item pagination-item">
   
    </li>
    </ul>
    </div>
    </nav>
    </div>
             <div v-html="hientruyen"></div>

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
  <script>
  import VRuntimeTemplate from "vue3-runtime-template";
  import axios from 'axios';
  export default {
    data() {
          return {
            hientruyen: null ,
            ok2 : this.$cookies.get("apikey") ,
            listtrang: 1 ,
          }
        },
    created() {
        this.fetchData();
    },
   
    methods: {
        fetchData() {
          const urlParams = new URLSearchParams(window.location.search);
          this.listtrang = urlParams.get('listtrang');
if ( !this.listtrang   )
{
  this.listtrang = 1 ;
}
            //   this.linkanh = this.$route.query.id ;
            var url = location.href  ;
var splitter = '/truyen-tranh/' ;

let config = {
    timeout: 27000,
};
var urlsplit = url.split(splitter)[1];
urlsplit = 'https://tecom.pro/nhat-ky-order2.php?listtrang=' + this.listtrang 
+ '&apikey=' + this.ok2 ;
// console.log(urlsplit);
              axios
                  .get(urlsplit ,config)
                  .then(response => {
      // console.log(response.data);
                this.hientruyen = response.data ;
                $('#loadingg').hide();
               }).catch(error => this.error2(error)   )
               ;
        },
        
    }
  }
  </script>