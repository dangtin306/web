<template>
    <!-- This is an example component -->
  
  
  số xu hiện tại lại là {{money }}

    <div class="fixrow row">
    
    <div class="col-xl-6 order-xl-1">
        
    <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
  
      <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
        <div v-html="laychietkhauthe"></div>
          <div class='max-w-md mx-auto  space-y-6'>
            <a href="https://www.youtube.com/watch?v=t3wHOBTGtOk"> ấn vô đây xem clip hướng dẫn đổi thẻ cào sang tiền mặt </a>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label for="countries2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn nhà mạng</label>
      
                <select  id="countries2" class="
                selectpicker sp1 form-control"   @change="onChange()"   name="nhamang" v-model="social">
                    <option v-for="option in options" :value="option.value">
                      {{ option.text }}
                    </option>
                  </select>
                  <br>
               
                  <!-- <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn thể loại</label>
                  <select  id="countries" class="form-control selectpicker sp2"  @change="onChange2()"   name="theloai" v-model="theloai">
                    <option v-for="option in options2" :value="option.code">
                      {{ option.name }}
                    </option>
                  </select> -->
                  <div  v-if="chondichvu == 1" x-show="showen">
                    <label for="dichvu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Mệnh Giá: </label>
                    <select  id="dichvu" class="form-control selectpicker sp3" data-width="auto" data-size="7"  data-live-search="false"  @change="onChange3()"   name="dichvu" v-model="dichvu">
                      <option v-for="option in options3" :value="option.value">
                        {{ option.text }}     
                      </option>
                    </select>
                    </div>
                    </div>
                  </div>
                  <div  v-if="chondichvu2 == 1">
                  <p>Seri thẻ cào</p>
<input class="form-control form-control-alternative" v-model="serialthecao" placeholder="số seri hiện sẵn ở mỗi thẻ" />

<p>Mã thẻ cào</p>
<input @keyup="countamount" class="form-control form-control-alternative" v-model="mathecao" placeholder="số hiện ra khi cào thẻ" />
</div>
              <div  v-if="chondichvu == 1" x-show="showen">
    
          
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
                        <h1 class="text-base font-semibold text-zinc-800 antialiased">Số xu nhận : {{ tientra }}</h1>
                        <p class="text-sm font-medium text-zinc-400 antialiased">
Giá trị thẻ {{minorder }} 
<br>
Chiết khấu {{maxorder  }}

                        </p>
                    </section>
                  
                
            </div>
        </div>
   
        </div>
 
      </div>
    </div>
    <div class="col-xl-5 order-xl-2">
      <div v-if="laylichsudoithe == null" class="text-center spinner-border" role="status">
                 
      </div>
      <div v-html="laylichsudoithe"></div>

      </div>
      
  </div>
  <br><br><br><br><br><br>



  </template>

  <script>
//   import $ from 'jquery' ;

    import Swal from 'sweetalert2' ;
    import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.css' ;
    import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.min.css' ;
    import '../../../node_modules/bootstrap-select/js/bootstrap-select.js' ;
    import VRuntimeTemplate from "vue3-runtime-template";
    export default {
      data (){
            return {
              ok2 : this.$cookies.get("apikey")  ,
              name2 : '',
                urlsplit: '0928889798' ,
                selected: null ,
      options: [
        { text: 'Chọn 1 loại thẻ', value: '' } , 
        { text: 'Viettel', value: 'VIETTEL' } ,
        { text: 'Vinaphone', value: 'VINAPHONE' }  ,
        { text: 'Mobifone', value: 'MOBIFONE' }  ,
        { text: 'Vietnam Mobile', value: 'VNMOBI' }  ,
        { text: 'Garena', value: 'GARENA' }  ,
        { text: 'ZING', value: 'ZING' }  ,
      ],
      options2: null ,
      options3: null ,
                lienket: null ,
                chondichvu: null,
                chondichvu2: null ,
                mathecao: null ,
                serialthecao: null ,
                laychietkhauthe: null ,
                timeuoctinh: null ,
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
                jsonchietkhauthe: null ,
                laylichsudoithe: null ,
                magiaodich : '' ,
                age : '',
                info : ''
            }
        },
        components: {
    VRuntimeTemplate
  },
        mounted() {
          
     

    },
        created() {
          this.apilaylichsudoithe() ;
            this.laychietkhautheok();
            this.layjsondoithe();
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
            this.tientra=this.tientra1*this.mathecao*( 100 - this.chietkhau )/ 100 ;
          },
          xacnhan(){
            this.nutxuly = 1 ;

            this.nutorder = 'chờ xíu nhé' ;
            axios
         .post('https://tecom.pro/doithepost.php', {
          key: this.ok2 ,
          loaithe: this.social ,
          menhgia: this.dichvu ,
          chedo: 'doithe' ,
      pin: this.mathecao ,
      seri: this.serialthecao
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
layjsondoithe()
{
  let config = {
    timeout: 7000,
};

var urlsplit = 'https://tecom.pro/doithejson2.php' ;

              axios
                  .get(urlsplit ,config)
                  .then(response => {
                this.jsonchietkhauthe = response.data  ;
               
               })
               ;
},
laychietkhautheok()
          {
     
let config = {
    timeout: 7000,
};

var urlsplit = 'https://tecom.pro/doithe2.php' ;

              axios
                  .get(urlsplit ,config)
                  .then(response => {
      console.log(response.data);
                this.laychietkhauthe = response.data  ;
               })
               ;
          },
    onChange() {
    
        this.options3 = [
        { text: 'Chọn mệnh giá', value: '' } , 
        { text: '10.000 ( 10K )', value: '10000' } ,
        { text: '20.000 ( 20K )', value: '20000' }  ,
        { text: '30.000 ( 30K )', value: '30000' }  ,
        { text: '50.000 ( 50K )', value: '50000' }  ,
        { text: '100.000 ( 100K )', value: '100000' }  ,
        { text: '200.000 ( 200K )', value: '200000' }  ,
        { text: '300.000 ( 300K )', value: '300000' }  ,
        { text: '500.000 ( 0.5m )', value: '500000' }  ,
        { text: '1.000.000 ( 1m )', value: '1000000' }  ,
      ], 

      this.chondichvu = 1 ,
      console.log(this.options3);
      console.log(this.name);
      setTimeout(() => {    
                 
                 $('.sp3').selectpicker('refresh');
                 setTimeout(() => {     
                     $('.sp3').selectpicker('toggle');;  }, 300)
             }, 300) ;
    
    },
    onChange2() {
       

    if(!this.theloai){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
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
    
    },
    onChange3() {
     
 
      this.chondichvu2 = 1 
      var results = [];
var searchField1 = "telco";
var searchField2 = "value";
var searchVal1 = this.social  ;
var searchVal2 =  this.dichvu ;
const myJSON = JSON.stringify(this.jsonchietkhauthe);
console.log(this.dichvu ) ;
var parsed=JSON.parse(myJSON);
for (var i=0 ; i < parsed.length ; i++)
{
    if (parsed[i][searchField1] == searchVal1 && parsed[i][searchField2] == searchVal2) {
        results.push(parsed[i]);
    }
}
 results = Object.values(results)[0] ;

this.info = results ;
console.log(this.info.fees);
 
    //   this.service = this.info.id ,
      this.maxorder =  Math.round(this.info.fees  * 1.04) ,
      this.minorder = this.dichvu ,
      this.tientra1 = this.info.fees * 1.04 ,
    //   this.timeuoctinh = this.info.time ,
    //   this.name = this.info.name ,
    //   this.content = this.info.content,
      this.tientra=Math.round(this.dichvu*( 100 - this.tientra1 )/ 100) ;

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
                        $('.sp2').selectpicker('toggle');;  }, 300)
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
                     $('.sp3').selectpicker('toggle');;  }, 300)
             }, 300) ;
    },
  
    testFunction4(response)
    {
     
      this.info = response.data ,
      this.chietkhau = this.info.chietkhau ,
      this.money = this.info.money 
    },
    apilaylichsudoithe()
    {
      var urllaylsdoithe = 'https://tecom.pro/doithels.php?' + this.ok2  ;
                  axios    
                  .get(urllaylsdoithe)  
                  .then(response => (
                    this.laylichsudoithe = response.data   )  )
                  .catch(error => console.log(error) 
                  )   
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
                  .catch(error => console.log(error) 
                  )    
                this.apilaylichsudoithe() ;
          },
          intervalFetchData: function () {
              setInterval(() => {    
                  this.btcTrkAPICall();
                  }, 5000 );    
          } ,
        
        }
    }
    
  </script>