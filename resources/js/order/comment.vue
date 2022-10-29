<template>
    <!-- This is an example component -->
  
  
  số xu hiện tại lại là {{money }}
  số điện thoại hiện tại là {{ phonechuan }}
    <div class="fixrow row">
      <div v-if="status2 != 1 && status2 != 3" >
    <div class="col-xl-4 mt-0">
    <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
  
      <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
         
          <div class='max-w-md mx-auto  space-y-6'>
         
              <div  x-show="showen">
    
                    <div class="space-y-2 text-gray-700" x-data="{isshow:false}">
                    <label class="block font-medium text-sm   mx-auto " for="password">
                      Số bình luận {{ socmt }}
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
       autocomplete="new-password" placeholder="nhập bình luận bạn muốn tăng" type="text">
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
    
                        
                </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Chọn dịch vụ</label>
      
                <select class="selectpicker " id="" @change="onChange()"   name="nhamang" v-model="selected">
                    <option v-for="option in options" :value="option.value">
                      {{ option.text }}
                    </option>
                  </select>
                    </div>
                  </div>
                <button  @click="xacnhan"
                class='flex break-inside bg-black rounded-3xl px-8 py-2 mb-3 w-full dark:bg-slate-800 dark:text-white'>
                <div class='flex items-center justify-between flex-1'>
                  <span class='text-lg font-medium text-white'>Xác nhận</span>
                  <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path fillRule='evenodd' clipRule='evenodd'
                      d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
                      fill='white' />
                  </svg>
                </div>
              </button>
        </div>
   
        </div>
   
      </div>
    </div></div>
 


  </div>
  </template>

  <script>
//   import $ from 'jquery' ;

    import Swal from 'sweetalert2' ;
    import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.css' ;
    import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.min.css' ;
    import '../../../node_modules/bootstrap-select/js/bootstrap-select.js' ;

    export default {
      data (){
            return {
              ok2 : this.$cookies.get("apikey") ,
              name2 : '',
                urlsplit: '0928889798' ,
                selected: null ,
      options: [
        { text: 'Viettel', value: 'VIETTEL' },
        { text: 'Vinaphone', value: 'Vinaphone' },
        { text: 'Mobifone', value: 'MOBIFONE' }
      ],
                lienket: null ,
                status: null ,
                status2: null ,
                opentele: null ,
                chedo: null ,
                phonechuan: null ,
                nhamang: null,
                selected: null ,
                ketqua: null  ,
                money: null ,
                socmt: null ,
                response: null,
                status3: null ,
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
         $('.selectpicker').selectpicker('toggle');  }, 300)
                }, 300) ;
            },
        methods : {
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
    tele2(){this.opentele = 'ok'},
    
    countLine(){
var comment= this.name2;
this.socmt=(comment=='') ? '0' : (comment.split("\n").length)   ;
},
    onChange() {
        $('.selectpicker').change(function () {
        var selectedItem = $('.selectpicker').val();
      this.nhamang = selectedItem ;
      console.log(this.nhamang) ;
    });
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
      this.info = response.data ;
        if ( this.info.status != "1" )
        {
          Swal.fire(this.info.message ) ;
        }
        else
        {
       
      //     this.urlsdt = this.getCookie('urlsdt') ,
      //  console.log(this.urlsdt) ,
        this.$router.push('/sms') 
        }
    },
    doiso()
    {
  this.doisodt = 1 ;
  this.status2 = 0 ;
    },
    testFunction4(response)
    {
     
      this.info = response.data ,
      this.phonechuan = this.info.phonechuan ,
      this.money = this.info.money 
    },
    testFunction3(response)
    {
      this.info = response.data ;
        if ( this.info.status != "1" )
        {
          Swal.fire(this.info.message ) ;
        }
        else
        {
          this.message = this.info.message     ,
        this.status = this.info.status     ,
        this.status3 =  this.status  ,
        this.status2 = 3 ,
    
        console.log( this.message )
        }
      
    },
          xacnhan(){

             
        // var selectedItem = $('.selectpicker').val();
      this.nhamang = this.selected ;
      console.log(this.nhamang) ,
      console.log(this.name2) ;
     var  str = this.name2 ;
              this.chedo = 'phone2' ;
              var  str=str.replace(/(?:\r\n|\r|\n)/g, '<br>');
              // this.intervalFetchData(); 
                if(!this.name2){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
                else if(!this.nhamang){
                    alert('Please vui lòng chọn nhà mạng')
                    return
                }
               axios
         .post('./checkmomo', {
          apikey: this.ok2 ,
      user2: str ,
      chedo: this.chedo , 
      nhamang: this.nhamang ,
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction(response )
    ))
    .catch(error => console.log(error) ,
        // this.age = info
      
       
       
  
        ) ;
        
       
            } ,
            tele(){
    
          
                if(!this.name2){
                    alert('Vui lòng điền lại sdt')
                    
                }
             else
             {
                this.chedo = 'checkxu2'
              // this.intervalFetchData(); 
       
                axios
         .post('./checkmomo', {
          apikey: this.ok2 ,
      magiaodich: this.magiaodich ,
      user2: this.name2 ,
      chedo: this.chedo 
    })
    .then(response => (  this.testFunction2(response )))
    .catch(error => console.log(error) ,
  
        // this.age = info
  
   
        )
             }
          
                   
            } ,
           
            btcTrkAPICall: function () {
              this.chedo = 'checkxu' ;
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