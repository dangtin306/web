<style>
.absdakjsbdka{
  background-color: rgb(255, 240, 242) !important;
}
.sdsasdasdasdasd{
  background-color: rgb(255, 255, 228) !important;
}
.asdasdasdasdasddasd{
  background-color: rgb(231, 255, 254) !important;
}
.adasdasdasdadacas{
  background-color: rgb(234, 255, 231) !important;
}

.inner.show {
  max-height: auto !important;
}
.form-control-pink {
  border-color: rgb(253, 186, 197) !important;
}
.form-control-pink:focus {
  border-color: rgb(185, 255, 212) !important;
}
</style>
<template>


    <div class="fixrow row">
      <div v-if="status2 != 1 && status2 != 3" >
    <div class="col mt-0">
    <div  class='mt-3 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
  
      <div  class='w-full max-w-lg px-10 py-3 mx-auto bg-white rounded-lg shadow-xl'>
         
          <div  ref="socialpro"  class='max-w-md mx-auto  space-y-5'>
         
             
                    <div class="form-group">
                      <label for="social" class="text-center block mb-1 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn nền tảng</label>
      
                <select   ref="social"   id="social" class="form-control
                selectpicker sp1 " data-style=" absdakjsbdka hover:bg-red-300 rounded"    name="nhamang" v-model="social">
               
                    <option  v-for="option in options" :value="option.value"  :data-content=" `<div style='display: flex; align-items: center;'>  ` +  option.text + `&emsp;` + `<img src='` + option.img + `'` + `class=\'asdasd\'>` +`</div>` " >
                    </option>
              
                  </select>
                  <br>
                  <div v-if="chedook != null && chedook != 2 && chedook != 3">
                  <label for="countries" class="text-center block mb-1 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn thể loại</label>
                  <select  id="countries"
                  data-style="bg-pink-200 sdsasdasdasdasd hover:bg-red-300 font-bold py-2 px-4 rounded" 
                   class="form-control selectpicker sp2"
                     @change="onChange2()"   name="theloai" v-model="theloai">
                     <option v-for="option in options2" :value="option.value"  :data-content=" `<div style='display: flex; align-items: center;'>  ` +  option.text + `&emsp;` + `<img src='` + option.img + `'` + `class=\'asdasd\'>` +`</div>` " >
                    </option>
                
                  </select> </div>
                  <div v-if="chedook != null">
                    <label   for="category" class="text-center block mb-1 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn chuyên mục</label>
                    <select data-header="Chọn 1 chuyên mục"  id="category"
                    data-style="bg-pink-200 asdasdasdasdasddasd hover:bg-red-300 font-bold py-2 px-4 rounded" 
                    class="form-control selectpicker sp3"  @change="onChange3()"   name="category" v-model="category">
                    <option v-for="option in options3" :value="option.code" 
                     :data-content="`<div style='display: flex; align-items: center;'>${option.name}&emsp;${option.img ? `<img src='${option.img}' class='asdasd'>` : ''}</div>`">    </option>

                    </select>
                  </div>
                
                  <div  v-if="chondichvu == 1" x-show="showen">
                    <label for="dichvu" class="text-center block mb-1 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn dịch vụ</label>
                    <div @click="onChange4()">
                      <select ref="dichvu" 
                      data-style="bg-pink-200 adasdasdasdadacas hover:bg-red-300 font-bold py-2 px-4 rounded" 
                      id="dichvu" class="form-control selectpicker sp4  " show-tick  data-size="6"  data-live-search="true"     name="dichvu" v-model="dichvu">
                        <option  v-for="option in options4" :value="option.id"
                        :data-content="`<span class='text-xs '   >  <span class='whitespace-nowrap inline-block bg-pink-300 rounded-md px-1 py-1 text-xs font-semibold text-white mr-1 mb-1 break-words whitespace-pre-wrap' style='width: `+ chieurongok +`;'>${option.name}</span> <br> (${option.money} Xu) ${option.id}</span>`"  >
                 
                        </option>

                        
                      </select>
                    </div>
                 
                    </div>
                    </div>
                    <div v-if="loaddichvu == false" >
                      <div style="background-color: #FFB6C1;">
                         <p class="text-center" style="color: #fff;">
                          
                          <div  class="text-center spinner-border" role="status">
                               
                          </div>
                          <br>
                          Đang tải danh sách
                         </p>
                      </div>
                  </div>
                  
                  <p class="mt-2 text-xs">Link,id bài viết ,video, username cần thực thi</p>
<input class="mt-2 border-3 form-control-pink form-control form-control-alternative" v-model="lienketchay" placeholder="Copy và điền liên kết ở đây" />

<v-runtime-template v-if="content" :template="content">
</v-runtime-template>

<div v-if="timeuoctinh" class="mt-2 form-group fields"  style="display: block;">
  <div v-if="ádasdacsacas == 1"  class="col mt-0"  >
    <div @click="adbasdasdandsa2" class="mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500">
      <div  class="ml-3 h-7 flex justify-end items-center">
        <button  type="button" class="bg-gray-100 dark:bg-gray-700 m-1 p-3 justify-end rounded-md text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500">
      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
    </button>
  </div>
  <div  class="w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl">
    Thời gian hoàn thành trung bình 10 đơn hàng gần nhất trên 500 đơn vị
  </div>
  <br>
</div>
</div>

<label v-if="timeuoctinh" class="control-label" >thời gian ước tính
  
  <br> 
  <button @click="adbasdasdandsa" class="ml-1 mr-1 " data-bs-toggle="tooltip" data-bs-placement="right" title="Thời gian hoàn thành trung bình 10 đơn hàng gần nhất trên 500 đơn vị">
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
<div class="mt-2"  v-if="chondichvu2 == 1 && typedichvu != 'comment'">
<p class="my-1">Số lượng tăng</p>
<input @keyup="countamount" class="mt-0 my-1  
border-3 form-control-pink form-control form-control-alternative" v-model="soluongtang" placeholder="Nhập số lượng mong muốn" />
<span class="text-xs" >
  Tối thiểu {{minorder }} 
  &emsp; 
  Tối đa {{maxorder  }}
</span>

</div>
      
    
                    <div v-if="typedichvu == 'comment'" x-show="showen" class="mt-3 space-y-2 text-gray-700" x-data="{isshow:false}">
                <label class="block font-medium text-sm   mx-auto " for="password">
                  Số bình luận tăng là: {{ socmt }}
</label>                <div class="relative  focus-within:text-gray-900 dark:focus-within:text-gray-800 ">
    
    <div aria-hidden="true" class="absolute inset-y-0 flex items-center px-4 pointer-events-none">
        <svg aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
</svg>
    </div>
    <textarea style="height: 7rem !important;" class=" pl-11 text-gray-800 pr-4 pr-11 py-2 border-gray-600 rounded-md focus:border-gray-400 focus:ring
focus:ring-gray-800 ring-gray-400 ring focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-primary-darker
 dark:focus:ring-offset-dark-eval-1 block w-full" id="name2"

   name="name2" required="required"   v-model="name2" @keyup="countLine"
   autocomplete="new-password" placeholder="Nhập mỗi nội dung 1 dòng" type="text">
</textarea>


    <div class="absolute z-30 inset-y-1 flex items-center px-4 ">
        <button type="button"  class="z-30 ">
                                <svg x-show="!isshow" aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
</svg>                                <svg x-show="isshow" aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
</svg>                            </button>
    </div>
    </div>

                    
      
            </div>
                <button  @click="xacnhan" :disabled="disableButton"
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
               >
            </Adsense>
            </div>
          </div>
                <div
                    class="mt-2 bg-white border border-slate-300 shadow-lg rounded-md gap-4 p-2  flex-row items-center justify-center">
                
               
                    <section class=" flex flex-col items-start justify-end gap-1">
                      <div class="flex items-center">
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
                    </section> &emsp;  <h1 class="text-base font-semibold text-zinc-700 antialiased">Tổng :
                      {{ parseFloat((tientra).toFixed(2)) !== parseInt((tientra)) ? (tientra).toFixed(2) : parseInt((tientra)) }}
                  </h1>
                  </div>  
                  
                  <p class="text-sm font-medium text-zinc-400 antialiased">
                  
                      Số lượng tăng {{ soluongtang  }}   &emsp;
                      <span v-if="chietkhau != null && chietkhau > 0"
                         class="text-sm font-medium text-zinc-400 antialiased" >
                      Chiết khấu giảm {{chietkhau }}%
                    </span>
                   
                        </p>
                    </section>
                  
                
            </div>
        </div>
   
        </div>
        <br><br>
        <div class="max-h-16">
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
        <br><br><br><br><br><br><br><br><br>
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
    import { ref, provide } from 'vue';
    export default {
      components: {
    VRuntimeTemplate
  }, 
  
  // provide() {
  //   // use function syntax so that we can access `this`
  //   return {
  //     message: this.money
  //   }
  // },
      data (){
            return {
              ok2 : this.$cookies.get("apikey")  ,
              name2 : '',
                urlsplit: '0928889798' ,
                selected: null ,
                thongsopost: null ,
                typedichvu : null ,
                chieurongok : null ,
      options: [
        { text: 'Chọn 1 nền tảng', value: '', img: 'https://static.thenounproject.com/png/2383182-200.png' } , 
        { text: 'Tăng tương tác TikTok', value:  [ { social: 'Tiktok', chedo: 1 }], img: 'https://hust.media/img/icon/tiktok.gif' }  ,
        { text: 'Tăng tương tác Facebook', value: [ { social: 'Facebook', chedo: 1 }], img: 'https://hust.media/img/icon/fbicon.gif' }  ,
        { text: 'Tăng tương tác instagram', value: [ { social: 'Instagram', chedo: 1 }], img: 'https://hust.media/img/icon/200w%20(1).gif' }  ,
        { text: 'Tăng tương tác Youtube', value: [ { social: 'Youtube', chedo: 2 }], img: 'https://hust.media/img/icon/%C3%A1dasdasd.gif' }  ,
        { text: 'Tăng tương tác Shopee', value: [ { social: 'Shopee', chedo: 2 }] , img: 'https://hust.media/img/icon/sadasdasd.gif' }  ,
        { text: 'Tăng tương tác Telegram', value: [ { social: 'Telegram', chedo: 2 }] , img: 'https://hust.media/img/icon/telegram.png' }  ,
        { text: 'Các nền tảng khác', value: [ { social: 'All', chedo: 2 }] , img: 'data:image/png;base64,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' }  ,
      ],
      options2save: [] ,
      options2: [] ,
      options2ok: [
      { Tiktok:  [ 
        { text: 'Tăng người theo dõi TikTok', value: 'fltiktok' , img: 'https://hust.media/img/icon/followtiktok.jfif' }  ,
        { text: 'Tăng tương tác Video', value: 'tiktok' , img: 'https://hust.media/img/icon/upload.jpg' }  ,
        { text: 'Tăng người xem Video,Story TikTok', value: 'videotiktok' , img: 'https://hust.media/img/icon/viewtiktok.svg' } ,
        { text: 'Tăng tương tác livestream' , value: 'livetiktok' , img: 'https://hust.media/img/icon/livetiktokok.png'  }] } , 
        { Facebook:  [ 
        { text: 'Tăng người theo dõi,bạn bè Facebook', value: 'followfb',  img: 'https://hust.media/img/icon/followfbok.png'  }  ,
        { text: 'Tăng tương tác Facebook', value: 'like|Facebook',  img: 'https://hust.media/img/icon/meta.png'  }  ,
        { text: 'Facebook reels, view, story', value: 'Facebook|video',  img: 'https://hust.media/img/icon/reelsfb.svg'  } ,
        { text: 'Tăng tương tác Page, nhóm, sự kiện' , value: 'page' ,  img: 'https://hust.media/img/icon/likepageicon.png'   }] },
        { Instagram:  [ 
        { text: 'Tăng Người theo dõi insta', value: 'flins',  img: 'https://hust.media/img/icon/flins.png'  }  ,
        { text: 'Tăng tương tác insta', value: 'timins',  img: 'https://hust.media/img/icon/timins.png'  }  ,
        { text: 'Lượt xem insta reel, story, Live Stream, IGTV', value: 'viewins',  img: 'https://hust.media/img/icon/reelsfb.svg'  } ,
     ] },
        { text: 'Telegram', value: 'Telegram' } ,
        { text: 'Youtube', value: 'Youtube' }  ,
        { text: 'Shopee', value: 'Shopee' }  ,
              ], 
      options3: [] ,
      options3save: [] ,
      options4: [] ,
      dichvu: null ,
      category: null ,
      money: null,
                lienket: null ,
                ádasdacsacas: null ,
                theloai: null ,
                minorder:null ,
                maxorder:null ,
                content: null,
                chondichvu: null,
                chondichvu2: null ,
                soluongtang: null ,
                chedook: null ,
                lienketchay: null ,
                timeuoctinh: null,
                status: null ,
                status2: null ,
                nutorder: 'xác nhận' ,
                nutxuly: null ,
                opentele: null ,
                chedo: null ,
                socialok: null ,
                phonechuan: null ,
                nhamang: null,
                selected: null ,
                social: null,
                chietkhau: null,
                ketqua: null  ,
                // money: null ,
                socmt: null ,
                response: null,
                status3: null ,
                tientra: 0 ,
                doisodt: null,
                message: null ,
                disableButton: false,
                magiaodich : '' ,
                age : '',
                info : '' ,
                loaddichvu : true ,
                previousOption: null ,
            }
        },
        mounted() {
          
          $(this.$refs.social).on('hidden.bs.select', () => {
this.onChange();
this.chieurongok = this.$refs.socialpro.offsetWidth / 10 * 9 ;
        console.log(chieurongok) ;
  });
  $('.sp4').on('hidden.bs.select', () => {
// this.onChange4();
console.log(1);
  });

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
           
                this.btcTrkAPICall();
            },
            
        methods : {
          countamount()
          {
            this.tientra=this.tientra1*this.soluongtang*( 100 - this.chietkhau )/ 100 ;
          },
          xacnhan(){
            this.disableButton = true;
            var xulybinhluan = this.name2 ;
            this.nutxuly = 1 ;
            this.binhluan = xulybinhluan.replace(/(?:\r\n|\r|\n)/g, '<br>');
            this.nutorder = 'chờ xíu nhé' ;
      
            if ( this.typedichvu)
            {
              this.thongsopost = {
  key: this.ok2,
  service: this.service,
  quantity: this.socmt,
  link: this.lienketchay,
  action: 'add' ,
  comments: this.binhluan
};
            }
            else
            {
              this.thongsopost  = {
  key: this.ok2,
  service: this.service,
  quantity: this.soluongtang,
  link: this.lienketchay,
  action: 'add'
  // binhluan: this.binhluan
};

            }
            axios.post('https://hust.media/testapi.php', this.thongsopost )
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
this.disableButton = false;
this.nutxuly = 0 ,
            this.info1 = response.data ;



   if (this.info1.order  )
 {
  const adnasas = this.info1.order ;
   this.thongbaosuccess('Thankiuu Bạn là người thứ ' + adnasas + ' ủng hộ Hust Media') ;
 }
 else if ( this.info1.error )
 {
  const adnasas = this.info1.error ;
   this.thongbaoerror(adnasas) ;
   console.log(adnasas)
 }
 else
 {
  this.thongbaosuccess('Mua hàng thành công, cảm ơn bạn') ;
 }

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
    
  
      for (const option of this.social) {
   this.socialok = option.social; // Lấy giá trị Tiktok
   this.chedook = option.chedo; // Lấy giá trị 1
  console.log(this.socialok, this.chedook); // In ra màn hình
}
if (  this.chedook  == 1 )
{
  if (this.options2ok.some(option => Object.keys(option)[0] === this.socialok)) {
  this.options2save = this.options2ok.find(option => Object.keys(option)[0] === this.socialok)[this.socialok];
console.log( this.options2save) ;
} else {
  console.log('hello') ;
}

}
else if (  this.chedook  == 2 )
{
   this.loaddichvu = false ;
  this.theloai = this.socialok ;
  console.log('ádasdasd') ;
  this.onChange2();

}
this.options2 = [] ;
      // this.options2 =  this.options2ok.this.socialok ;
      const foundOption = this.options2ok.find(option => option?.hasOwnProperty(this.socialok));
        //   Swal.fire(this.info.message ) ;
  
  setTimeout(() => {    
                 
                    $('.sp2').selectpicker('refresh');
                    this.options2 = this.options2save ; 
                    setTimeout(() => {    
                      $('.sp2').val(null);
                      $('.sp2').selectpicker('refresh'); 
                      setTimeout(() => {     
                        $('.sp2').selectpicker('toggle');  }, 200)
                    }, 200)
                 
                }, 200) ;

  
    
    },
    onChange2() {
      if(!this.theloai){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
                else
                {
                  this.loaddichvu = false ;
               axios
         .post('https://hust.media/getservice/category.php', {
            social: this.socialok ,
            theloai: this.theloai 
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction2(response ) ,
    this.loaddichvu = true 
    ))
    .catch(error => console.log(error) ,
        ) ;
                }
               
    },
    adbasdasdandsa2()
    {
      this.ádasdacsacas = 0 ;
    },
    adbasdasdandsa()
    {
      if ( this.ádasdacsacas == 1 )
      {
        this.ádasdacsacas = 0 ;
      }
      else if ( this.ádasdacsacas == 12 )
      {
        this.ádasdacsacas = 2 ;
      }
      else if ( this.ádasdacsacas != 12 )
      {
        this.ádasdacsacas = 1 ;
      }
    },
    onChange3() {
     
      this.loaddichvu = false ;

                if(!this.category){
                       alert('Please điền đầy đủ thông tin')
                       return
                   }
                  axios
         .post('https://hust.media/getservice/service.php', {
          category: this.category ,
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction3(response ) ,
    this.loaddichvu = true 
    ))
    .catch(error => console.log(error) ,
        ) ;
                
           
             
    
    },
    onChange4() {
      if(!this.dichvu){
      if(this.options4){
      this.dichvu =  this.options4[0].id ;
      }
                }
                
                if(!this.dichvu){
                       alert('Please điền đầy đủ thông tin')
                       return
                   }
                else
                {
                  this.info  =  this.options4.find(service => service.id === this.dichvu);
if(this.info )
{
  this.chondichvu2 = 1 ,
      this.service = this.info.id ,
      this.maxorder = this.info.maxorder ,
      this.minorder = this.info.minorder ,
      this.tientra1 = this.info.money ,
      this.timeuoctinh = this.info.time ,
      this.name = this.info.name ,
      this.typedichvu = this.info.type ,
      this.content = this.info.content,
      this.tientra=this.tientra1*this.soluongtang*( 100 - this.chietkhau )/ 100 

}
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
      this.options3save = response.data ;

console.log(this.options3save) ;
console.log(this.options) ;
        //   Swal.fire(this.info.message ) ;
        this.options3 = [] ;
        setTimeout(() => {    
                 
                 $('.sp3').selectpicker('refresh');
                 this.options3 = this.options3save ; 
                 setTimeout(() => {    
                   $('.sp3').val(null);
                   $('.sp3').selectpicker('refresh'); 
                   setTimeout(() => {     
                     $('.sp3').selectpicker('toggle');  }, 200)
                 }, 200)
              
             }, 200) ;
      

    },
    testFunction3(response)
    {
      this.options4 = response.data , 
      this.info = response.data ,
      
      this.chondichvu = 1 ,
      console.log(this.options4);
      console.log(this.name);
      setTimeout(() => {    
                 
                 $('.sp4').selectpicker('refresh');
                 setTimeout(() => {     
                     $('.sp4').selectpicker('toggle'); }, 300)
             }, 400) ;
    },
   
    testFunction4(response)
    {
     
      this.info = response.data ,
      this.chietkhau = this.info.chietkhau ,
      this.money = this.info.money 
      document.cookie = `money=${this.money}`;


    },
    thongbaoerror(error)
       {
         this.openappleok = 'no' ;
         Swal.mixin({
     toast: true,
   position: 'top-right',
   iconColor: 'white',
   customClass: {
     popup: 'colored-toast'
   },
   showConfirmButton: false,
   timer: 3000,
   timerProgressBar: true,
   didOpen: (toast) => {
     toast.addEventListener('mouseenter', Swal.stopTimer)
     toast.addEventListener('mouseleave', Swal.resumeTimer)
   }
 }).fire({
     icon: 'error',
     title:  error
 
 })  
       },
       thongbaosuccess(success)
       {
         Swal.mixin({
     toast: true,
   position: 'top-right',
   iconColor: 'white',
   customClass: {
     popup: 'colored-toast'
   },
   showConfirmButton: false,
   timer: 3000,
   timerProgressBar: true,
   didOpen: (toast) => {
     toast.addEventListener('mouseenter', Swal.stopTimer)
     toast.addEventListener('mouseleave', Swal.resumeTimer)
   }
 }).fire({
     icon: 'success',
     title: success
 
 })
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