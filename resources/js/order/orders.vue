<template>
    <!-- This is an example component -->
  
  
  số xu hiện tại lại là {{money }}

    <div class="fixrow row">
      <div v-if="status2 != 1 && status2 != 3" >
    <div class="col mt-0">
    <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
  
      <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
         
          <div class='max-w-md mx-auto  space-y-6'>
         
                <div class="col-lg-6">
                    <div class="form-group">
                      <label for="countries2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn nền tảng</label>
      
                <select  id="countries2" class="
                selectpicker sp1 form-control"   @change="onChange()"   name="nhamang" v-model="social">
                    <option v-for="option in options" :value="option.value">
                      {{ option.text }}
                    </option>
                  </select>
                  <br>
               
                  <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn thể loại</label>
                  <select  id="countries" class="form-control selectpicker sp2"  @change="onChange2()"   name="theloai" v-model="theloai">
                    <option v-for="option in options2" :value="option.code">
                      {{ option.name }}
                    </option>
                  </select>
                  <div  v-if="chondichvu == 1" x-show="showen">
                    <label for="dichvu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn dịch vụ</label>
                    <div @click="onChange3()">
                      <select   id="dichvu" class="form-control selectpicker sp3" data-width="auto" data-size="7"  data-live-search="true"     name="dichvu" v-model="dichvu">
                        <option v-for="option in options3" :value="option.id">
                          {{ option.money }} Xu     {{ option.name }}
                        </option>
                      </select>
                    </div>
                 
                    </div>
                    </div>
                  </div>
                  <p>Link bài viết ,video, ảnh cần chạy</p>
<input class="form-control form-control-alternative" v-model="lienketchay" placeholder="Sao chéo liên kết điền vô đây" />
<v-runtime-template :template="content"></v-runtime-template>
<br>

<div class="form-group fields"  style="display: block;">

<label  class="control-label" for="order_average_time">thời gian ước tính
  
  <br> 
  <button  class="ml-1 mr-1 " data-bs-toggle="tooltip" data-bs-placement="right" title="Thời gian hoàn thành trung bình 10 đơn hàng gần nhất trên 500 đơn vị">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
      <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
    </svg> 
  </button>
   <span class="badge text-bg-secondary"  style="color: black;" >
    {{ timeuoctinh }}
     </span>
</label>
</div>
<div  v-if="chondichvu2 == 1">
<p>Số lượng tăng</p>
<input @keyup="countamount" class="form-control form-control-alternative" v-model="soluongtang" placeholder="Nhập số lượng" />
</div>
              <div  v-if="chondichvu == 1" x-show="showen">
    
                <!-- <div class="space-y-2 text-gray-700" x-data="{isshow:false}">
                <label class="block font-medium text-sm   mx-auto " for="password">
                  Số bình luận tăng là: {{ socmt }}
</label>                <div class="relative  focus-within:text-gray-900 dark:focus-within:text-gray-800 ">
    
    <div aria-hidden="true" class="absolute inset-y-0 flex items-center px-4 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
</svg>
    </div>
    <textarea class="pl-11 text-gray-800 pr-4 pr-11 py-2 border-gray-600 rounded-md focus:border-gray-400 focus:ring
focus:ring-gray-800 ring-gray-400 ring focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-primary-darker
 dark:focus:ring-offset-dark-eval-1 block w-full" id="name2"

   name="name2" required="required"   v-model="name2" @keyup="countLine"
   autocomplete="new-password" placeholder="Nhập mỗi nội dung 1 dòng" type="text">
</textarea>


    <div class="absolute right-0 z-30 inset-y-1 flex items-center px-4 ">
        <button type="button"  class="z-30 ">
                                <svg x-show="!isshow" aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
</svg>                                <svg x-show="isshow" aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
</svg>                            </button>
    </div>
    </div>

                    
            </div> -->
            </div>
                <button  @click="xacnhan"
                class='flex break-inside bg-purple-400 hover:bg-purple-300 rounded-3xl px-8 py-2 mb-3 w-full dark:bg-slate-800 dark:text-white'>
                <div class='flex items-center justify-between flex-1'>
                  <div v-if="nutxuly == '1'" class="spinner-border" role="status">
                 
                  </div>
               
                  <span class='text-lg font-medium text-white'> {{ nutorder }} </span>
                  <svg  width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path fillRule='evenodd' clipRule='evenodd'
                      d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
                      fill='white' />
                  </svg>
                </div>
              </button>
              <div class="max-h-16">
                <div class="cards">
             
                  <Adsense
              data-ad-client="ca-pub-4574266110812955"
               data-ad-slot="8795043992"
               data-full-width-responsive="no"
               ins-class="display: block; height: 50px;"
               ins-style="display: block; height: 50px;"
               data-ad-format="horizontal"
               >
            </Adsense>
            </div>
          </div>
                <div
                    class="bg-white border border-slate-300 shadow-lg rounded-md gap-4 p-4  flex-row items-center justify-center">
                    <section class="w-6 flex flex-col items-center justify-start">
                        <svg width="100%" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M7.5 13.25C10.9518 13.25 13.75 10.4518 13.75 7C13.75 3.54822 10.9518 0.75 7.5 0.75C4.04822 0.75 1.25 3.54822 1.25 7C1.25 10.4518 4.04822 13.25 7.5 13.25Z"
                                stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M4.3269 7.96143C4.80767 9.69219 6.73075 10.7499 8.46152 10.2691C9.51921 9.8845 10.3846 9.01912 10.6731 7.96143"
                                stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.0481 5.55767C9.91536 5.55767 9.80774 5.45005 9.80774 5.31729C9.80774 5.18453 9.91536 5.0769 10.0481 5.0769"
                                stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M10.0481 5.5577C10.1809 5.5577 10.2885 5.45008 10.2885 5.31732C10.2885 5.18456 10.1809 5.07693 10.0481 5.07693"
                                stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M4.95193 5.55767C4.81917 5.55767 4.71155 5.45005 4.71155 5.31729C4.71155 5.18453 4.81917 5.0769 4.95193 5.0769"
                                stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M4.95197 5.5577C5.08473 5.5577 5.19235 5.45008 5.19235 5.31732C5.19235 5.18456 5.08473 5.07693 4.95197 5.07693"
                                stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </section>
                    <section class=" flex flex-col items-start justify-end gap-1">
                        <h1 class="text-base font-semibold text-zinc-800 antialiased">Tổng : {{ tientra }}</h1>
                        <p class="text-sm font-medium text-zinc-400 antialiased">
Tối thiểu {{minorder }} 
<br>
Tối đa {{maxorder  }}

                        </p>
                    </section>
                  
                
            </div>
        </div>
   
        </div>
        <br><br><br><br>
      </div>
    </div>
  
  </div>
 


  </div>
  </template>

  <script>
//   import $ from 'jquery' ;
import VRuntimeTemplate from "vue3-runtime-template";
    import Swal from 'sweetalert2' ;
    import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.css' ;
    import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.min.css' ;
    import '../../../node_modules/bootstrap-select/js/bootstrap-select.js' ;

    export default {
      components: {
    VRuntimeTemplate
  },
      data (){
            return {
              ok2 : this.$cookies.get("apikey")  ,
              name2 : '',
                urlsplit: '0928889798' ,
                selected: null ,
      options: [
        { text: 'Chọn 1 nền tảng', value: 'Telegram' } , 
        { text: 'Telegram', value: 'Telegram' } ,
        { text: 'Shopee', value: 'Shopee' }  ,
        { text: 'TikTok', value: 'Tiktok' }  ,
      ],
      options2: null ,
      options3: null ,
      dichvu: null ,
                lienket: null ,
                theloai: null ,
                minorder:null ,
                maxorder:null ,
                content: null,
                chondichvu: null,
                chondichvu2: null ,
                soluongtang: null ,
                lienketchay: null ,
                timeuoctinh: null,
                status: null ,
                status2: null ,
                nutorder: 'xác nhận' ,
                nutxuly: null ,
                opentele: null ,
                chedo: null ,
                phonechuan: null ,
                nhamang: null,
                selected: null ,
                social: null,
                chietkhau: null,
                ketqua: null  ,
                money: null ,
                socmt: null ,
                response: null,
                status3: null ,
                tientra: null ,
                doisodt: null,
                message: null ,
                magiaodich : '' ,
                age : '',
                info : ''
            }
        },
        mounted() {
          
     

    },
        created() {
            
                this.fetchData();
                this.intervalFetchData() ;
                console.log(this.getCookie('urlsdt'));
                $('.selectpicker').selectpicker('refresh');
                setTimeout(() => {    
                    console.log(this.getCookie('urlsdt'));
                    $('.selectpicker').selectpicker('refresh');
                    setTimeout(() => {     
         $('.sp1').selectpicker('toggle');  }, 300)
                }, 300) ;
            },
        methods : {
          countamount()
          {
            this.tientra=this.tientra1*this.soluongtang*( 100 - this.chietkhau )/ 100 ;
          },
          xacnhan(){
            var xulybinhluan = this.name2 ;
            this.nutxuly = 1 ;
            this.binhluan = xulybinhluan.replace(/(?:\r\n|\r|\n)/g, '<br>');
            this.nutorder = 'chờ xíu nhé' ;
            axios
         .post('./testapi.php', {
          key: this.ok2 ,
          service: this.service ,
      soluong: this.soluongtang ,
      lienketchay: this.lienketchay
      // binhluan: this.binhluan
    })
    .then( response => (
    console.log(response.data ) ,
    this.dathang(response )
    ))
    .catch(error => console.log(error) ,
        // this.age = info
      
       
       
  
        ) ;
          },
          dathang(response){
this.nutorder = 'đặt tiếp luôn nào' ,
this.nutxuly = 0 ,
            this.info1 = response.data ,
      this.status = this.info1.status     ,
        this.message = this.info1.message  
   Swal.fire(this.message ) ;
          } ,
          fetchData() {
     
      
      var urlsplit =  '0928889798' ;
      console.log(urlsplit) ;
          }
          ,
          async saochep(urlsplit) {
            this.ketqua = 'đã sao chép ' ;
     
        await navigator.clipboard.writeText(urlsplit);
        this.ketqua = 'đã sao chép ' ;
    
    },  
    countLine(){
var comment= this.name2;
this.socmt=(comment=='') ? '0' : (comment.split("\n").length)   ;
this.tientra=this.tientra1*this.socmt*( 100 - this.chietkhau )/ 100 ;
},
    onChange() {

    if(!this.social){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
               axios
         .post('./checkdichvu', {
            social: this.social ,
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction2(response )
    ))
    .catch(error => console.log(error) ,
        ) ;
    
    },
    onChange2() {
       

    if(!this.theloai){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
                if(this.social == 'Telegram' ){
                  axios
         .post('./checkdichvu', {
            theloai: this.theloai ,
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction3(response )
    ))
    .catch(error => console.log(error) ,
        ) ;
                }
                else
                {
                  axios
         .post('./checkdichvu', {
            theloai2: this.theloai ,
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction3(response )
    ))
    .catch(error => console.log(error) ,
        ) ;
                }
             
    
    },
    onChange3() {
       

       if(!this.theloai){
                       alert('Please điền đầy đủ thông tin')
                       return
                   }
                   if(this.social == 'Telegram' ){
                    axios
            .post('./checkdichvu', {
              dichvu: this.dichvu ,
       })
       .then( response => (
       console.log(response.data ) ,
       this.testFunction5(response )
       ))
       .catch(error => console.log(error) ,
           ) ;
                   }
                   else
                   {
                    axios
            .post('./checkdichvu', {
              dichvu2: this.dichvu ,
       })
       .then( response => (
       console.log(response.data ) ,
       this.testFunction5(response )
       ))
       .catch(error => console.log(error) ,
           ) ;
                   }
                 
       
       },
    testFunction(response)
    {
      this.info1 = response.data ,
      this.status = this.info1.status     ,
        this.message = this.info1.message  

    },

    getCookie(cookieName) {
  let cookie = {};
  document.cookie.split(';').forEach(function(el) {
    let [key,value] = el.split('=');
    cookie[key.trim()] = value;
  })
  return cookie[cookieName];
},
    testFunction2(response)
    {
      this.options2 = response.data ;

console.log(this.options2) ;
console.log(this.options) ;
        //   Swal.fire(this.info.message ) ;

  setTimeout(() => {    
                 
                    $('.sp2').selectpicker('refresh');
                    setTimeout(() => {     
                        $('.sp2').selectpicker('toggle');  }, 300)
                }, 300) ;
    },
    testFunction3(response)
    {
      this.options3 = response.data , 
      this.info = response.data ,
      
      this.chondichvu = 1 ,
      console.log(this.options3);
      console.log(this.name);
      setTimeout(() => {    
                 
                 $('.sp3').selectpicker('refresh');
                 setTimeout(() => {     
                     $('.sp3').selectpicker('toggle'); }, 300)
             }, 300) ;
    },
    testFunction5(response)
    {
      this.chondichvu2 = 1 ,
      this.info = response.data ,
      this.service = this.info.id ,
      this.maxorder = this.info.maxorder ,
      this.minorder = this.info.minorder ,
      this.tientra1 = this.info.money ,
      this.timeuoctinh = this.info.time ,
      this.name = this.info.name ,
      this.content = this.info.content,
      this.tientra=this.tientra1*this.soluongtang*( 100 - this.chietkhau )/ 100 
    },
    testFunction4(response)
    {
     
      this.info = response.data ,
      this.chietkhau = this.info.chietkhau ,
      this.money = this.info.money 
    },
    
           
            btcTrkAPICall: function () {
              this.chedo = 'checkxu3' ;
              axios    
                  .post('./checkmomo', {
          apikey: this.ok2 ,
      magiaodich: this.magiaodich ,
      chedo: this.chedo 
    })  
                  .then(response => (this.testFunction4(response  ))  )  
                  .catch(error => console.log(error) ,
  
                  console.log(this.btctrk) 
                  )    
          },
          intervalFetchData: function () {
              setInterval(() => {    
                  this.btcTrkAPICall();
                  }, 5000 );    
          } ,
        
        }
    }
    
  </script>