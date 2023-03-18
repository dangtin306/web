<template>
   <div class="max-w-2xl px-1 py-4  mx-auto rounded-lg shadow-xl">
    <div v-if="info == null" class="container-fluid">
      <div class="row" style="background-color: #FFB6C1;">
         <p class="text-center" style="color: #fff;">
          
          <div  class="text-center spinner-border" role="status">
               
          </div>
          <br>
          Đang tải danh sách
         </p>
      </div>
  </div>
    <div v-if="info != null" class="row fixrow">

        <!-- <div class="mt-0">
          <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#napbank">
            NẠP QUA NGÂN HÀNG cập nhật sau 1 đến 4 tiếng
          </button>
        </div> --> 
        <!-- Button trigger modal -->
        <div class="text-center">
        <router-link type="button" class="mx-2  btn btn-primary" to="/exchangepoints">Chuyển điểm sang xu</router-link>
        <div v-if="sodiem" >
Số điểm hiện tại là {{  sodiem  }}
        </div>
</div>
<!-- Modal -->

       
        <div class="mt-0">
        <div class="d-grid gap-1" style="grid-template-columns:1fr 1fr" >
      
         
         
          <router-link type="button" to="/themcauhinh">
            <div class="max-w-7xl mx-2 py-2 mb-2">
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
                     Thêm tài khoản chéo Facebook</p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                    Đầu tiên bạn vô đây nhé → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>
            </div>
            
       </router-link>
       
          <router-link type="button" to="/cauhinh/1">
            <div class="max-w-7xl mx-2 py-2 mb-2">
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
                     Chọn Tài khoản làm nhiệm vụ</p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                      Để chọn tài khoản bạn dùng để Follow → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>
            </div>
            
        </router-link>
         
        
        </div>
        </div>
       

      <div class="mt-0 mt-0">
        <div class="d-grid gap-1" style="grid-template-columns:1fr 1fr" >
      
         
          <router-link type="button" to="/kiemtien">
      
            <div class="max-w-7xl mx-2 py-2 mb-2">
              <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r 
                from-purple-600 to-pink-600 rounded-lg blur opacity-25 
                group-hover:opacity-100 transition duration-1000 
                group-hover:duration-200"></div>
                <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
               rounded-2xl leading-none flex items-top justify-start space-x-3">
               
               
               
                  <div class="space-y-2">
                    
                    <p class="text-lg text-slate-1000">
                      <img src="https://hust.media/img/icon/followfb.svg"
                      class="h-7 w-7 cananh">  
                      Follow Chéo nhận điểm </p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                      Active → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>
            </div>
            
    
        </router-link>
          
            <div  class="max-w-7xl mx-2 py-2 mb-2">
              <!-- <router-link type="button" :disabled="true" to="/kiemtien"> -->
      
              <div class="relative group">
                <div class="absolute -inset-1 bg-gradient-to-r 
                from-purple-600 to-pink-600 rounded-lg blur opacity-25 
                group-hover:opacity-100 transition duration-1000 
                group-hover:duration-200"></div>
                <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
               rounded-2xl leading-none flex items-top justify-start space-x-3">
               
               
               
                  <div class="space-y-2">
                    
                    <p class="text-lg text-slate-1000">
                       <img src="https://hust.media/img/icon/groupsfb.png"
                      class="h-7 w-7 cananh">  
                    Tham gia nhóm nhận điểm  </p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                      Sắp có → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>    
               <!-- </router-link> -->
            </div>
            
   
         
        
        </div>
        </div>

    
      
  
   

   

    
    
      <div class="mt-0   ">
        <div class="max-w-7xl mx-4 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
         
           
              <div class="space-y-2">
                <p class="text-lg text-slate-1000">
                  <img src="https://tuongtac.fun/img/icon/ava.png"
                  class="h-12 w-14 cananh">
                  iu bạn nhiều lém cảm ơn đã tin tưởng nhé
            <br>    - Hệ thống nhận tiền tự động, 1 tiếng làm jop chăm có thể kiếm được 10k xu .
            <br>       - Tỉ lệ chuyển đổi 1xu = 1vnd.
            <br>      - Nếu thao tác sai ko nhận được xu vui lòng liên hệ với app trong 24h cùng ngày . </p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                 Quy định </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
         
            </div>
          </div>
        </div>
        
      </div>
    </div>
         </div>
         <br><br><br><br>
</template>
<style>
  
  .cananh {
   display: revert !important; 
}
.fixrow {
      --bs-gutter-x: 0rem !important;
}
</style>
<script>
import Swal from 'sweetalert2' ;
  export default {
      // props: ['foo'],
      data (){
          return {
            ok2 : this.$cookies.get("apikey") ,
              name : '',
              sodiem: null ,
              amount : '',
              disableButton: false,
              nutorder: 'Chuyển điểm ngay' ,
              nutxuly: null ,
              info : null
          }
      },
      created()
      {
        if(!this.ok2){
                  alert('Vui lòng đăng nhập')
              }
              else
              {
                this.checktk() ;
              }
      
      },
      methods : {
        asdasdkas(info)
        {
if ( info.status == 3 )
{
  this.thongbaosuccess('Vui lòng thêm tài khoản chéo Facebook') ;
  this.$router.push('/themcauhinh') ;
}
else if ( info.status == 1 )
{
  this.thongbaosuccess(info.message) ;
  this.sodiem = info.sodiem ;
}
else if ( info.status == 4 )
{
  this.thongbaoerror(info.message) ;
  this.$router.push('/naptien') ;
}
        },
        checktk()
        {
          axios
       .post('https://tecom.pro/ttc/profile.php', {
        key: this.ok2 ,
    chedo: 'kiemtradangnhap'
  })
  .then(response => (  this.info = response.data
  , console.log(this.info) ,
  this.asdasdkas(this.info )
 ))
  .catch(error => console.log(error) 
      )
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
      }
  }
</script>
