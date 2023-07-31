<template>
        <div class="max-h-16 ">
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
         <router-link type="button" class="mx-2  btn btn-primary" to="/nativeapp/exchangepoints">Chuyển điểm sang xu</router-link>
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
                       <img src="https://cdn-icons-png.flaticon.com/512/992/992651.png"
                       class="h-7 w-7 cananh">  
                      Thêm tài khoản chéo instagram</p>
                     <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                     Đầu tiên bạn vô đây nhé → </div>
     
                       <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                   </div>
                 
                 </div>
              
               </div>
             </div>
             
        </router-link>
        
           <router-link type="button" to="/nativeapp/cauhinh/1">
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
                       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPPeznG6LK16yZ70cv9p-KcIITtk6ASnWOUA&usqp=CAU"
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
       
          
           <router-link type="button" to="/nativeapp/kiemtien/subcheo">
       
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
                       <img src="https://hust.media/img/icon/follow2.svg"
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
                 <router-link type="button" to="/nativeapp/kiemtien/timcheo">
               <div class="relative group">
                 <div class="absolute -inset-1 bg-gradient-to-r 
                 from-purple-600 to-pink-600 rounded-lg blur opacity-25 
                 group-hover:opacity-100 transition duration-1000 
                 group-hover:duration-200"></div>
                 <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
                rounded-2xl leading-none flex items-top justify-start space-x-3">
                
                
                
                   <div class="space-y-2">
                     
                     <p class="text-lg text-slate-1000">
                        <img src="https://hust.media/img/icon/timins.png"
                       class="h-7 w-7 cananh">  
                    Thả Tim nhận điểm  </p>
                     <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                       Active → </div>
     
                       <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                   </div>
                 
                 </div>
              
               </div>    
                </router-link>
             </div>
             
    
          
         
         </div>
         </div>
         <div class="mt-0 mt-0">
           <div class="d-grid gap-1" style="grid-template-columns:1fr 1fr" >
         
            
          
       
       <router-link type="button" to="/nativeapp/exchangepoints">
         
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
                  
                  Đổi điểm sang xu </p>
                 <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                   Active → </div>
 
                   <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
               </div>
             
             </div>
          
           </div>
         </div>
         
 </router-link>
            
           
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
                   <img src="https://tecom.pro/img/icon/ava.png"
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
               info : null ,
               
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
   this.thongbaosuccess('Vui lòng thêm tài khoản chéo instagram') ;
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
        .post('https://tecom.pro/insta/profile.php', {
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
   timer: 2000,
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
 