<template>
    <!-- This is an example component -->
  
  
  số xu hiện tại lại là {{money }}
  số điện thoại hiện tại là {{ phonechuan }}
    <div class="fixrow row">
      <div v-if="status2 != 1 && status2 != 3" >
    <div class="col-xl-4 mt-0">
    <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
  
      <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
          <form >
          <div class='max-w-md mx-auto  space-y-6'>
         
              <div  x-show="showen">
    
                    <div class="space-y-2 text-gray-700" x-data="{isshow:false}">
                    <label class="block font-medium text-sm   mx-auto " for="password">
                      Bước 1 thêm sdt
    </label>                <div class="relative  focus-within:text-gray-900 dark:focus-within:text-gray-800 ">
        <div aria-hidden="true" class="absolute inset-y-0 flex items-center px-4 pointer-events-none">
            <svg aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
    </svg>
        </div>
        <input class="pl-11 text-gray-800 pr-4 pr-11 py-2 border-gray-600 rounded-md focus:border-gray-400 focus:ring
    focus:ring-gray-800 ring-gray-400 ring focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-primary-darker
     dark:focus:ring-offset-dark-eval-1 block w-full" id="name2"
  
       name="name2" required="required"   v-model="name2"
       autocomplete="new-password" placeholder="nhập số điện thoại để rút hoặc nạp xu" type="text">
    
        
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
                      <label class="form-control-label" for="input-first-name">Chọn Nhà mạng</label>
      
                <select class="selectpicker " id="" @change="onChange()"   name="nhamang" v-model="selected">
                    <option v-for="option in options" :value="option.value">
                      {{ option.text }}
                    </option>
                  </select>
                    </div>
                  </div>
                <button type='submit' @click="onSubmit"
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
      </form>
        </div>
   
      </div>
    </div></div>
 
  <div v-if="message">
    <div class="col-xl-4 mt-0">
    <div class='flex items-center py-7 flex-col mx-2 '>
    <div class='break-inside relative overflow-hidden flex flex-col justify-between space-y-2 text-sm rounded-xl max-w-[23rem] p-4 mb-4 bg-[#5E17F4] text-white'>
      <span class='uppercase text-xs text-[#D2BDFF]'>Bước 2 xác nhận</span>
      <div class='flex flex-row items-center space-x-3'>
          <svg width='58' height='56' viewBox='0 0 52 50' fill='none' xmlns='http://www.w3.org/2000/svg'>
          <path d='M32.6458 38.4379C33.9918 37.1198 33.2655 34.0922 31.0668 30.5948C31.8658 30.4707 32.6129 30.281 33.178 29.9905C35.2112 28.9466 36.584 27.044 37.6232 25.0759C38.7403 22.9647 39.49 20.644 40.9477 18.7215C41.1939 18.3966 41.44 18.1052 41.6853 17.831C44.8304 18.206 47.3412 18.8784 47.3412 18.8784L48.3006 16.4534C47.0896 16.0212 45.848 15.6791 44.586 15.4302C45.3591 14.9931 45.8635 14.8569 45.8635 14.8569L44.9543 12.4121C43.4966 13.025 42.3136 13.9293 41.323 15.0121C37.6206 14.806 33.8921 15.5397 30.9506 17.8086C28.7389 19.5155 27.2447 21.8819 25.839 24.2491C24.5935 23.0333 23.2671 21.9023 21.8688 20.8638C22.134 20.4302 22.4182 20.0405 22.7242 19.7397C24.5728 17.9293 27.0116 16.7716 28.6115 14.7C31.9742 10.35 29.5146 3.53103 26.7481 0C26.2524 0.475 25.4325 1.16724 24.8155 1.71379C27.7561 4.70948 29.8127 9.95431 27.5082 13.8733C26.2203 16.0638 23.8404 17.4379 22.1764 19.3198C21.8887 19.6466 21.6313 20.0603 21.3982 20.5172C17.0466 17.4129 13.053 16.1638 11.4704 17.7138C11.3133 17.8737 11.1838 18.0584 11.0874 18.2603L11.0813 18.2543L11.0388 18.3776C10.9799 18.5112 10.9261 18.65 10.8897 18.8017L0 50L31.774 38.95L31.7653 38.9414C32.1068 38.8319 32.4075 38.6707 32.6458 38.4379ZM6.32065 45.9759L3.66863 44.7465L5.45831 39.6172L13.6666 43.4207L6.32065 45.9759ZM21.0116 40.8664L7.24972 34.4879L9.0394 29.3595L19.3233 34.494C13.1847 30.5198 10.8291 24.2293 10.8291 24.2293L11.441 22.4767C12.5286 25.2138 14.9215 28.6224 18.2097 31.8397C21.5256 35.0862 25.0399 37.4379 27.8488 38.4888L21.0116 40.8664ZM26.2975 24.7112C27.7344 22.6621 29.2156 20.594 31.2748 19.1224C33.2352 17.7207 36.4176 17.4647 39.4345 17.6328C38.4153 19.4034 37.6622 21.3681 36.9861 23.2552C36.1689 25.5397 35.0734 27.9086 32.9847 29.3095C32.4214 29.6871 31.6318 29.9629 30.7886 30.1672C29.6298 28.4009 28.1097 26.5336 26.2975 24.7112Z' fill='white' />
          <path d='M18.2287 16.3793C19.0971 16.3793 16.4937 13.7931 16.9287 11.525C18.5962 11.3974 22.4078 12.1448 20.1892 9.11379C22.699 9.55345 23.9991 7.68966 21.6296 5.92328C22.4182 5.97845 23.6437 4.49914 22.764 4.31207C19.9456 3.7181 18.8423 5.23448 20.6312 7.42155C18.7505 7.07328 17.2173 7.9431 18.63 9.89655C13.1994 9.22328 16.2891 16.3793 18.2287 16.3793ZM36.8726 14.081C37.6864 13.7155 36.3058 11.3009 35.8569 10.6836C39.2915 10.3181 39.1615 9.3 37.0078 7.11897C42.8631 7.31466 37.1889 4.00431 37.9846 2.69397C38.6736 1.55776 40.7874 2.74914 40.5915 2.11638C39.9311 0 33.6668 1.43103 37.631 5.38276C34.1712 5.45 33.8393 6.575 36.4176 8.9069C31.9265 8.95603 35.5908 14.6552 36.8726 14.081ZM51.7378 22.6078C50.3667 22.9897 50.1553 22.8466 50.3381 24.2043C47.1713 22.7543 43.8207 20.7379 45.854 26.0802C42.2573 23.95 42.4367 25.8155 41.7641 28.8853C40.8888 28.2069 39.6451 26.419 39.6451 26.419L38.3278 27.5319C38.3278 27.5319 40.7414 30.9181 41.9331 30.7259C42.9809 30.5578 43.5512 28.5879 43.6093 26.8517C46.946 28.2526 48.5432 28.4397 47.017 24.3431C49.6846 25.8336 52.9555 27.1483 51.7378 22.6078ZM3.50916 7.27328L5.96011 9.71207L3.50916 12.15L1.05734 9.71207L3.50916 7.27328ZM24.1005 26.5181L21.6478 28.956L19.1959 26.5164L21.6486 24.0776L24.1005 26.5181ZM13.1908 3.44828L15.6417 5.88621L13.1899 8.32586L10.7389 5.88621L13.1908 3.44828ZM39.8765 37.4862L37.4238 35.0474L39.8748 32.6078L42.3275 35.0466L39.8765 37.4862ZM34.4113 45.85L31.9603 43.4121L34.4113 40.9733L36.8631 43.4121L34.4113 45.85ZM45.1649 47.7759L42.7123 45.3371L45.1623 42.8974L47.615 45.3362L45.1649 47.7759ZM47.6159 36.669L45.1649 34.2302L47.6159 31.7922L50.0668 34.2302L47.6159 36.669ZM43.5243 6.03448L45.9753 8.47241L43.5235 10.9112L41.0725 8.47241L43.5243 6.03448Z' fill='white' />
          </svg>
          <span class='text-base font-medium'>
  <div v-if="status = 1 ">
    {{ message }}
  </div>
  <div v-if="status = 0 " >
    {{ message }}
    
  </div>
           
          
          </span>
      </div>
      <div class='flex justify-between items-center'>
        
          <span>t.me/hustmediabot</span>
          <a  target="_blank" href="https://t.me/hustmediabot">
          <button @click="tele2" class='flex items-center justify-center text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
          <span >Mở Telegram</span>
          <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
              <path d='M5 12h13M12 5l7 7-7 7' />
          </svg>
          </button> </a>
     
       
      </div>
      <div v-if="opentele" >
      <button @click="tele" class='flex items-center justify-center text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
        <span >Bước cuối ấn xác nhận</span>
        <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
            <path d='M5 12h13M12 5l7 7-7 7' />
        </svg>
        </button></div>
  </div>
  </div></div></div>

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
                phonechuan: null ,
                nhamang: null,
                selected: null ,
                ketqua: null  ,
                money: null ,
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
                this.onWindowLoad();
                $('.selectpicker').selectpicker('refresh');
                window.addEventListener("load", this.onWindowLoad());
                setTimeout(() => {    
                    console.log(this.getCookie('urlsdt'));
                    $('.selectpicker').selectpicker('refresh');
                    setTimeout(() => {     
         $('.selectpicker').selectpicker('toggle');  }, 300)
                }, 300) ;
            },
        methods : {
            onWindowLoad() {
             
             
  
        },
   
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
            onSubmit(e){

             
        // var selectedItem = $('.selectpicker').val();
      this.nhamang = this.selected ;
      console.log(this.nhamang) ,
              this.chedo = 'phone2' ,
              // this.intervalFetchData(); 
                e.preventDefault()
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
      user2: this.name2 ,
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
          chan() {
              this.chedo  = 'chan' ,
              axios
         .post('./checkmomo', {
          apikey: this.ok2 ,
      chedo: this.chedo 
    })
    .then(response => (this.testFunction3(response  )))
    .catch(error => console.log(error) 
  
        // this.age = info
  
        ) 
          } ,
          le() {
              this.chedo  = 'chan' ,
              axios
         .post('./checkmomo', {
          apikey: this.ok2 ,
      chedo: this.chedo 
    })
    .then(response => (this.testFunction3(response  )))
    .catch(error => console.log(error) 
        )
  
          }
        }
    }
    
  </script>