<template>

      <div>
        
        <div
        class="
          antialiased
          bg-gradient-to-r
          from-pink-300
          via-purple-300
          to-indigo-400
        "
      >
      <ion-header collapse="condense">
        <ion-toolbar>
          <ion-title size="large">Rút gọn liên kết</ion-title>
        </ion-toolbar>
      </ion-header>
      <div class="mt-3 mx-2">
        <br>
        <form @submit="onSubmit"  class="add-form">
          <div class="form-control">
            <label>Nhập liên kết cần rút gọn</label>
            <br>
            <div class="input-group flex-nowrap">
              <span class="input-group-text" id="addon-wrapping">url</span>
              <input type="text" class="form-control" placeholder="Điền link" aria-label="inputlienket" v-model="inputlienket" name="inputlienket" aria-describedby="addon-wrapping">
            </div>
        
          </div>
       <br>
       <p>
        Bạn thấy liến kết mình quá dài có thể dùng chức năng này để giúp liên kết chia sẻ bạn bè được gọn hơn nhé
       </p>
       <div v-if="comota" class="form-control">
        <label>Nhập mô tả liên kết</label>
        <br>
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon-wrapping">Mô tả</span>
          <input type="text" class="form-control" placeholder="Điền mô tả" aria-label="inputmota" v-model="inputmota" name="inputmota" aria-describedby="addon-wrapping">
        </div>
    
      </div>
     
      <br>
           <button type='submit' @click="onSubmit()"
        class='w-100 flex break-inside bg-black rounded-3xl px-8 py-3 mb-3 w-full dark:bg-slate-800 dark:text-white'>
        <div class='flex items-center justify-between flex-1'>
          <span class='text-lg font-medium text-white'>
        <div v-if="nutxuly == 0 "  ></div>
        
            <div v-if="nutxuly == 1" class="spinner-border" role="status" >

            </div>
            {{ nutorder }}   
        </span>
          <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <path fillRule='evenodd' clipRule='evenodd'
              d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
              fill='white' />
          </svg>
        </div>
      </button>
   
    </form>
    <div v-if="thanhcong2">  
   
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="flex flex-col items-center justify-center py-2">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-200 to-purple-600 shadow-lg transform rotate-6 rounded-3xl">
    
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
             <h2 class="text-3xl text-break font-bold">
              kết quả {{ thanhcong2 }}.</h2></div></div></div>
              <button @click="saocheplienket()" class="bg-pink-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
               Sao chép
              </button> 
  </div>
    </div>
  </div>
  <br> <br> <br> <br> <br> <br>
      </div>

  </template>
  
  <script>

  import axios from 'axios' ;

  import Swal from 'sweetalert2' ;
 
  // import ExploreContainer from '@/components/ExploreContainer.vue';
  
  export default {
    name: 'Tab2Page',

    data (){ return {
                name : '',
                age : '',
                nutorder: 'Ấn đây để rút gọn' ,
                inputlienket: null ,
                apikey: null ,
                lienketoutput: null ,
                thanhcong2: null ,
                inputmota: null ,
                nutxuly: 0 ,
                info : '',
                thanhcong : '' ,
            }
        },
        created(){
            

  
        },
        methods : {
            
            onSubmit(e){
                this.nutxuly = 1 ;
            this.nutorder = 'chờ xíu nhé' ;
                e.preventDefault()
                if(!this.inputlienket){
                    alert('Please điền đầy đủ thông tin')
                    this.nutxuly = 0 ;
                    this.nutorder = 'điền đủ thông tin' 
                    return
                }
                axios
       .post('https://tuongtac.fun/ionic/addlink.php', {
        lienket: this.inputlienket ,
        apikey: this.apikey ,
        mota: this.inputmota ,
        chedo: 'shorturl'
  })
  .then(response => (this.testFunction(response  )))
  .catch(error => console.log(error) )
             
                             
            },
            saocheplienket()
            {
                 Swal.fire({
  title: 'Sao chép thành công' ,
  heightAuto : false,
 
})
             
                navigator.clipboard.writeText(this.lienketoutput);
               
            },
            testFunction(response)
            {
                this.info = response.data ,
                this.status = this.info.status ,
                this.message = this.info.message ,
                this.lienketoutput = this.info.lienket ,
                this.nutorder = 'đặt tiếp luôn nào' ,
this.nutxuly = 0
if ( this.status == 0 )
    {  
      Swal.fire({
  title: this.info.message ,
  heightAuto : false,
 
})

    }
    else if ( this.status == 1 )
    {
        this.thanhcong2 = this.lienketoutput
    }
            },

        }
  };
  </script>
  