<template>
    <br>
    <form @submit="onSubmit" class="add-form">

    <div class="form-control">
      <label>Số xu nạp  </label>
      <br>
      <input
      class="border-2 border-rose-600 form-control form-control-alternative " 
        type="moneynap"
        v-model="moneynap"
        name="moneynap"
        placeholder="Nhập số tiền"
      />
    </div>
  <br>
    <button type='submit'
        class='flex break-inside bg-black rounded-3xl px-8 py-3 mb-3 w-full dark:bg-slate-800 dark:text-white'>
        <div class='flex items-center justify-between flex-1'>
          <div v-if="nutxuly == '1'" class="spinner-border" role="status">
                 
          </div>
          <span class='text-lg font-medium text-white'>
            {{ nutorder }}
          
          </span>
          <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <path fillRule='evenodd' clipRule='evenodd'
              d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
              fill='white' />
          </svg>
        </div>
      </button>
      <br>
      <div class="text-center">
        <p>Chú ý!<br>
            1. Nếu click vào Xác nhận không hoạt động vui lòng tắt trình chặn quảng cáo ,chặn popup
        <br>
            2. Nạp trong vòng 15' sau khi tạo yêu cầu nạp nhé! tự động trong 5 giây
            <br> 
            3.Với crypto Chuyển chính xác số tiền và địa chỉ trên hóa đơn! App không hỗ trợ các trường hợp chuyển sai thông tin!
        
          
          </p>
      </div>
  
    <!-- {{ ok2 }} -->
    <!-- <div v-if="thanhcong">  
      <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="flex flex-col items-center justify-center py-2">
          <div class="absolute inset-0 bg-gradient-to-r from-indigo-200 to-purple-600 shadow-lg transform rotate-6 rounded-3xl">
  
          </div>
          <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
           <h2 class="text-3xl text-break font-bold">
            kết quả {{ info }}.</h2></div></div></div>
      </div> -->
      <!-- <div v-if="info" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <p class="font-normal text-gray-700 dark:text-gray-400">  kết quả {{ info }}.</p>
    </div> -->
  </form>

  </template>
  
  <script>

  import Swal from 'sweetalert2' ;
  
  

    export default {
        name : 'AddInformation',
        // props: ['foo'],
        data (){
            return {
              ok2 : this.$cookies.get("apikey") ,
                moneynap : '',
                info : ''  ,
                nutorder: 'xác nhận' ,
                nutxuly: null ,
            }
        },
        methods : {
            onSubmit(e){
              this.nutxuly = 1 ;
              this.nutorder = 'chờ xíu nhé' ;
                e.preventDefault()
                if(!this.moneynap){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
                else
                {
                  axios
         .post('https://hust.media/payeer.php', {
          key: this.ok2 ,
      money: this.moneynap
    })
    .then(response => (this.dathang(response ) ,this.info = response.data ))
    .catch(error => console.log(error) ,
  
        // this.age = info
        
        this.loi = this.info.error     ,
        console.log( this.info )
        )
                }
        
              
                             
            },
            dathang(response){
this.nutorder = 'xác nhận' ,
this.nutxuly = 0 ,
            this.info1 = response.data ,
      this.status = this.info1.status     ,
        this.message = this.info1.message  ;
let chuyenhuong = this.info1.chuyenhuong ;
   Swal.fire(this.message ) ;
   if ( this.status == 1 )
   {
    setTimeout(function(){ location.href = chuyenhuong },500); 
   }
          } ,
        }
    }
  </script>
  