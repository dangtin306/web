<template>
    <div class="row fixrow">

        <!-- <div class="col-xl-4">
          <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#napbank">
            NẠP QUA NGÂN HÀNG cập nhật sau 1 đến 4 tiếng
          </button>
        </div> --> 
        <!-- Button trigger modal -->
        <div class="text-center">
        <router-link type="button" class="mx-2  btn btn-primary" to="/okluon">Hướng dẫn</router-link>
<button type="button" class="mx-2  btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Khuyễn Mãi Nạp
</button>
        
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Khuyễn Mãi Nạp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Nạp trên 1000 đồng khuyến mãi 0.5 % tổng tiền nạp
        <br>
        trên 5000 đồng khuyến mãi 0.7 % tổng tiền nạp
        <br>
         trên 7000 đồng khuyến mãi 1 % tổng tiền nạp
        <br>
         trên 10000 đồng + 1.2 % 
        <br>
         trên 15000 đồng + 1.4 % <br>
         trên 20000 đồng + 1.5 % <br>
         trên 30000 đồng + 1.6 % <br>
         trên 40000 đồng + 1.8 % <br>
         trên 50000 đồng + 2 % <br>
         trên 70000 đồng + 2.3 % <br>
         trên 100 nghìn đồng + 2.7 % <br>
         trên 200 nghìn đồng + 3 % <br>
         trên 300 nghìn đồng + 3.3 % <br>
         trên 500 nghìn đồng + 4 % <br>
         trên 700 nghìn đồng + 5 % <br>
         trên 1 trịu đồng + 6 % =)) <br>
         trên 1,5 trịu đồng + 8 % =)) <br>
         Nạp trên 2 trịu đồng + 10 % tổng tiền nạp
         <br>
         Khuyến mãi chỉ áp dụng cho nạp qua ngân hàng , ví momo và tin nhắn sms 
         <br>
         Nếu phụ huynh hỏi sao điện thoại bố bay tiền thì bảo con đăng ký 4g chứ đừng nói là mua follow nha =))
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

       
        <div class="col-xl-4 mt-0">
        <div class="d-grid gap-1" style="grid-template-columns:1fr 1fr" >
      
         
         
          <a  href="https://hust.media/vietcomauto/" >
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
                      Nạp qua ngân hàng ấn đây nhé</p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                      Tối thiểu 100xu → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>
            </div>
            
          </a>
       
            <a  href="https://hust.media/vietcomauto4.php" >
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
                      Nạp qua MB Bank ấn đây nhé</p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                      Tối thiểu 100xu → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>
            </div>
            
          </a>
         
        
        </div>
        </div>
     
       <div class="col-xl-4   ">
        <router-link  to="/sms">
        <div class="max-w-7xl mx-4 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
              <img src="https://tuongtac.fun/img/icon/giphy (7).gif"
          class="h-12 w-12"> 
           
              <div class="space-y-2">
                <p class="text-lg text-slate-1000">Nạp qua sms </p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                  Tối thiểu 5k → </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
            
            </div>
         
          </div>
        </div>
        
   </router-link>
      </div>
      <div class="col-xl-4 mt-0">
        <div class="d-grid gap-1" style="grid-template-columns:1fr 1fr" >
      
         
          <router-link type="button" to="/momo">
      
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
                      Nạp qua MoMo 1 </p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                      Tối thiểu 100 xu → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>
            </div>
            
    
        </router-link>
          <a  href="https://hust.media/momoauto/" >
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
                      Nạp qua MoMo 2 </p>
                    <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                      Tối thiểu 6k xu → </div>
    
                      <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                  </div>
                
                </div>
             
              </div>
            </div>
            
          </a>
         
        
        </div>
        </div>

    
      
      <div class="col-xl-4   ">
        <a  href="https://hust.media/doithe.php"  >
        <div class="max-w-7xl mx-4 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
              <img  src="data:image/png;base64,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"
          class="h-12 w-12"> 
           
              <div class="space-y-2">
                <p class="text-lg text-slate-1000">Nạp bằng thẻ cào ấn đây nhé </p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                  Tối thiểu 10k → </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
            
            </div>
         
          </div>
        </div>
        
      </a>
      </div>

      <div class="col-xl-4   ">
        <a  href="https://t.me/freefltiktok/24"  >
        <div class="max-w-7xl mx-4 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
              <img  src="https://tuongtac.fun/img/icon/YouTube_full-color_icon_(2017).svg.webp"
          class="h-12 w-12"> 
           
              <div class="space-y-2">
                <p class="text-lg text-slate-1000">Nạp qua đăng clip </p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                  Miễn phí </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
            
            </div>
         
          </div>
        </div>
        
      </a>
      </div>

      <div class="col-xl-4   ">
        <a  href="https://t.me/freefltiktok/17"  >
        <div class="max-w-7xl mx-4 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
              <img  src="https://tuongtac.fun/img/icon/zalo.png"
          class="h-12 w-12"> 
           
              <div class="space-y-2">
                <p class="text-lg text-slate-1000">Nạp qua rải link zalo </p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                  Miễn phí </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
            
            </div>
         
          </div>
        </div>
        
      </a>
      </div>
      <div class="col-xl-4   ">
        <a   href="https://hust.media/followtiktok.php" >
        <div class="max-w-7xl mx-4 py-2 mb-2">
          <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r 
            from-purple-600 to-pink-600 rounded-lg blur opacity-25 
            group-hover:opacity-100 transition duration-1000 
            group-hover:duration-200"></div>
            <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
           rounded-2xl leading-none flex items-top justify-start space-x-3">
           
           <img src="https://tuongtac.fun/img/icon/tiktok.gif"
          class="h-12 w-12"> 
           
              <div class="space-y-2">
                <p class="text-lg text-slate-1000">Nạp qua chéo tiktok </p>
                <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                  Miễn phí </div>

                  <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </div>
            
            </div>
         
          </div>
        </div>
        
      </a>
      </div>
      <div class="col-xl-4   ">
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
            <br>    - Hệ thống nạp tự động, ghi đúng nội dung CK sẽ nhận xu sau 1-3p.
            <br>       - Tỉ lệ chuyển đổi 1đ = 1xu.
            <br>      - Chuyển sai sẽ bị mất khuyến mãi theo mức donate.
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
</template>
<style>
  
  .cananh {
   display: revert !important; 
}
.fixrow {
      --bs-gutter-x: 0rem !important;
}
</style>