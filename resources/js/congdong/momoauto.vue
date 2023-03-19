<template>
    <div class="container-fluid mt-7">
        <div class="row">
            <div class="col-xl-7 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                  <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div v-if="info == null" class="container-fluid">
                            <div class="row" style="background-color: #FFB6C1;">
                               <p class="text-center" style="color: #fff;">
                                
                                <div  class="text-center spinner-border" role="status">
                                     
                                </div>
                                <br>
                                Đang tải dữ liệu
                               </p>
                            </div>
                        </div>
                      <div v-else class="col">
                        <h3 class="text-lg text-muted font-medium mb-0">Thông Tin ví MOMO</h3>
                        <ul class="pl-4 mt-4 space-y-3">
                          <li class="flex items-center">
                            <span class="mr-2 text-pink-500 font-medium">Số Điện Thoại:</span>
                            <input type="text" class="form-control border-pink-600" v-bind:value="site_sdt_momo" id="input1" readonly>
                            <button @click="copyText(1)" class="ml-2 group rounded-2xl h-15 w-48 bg-pink-300 font-bold text-lg text-white relative overflow-hidden">
                                Sao chép
                                <div class="absolute duration-300 inset-0 w-full h-full transition-all scale-0 group-hover:scale-100 group-hover:bg-white/30 rounded-2xl">
                                </div>
                            </button>  
                          </li>
                          <li class="flex items-center">
                            <span class="mr-2 text-pink-500 font-medium">Chủ Tài Khoản:</span>
                            <span><b> {{ site_ten_momo }}</b></span>
                          </li>
                          <li class="flex items-center">
                            <span class="mr-2 text-pink-500 font-medium">Nội dung chuyển tiền</span>
                            <input type="text" class="form-control border-pink-300" v-bind:value="magiaodich" id="input2" readonly>
                           
                            <button @click="copyText(2)" class="ml-2 group rounded-2xl h-15 w-48 bg-pink-300 font-bold text-lg text-white relative overflow-hidden">
                                Sao chép
                                <div class="absolute duration-300 inset-0 w-full h-full transition-all scale-0 group-hover:scale-100 group-hover:bg-white/30 rounded-2xl">
                                </div>
                            </button>  
                        </li>
                        </ul>
                        <h3 class="text-lg text-muted font-medium mt-8">HƯỚNG DẪN NẠP TIỀN</h3>
                        <ol class="list-decimal list-inside pl-4">
                          <li class="mb-2">Bước 1 : Chuyển tiền với nội dung như trên</li>
                          <li class="mb-2">Bước 2 : Đợi vài giây để tự động nạp tiền</li>
                          <li class="text-sm font-normal">Mã nạp tiền chỉ có hạn trong 1 lần, nạp thành công muốn nạp tiếp thì quay lại đây lấy mã nhé</li>
                          <li class="flex items-center mt-2">
                            <span class="mr-3 text-pink-500 font-medium">Trạng thái:</span>
                        
                              <button class="group rounded-2xl h-12 w-55 bg-pink-300 font-bold text-lg text-white relative overflow-hidden">
                                <span class="spinner-border spinner-border-sm"></span>
                                Vô app momo chuyển cho tớ là xu lên liền nhé =D
                                <div class="absolute duration-300 inset-0 w-full h-full transition-all scale-0 group-hover:scale-100 group-hover:bg-white/30 rounded-2xl">
                                </div>
                            </button>                            
                          </li>
                        </ol>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              
              <div class="col-xl-5">
                <div class="card card-profile shadow rounded-lg border-0">
                  <div class="card-body py-0 py-md-4">
                    <h5 class="bold mb-0 text-pink-500">Nạp bằng QR Code</h5>
                    <div class="d-flex justify-content-center mt-4">
                        <div  v-if="info == null"  class="text-center spinner-border" role="status">
                                     
                        </div>
                        <img v-else :src="'data:image/png;base64,' + qrcode" alt="QR Code">
                    </div>
                  </div>
                </div>
              </div>
              
        </div>
      </div>
      <br><br><br>   <br><br>
</template>

<script>
  import Swal from 'sweetalert2' ;
  
export default {
    data (){
          return {
            ok2 : this.$cookies.get("apikey") ,
              name : '',
              site_sdt_momo: null ,
              site_ten_momo : null ,
              magiaodich: null,
              info : null ,
              qrcode : null 
          }
      },
    created()
      {
        this.laymamomo() ;
      },
  methods: {
    asdasdkas(info)
        {
 if ( info.status == 1 )
{
  this.thongbaosuccess(info.message) ;
  this.site_sdt_momo = info.site_sdt_momo ;
  this.site_ten_momo = info.site_ten_momo ;
  this.magiaodich = info.magiaodich ;
  this.qrcode = info.qrcode ;
}
else if ( info.status == 0 )
{
  this.thongbaoerror(info.message) ;
  setTimeout(function() {
  window.location.href = "https://hust.media";
}, 1500); // 1.5 giây = 1500 miliseconds

}
        },
    laymamomo()
    {
        axios
       .post('https://tecom.pro/momoautoapi.php', {
        key: this.ok2  ,
        chedo: 'laymamomo'
  })
  .then(response => (  this.info = response.data
  , console.log(this.info) ,
  this.asdasdkas(this.info )
 ))
  .catch(error => console.log(error) 
      )
    },
    copyText(inputNum) {
         const inputId = `input${inputNum}`;
    const inputValue = document.getElementById(inputId).value;
    navigator.clipboard.writeText(inputValue);
    const asbdabjkmd = "Đã sao chép: " + inputValue ;
    this.thongbaosuccess(asbdabjkmd) ;
    NativeAndroid.copyToClipboard(inputValue);
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
      }
  },

};
</script>