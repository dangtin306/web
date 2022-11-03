<template>
  <!-- This is an example component -->


số xu hiện tại lại là {{money }}
số điện thoại hiện tại là {{ phonechuan }}
  <div class="fixrow row">
    

<div v-if="checktele == 'YES' || checktele == 'chedo' || status2 == 1 ||  status3 == 0 "  >
<div class="">
    <div  class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <p class="font-normal text-gray-700 dark:text-gray-400">  Chọn chế độ nạp.
       <br>
            - Chẵn lẻ là một game tính kết quả bằng 1 số cuối mã giao dịch.
            <br>
            -Cách chơi vô cùng đơn giản :

        </p>
    </div>

    <div v-if="checktele != 'YES' && status3 != 1  " class="d-grid gap-1" style="grid-template-columns:1fr 1fr" >
  
     
  
        <div @click="chan" class="max-w-7xl mx-2 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
           
           
              <div class="space-y-2">
                
                <p class="text-lg text-slate-1000">
                  <img src="data:image/png;base64,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"
                  class="h-7 w-7 cananh">  
                 Chẵn </p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                  Số cuối là 2 - 4 - 6 - 8 x 2.35 tiền nhận xu → </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
            
            </div>
         
          </div>
        </div>
        


        <div @click="le" class="max-w-7xl mx-2 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
           
           
              <div class="space-y-2">
                
                <p class="text-lg text-slate-1000">
                  <img src="https://inkythuatso.com/uploads/images/2021/11/mb-bank-logo-inkythuatso-01-10-09-01-10.jpg"
                  class="h-7 w-7 cananh">  
                  Lẻ</p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                    Số cuối là 1 - 3 - 5 - 7 x 2.35 tiền nhận xu → </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
            
            </div>
         
          </div>
        </div>
        

     
    
    </div>
    <div v-if="  status3 == 1  || checktele == 'YES'  ">
      <div class="col-xl-4 mt-0">
      <div class='flex items-center py-7 flex-col mx-2 '>
      <div class='break-inside relative overflow-hidden flex flex-col justify-between space-y-2 text-sm rounded-xl max-w-[23rem] p-4 mb-4 bg-[#5E17F4] text-white'>
        <span class='uppercase text-xs text-[#D2BDFF]'>Bước cuối</span>
        <div class='flex flex-row items-center space-x-3'>
            <svg width='58' height='56' viewBox='0 0 52 50' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <path d='M32.6458 38.4379C33.9918 37.1198 33.2655 34.0922 31.0668 30.5948C31.8658 30.4707 32.6129 30.281 33.178 29.9905C35.2112 28.9466 36.584 27.044 37.6232 25.0759C38.7403 22.9647 39.49 20.644 40.9477 18.7215C41.1939 18.3966 41.44 18.1052 41.6853 17.831C44.8304 18.206 47.3412 18.8784 47.3412 18.8784L48.3006 16.4534C47.0896 16.0212 45.848 15.6791 44.586 15.4302C45.3591 14.9931 45.8635 14.8569 45.8635 14.8569L44.9543 12.4121C43.4966 13.025 42.3136 13.9293 41.323 15.0121C37.6206 14.806 33.8921 15.5397 30.9506 17.8086C28.7389 19.5155 27.2447 21.8819 25.839 24.2491C24.5935 23.0333 23.2671 21.9023 21.8688 20.8638C22.134 20.4302 22.4182 20.0405 22.7242 19.7397C24.5728 17.9293 27.0116 16.7716 28.6115 14.7C31.9742 10.35 29.5146 3.53103 26.7481 0C26.2524 0.475 25.4325 1.16724 24.8155 1.71379C27.7561 4.70948 29.8127 9.95431 27.5082 13.8733C26.2203 16.0638 23.8404 17.4379 22.1764 19.3198C21.8887 19.6466 21.6313 20.0603 21.3982 20.5172C17.0466 17.4129 13.053 16.1638 11.4704 17.7138C11.3133 17.8737 11.1838 18.0584 11.0874 18.2603L11.0813 18.2543L11.0388 18.3776C10.9799 18.5112 10.9261 18.65 10.8897 18.8017L0 50L31.774 38.95L31.7653 38.9414C32.1068 38.8319 32.4075 38.6707 32.6458 38.4379ZM6.32065 45.9759L3.66863 44.7465L5.45831 39.6172L13.6666 43.4207L6.32065 45.9759ZM21.0116 40.8664L7.24972 34.4879L9.0394 29.3595L19.3233 34.494C13.1847 30.5198 10.8291 24.2293 10.8291 24.2293L11.441 22.4767C12.5286 25.2138 14.9215 28.6224 18.2097 31.8397C21.5256 35.0862 25.0399 37.4379 27.8488 38.4888L21.0116 40.8664ZM26.2975 24.7112C27.7344 22.6621 29.2156 20.594 31.2748 19.1224C33.2352 17.7207 36.4176 17.4647 39.4345 17.6328C38.4153 19.4034 37.6622 21.3681 36.9861 23.2552C36.1689 25.5397 35.0734 27.9086 32.9847 29.3095C32.4214 29.6871 31.6318 29.9629 30.7886 30.1672C29.6298 28.4009 28.1097 26.5336 26.2975 24.7112Z' fill='white' />
            <path d='M18.2287 16.3793C19.0971 16.3793 16.4937 13.7931 16.9287 11.525C18.5962 11.3974 22.4078 12.1448 20.1892 9.11379C22.699 9.55345 23.9991 7.68966 21.6296 5.92328C22.4182 5.97845 23.6437 4.49914 22.764 4.31207C19.9456 3.7181 18.8423 5.23448 20.6312 7.42155C18.7505 7.07328 17.2173 7.9431 18.63 9.89655C13.1994 9.22328 16.2891 16.3793 18.2287 16.3793ZM36.8726 14.081C37.6864 13.7155 36.3058 11.3009 35.8569 10.6836C39.2915 10.3181 39.1615 9.3 37.0078 7.11897C42.8631 7.31466 37.1889 4.00431 37.9846 2.69397C38.6736 1.55776 40.7874 2.74914 40.5915 2.11638C39.9311 0 33.6668 1.43103 37.631 5.38276C34.1712 5.45 33.8393 6.575 36.4176 8.9069C31.9265 8.95603 35.5908 14.6552 36.8726 14.081ZM51.7378 22.6078C50.3667 22.9897 50.1553 22.8466 50.3381 24.2043C47.1713 22.7543 43.8207 20.7379 45.854 26.0802C42.2573 23.95 42.4367 25.8155 41.7641 28.8853C40.8888 28.2069 39.6451 26.419 39.6451 26.419L38.3278 27.5319C38.3278 27.5319 40.7414 30.9181 41.9331 30.7259C42.9809 30.5578 43.5512 28.5879 43.6093 26.8517C46.946 28.2526 48.5432 28.4397 47.017 24.3431C49.6846 25.8336 52.9555 27.1483 51.7378 22.6078ZM3.50916 7.27328L5.96011 9.71207L3.50916 12.15L1.05734 9.71207L3.50916 7.27328ZM24.1005 26.5181L21.6478 28.956L19.1959 26.5164L21.6486 24.0776L24.1005 26.5181ZM13.1908 3.44828L15.6417 5.88621L13.1899 8.32586L10.7389 5.88621L13.1908 3.44828ZM39.8765 37.4862L37.4238 35.0474L39.8748 32.6078L42.3275 35.0466L39.8765 37.4862ZM34.4113 45.85L31.9603 43.4121L34.4113 40.9733L36.8631 43.4121L34.4113 45.85ZM45.1649 47.7759L42.7123 45.3371L45.1623 42.8974L47.615 45.3362L45.1649 47.7759ZM47.6159 36.669L45.1649 34.2302L47.6159 31.7922L50.0668 34.2302L47.6159 36.669ZM43.5243 6.03448L45.9753 8.47241L43.5235 10.9112L41.0725 8.47241L43.5243 6.03448Z' fill='white' />
            </svg>
            <span class='text-base font-medium'>
              Chúc mừng mọi chuyện đã xong vui lòng chuyển vào số điện thoại ở dưới để tự động cộng xu nhé
             
            
            </span>
        </div>
        <div class='flex justify-between items-center'>
          
            <span>0928889798</span>
            <button class='flex items-center justify-center text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
            <span @click="saochep(urlsplit)">Sao chép và chuyển xu</span>
            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                <path d='M5 12h13M12 5l7 7-7 7' />
            </svg>
            </button>
        </div>
    
     
    </div>
    </div></div> </div>
    <button v-if="checktele == 'YES' && doisodt != 1 " type='submit' @click="doiso"
    class='flex break-inside bg-black rounded-3xl px-8 py-2 mb-3 w-full dark:bg-slate-800 dark:text-white'>
    <div class='flex items-center justify-between flex-1'>
      <span class='text-lg font-medium text-white'>Đổi số điện thoại</span>
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
</template>

<script>
  import Swal from 'sweetalert2' ;
  export default {
    data (){
          return {
            ok2 : this.$cookies.get("apikey") ,
            name2 : '',
              urlsplit: '0928889798' ,
              lienket: null ,
              status: null ,
              status2: null ,
              checktele: null ,
              phonechuan: null ,
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
      created() {
        this.setCookie('urlsdt','/momo', 1) ;
        this.chedo = 'checkxu4' ;
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
              this.fetchData();
              this.intervalFetchData() ;


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
      NativeAndroid.copyToClipboard(urlsplit);
  
  },
  testFunction(response)
  {
    this.info1 = response.data ,
    this.status = this.info1.status     ,
      this.message = this.info1.message    
  },
  setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
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
        this.info = response.data ,
    this.status = this.info.status     ,
      this.message = this.info.message     ,
        this.status2 =  this.status  ,
        console.log( this.status2 )
        this.info = response.data ;
      }
  },
  doiso()
  {
    this.$router.push('/themsdt') ;
  },
 
  testFunction4(response)
  {
   
    this.info = response.data ,
    this.phonechuan = this.info.phonechuan ,
    this.money = this.info.money 
    this.status = this.info.status 
    if ( this.status == 0 )
    {
      this.$router.push('/themsdt') 
    }
    else if ( this.status == 2 )
    {
      this.checktele = 'chedo' 
    }
    else if ( this.status == 1 )
    {
      this.checktele = 'YES' 
    }
    console.log(this.checktele) 
 
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
      this.status2 = 3 ;
      console.log( this.message )
      }
    
  },
          onSubmit(e){
            this.chedo = 'phone'
            // this.intervalFetchData(); 
              e.preventDefault()
              if(!this.name2){
                  alert('Please điền đầy đủ thông tin')
                  return
              }

             axios
       .post('./checkmomo', {
        apikey: this.ok2 ,
    user2: this.name2 ,
    chedo: this.chedo 
  })
  .then( response => (
  console.log(response.data ) ,
  this.testFunction(response )
  ))
  .catch(error => console.log(error) ,
      // this.age = info
    
     
     

      ) ;
      
     
          } ,
          onSubmit2(e){
            this.chedo = 'magiaodich'
            // this.intervalFetchData(); 
              e.preventDefault()
              if(!this.magiaodich){
                  alert('Please điền đầy đủ thông tin')
                  return
              }
              axios
       .post('./checkmomo', {
        apikey: this.ok2 ,
    magiaodich: this.magiaodich ,
    chedo: this.chedo 
  })
  .then(response => (  this.testFunction2(response )))
  .catch(error => console.log(error) ,

      // this.age = info

 
      )
                 
          } ,
         
          btcTrkAPICall: function () {
            this.chedo = 'checkxu4' ;
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