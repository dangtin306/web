<template>
 
    <div class="row fixrow">


      <div class="col mt-0">
          <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
        
            <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
               
                <div class='max-w-md mx-auto  space-y-6'>
                  <p v-if="social == 'facebook'" class="text-xs">Điều kiện thêm nick Facebook: <br>
                    - Tên Tiếng Việt, đầy đủ ảnh bìa, đại diện, thông tin <br>
                    - Nick cần đăng ít nhất 5 bài gồm ảnh + bài viết trên tường, ở chế độ CÔNG KHAI <br>
                    - Hoạt động > 7 ngày
                    - Tham gia 1 nhóm <br>
                    - Trên 50 bạn bè hoặc hoạt động như người thật thì ko cần trên 20 bạn bè <br>
                    - Phí thêm tải khoản chéo facebook là 100 xu
                     </p>
                     <p v-if="social == 'tiktok'" class="text-xs">Điều kiện thêm nick TikTok: <br>
                    - Tên Tiếng Việt, đầy đủ ảnh bìa, đại diện, thông tin <br>
                    - Nếu có ảnh đại diện rồi vẫn báo lỗi thì đổi 1 ảnh khác
                     </p>
                     <p v-if="social == 'instagram'" class="text-xs">
                      Điều kiện thêm Nick Instagram: <br>
- Tên Tiếng Việt, đầy đủ ảnh đại diện, thông tin tiểu sử (bio)<br>
- Có ít nhất 1 người theo dõi<br>
                       </p>
                      <div class="col-lg-6">
                              
    <form @submit="onSubmit" class="add-form">
      <div class="form"> 
      <label for="countries2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn nền tảng</label>
      <select  id="countries2" class="
      selectpicker sp1 form-control"   @change="onChange()"   name="nhamang" v-model="social">
      <option v-for="option in options" :value="option.value"
      :data-content=" `<div style='display: flex; align-items: center;'>  ` +  option.text + `&emsp;` + `<img src='` + option.img + `'` + `class=\'asdasd\'>` +`</div>` "  >
        <!-- {{ option.text }} -->
      </option>
        </select>
      </div>  <br>
    <div v-if="social == 'facebook'"  class="form-control">
      <label>Nhập liên kết facebook  </label>
      <br>
      <div class="w-64">
        <input class="w-full border-2 border-rose-600 h-10" type="text"
         v-model="lienket" name="lienket" placeholder="Nhập liên kết hoặc id facebook" />
      </div>
      
    </div>
    <div v-if="social == 'instagram'"  class="form-control">
      <label>Nhập liên kết instagram  </label>
      <br>
      <div class="w-64">
        <input class="w-full border-2 border-rose-600 h-10" type="text"
         v-model="lienket" name="lienket" placeholder="Nhập liên kết hoặc id instagram" />
      </div>
      
    </div>
    <div v-if="social == 'tiktok'"  class="form-control">
      <label>Nhập id tiktok  </label>
      <br>
      <div class="w-64">
        <input class="w-full border-2 border-rose-600 h-10" type="text"
         v-model="lienket" name="lienket" placeholder="Nhập usersname tiktok" />
      </div>
      
    </div>
    <br>
    <button type='submit' :disabled="disableButton"
        class='flex break-inside bg-black rounded-3xl px-8 py-3 mb-3 w-full dark:bg-slate-800 dark:text-white'>
        <div class='flex items-center justify-between flex-1'>
          <div v-if="nutxuly == '1'" class="spinner-border" role="status">
                   
          </div>
          <div style="display: flex; justify-content: center;">
            <span class='text-lg font-medium text-white'>{{ nutorder }}</span>
          </div>
      
          <svg width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
            <path fillRule='evenodd' clipRule='evenodd'
              d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
              fill='white' />
          </svg>
        </div>
      </button>
      <div class="max-h-16">
        <div class="cards">
     
          <Adsense
      data-ad-client="ca-pub-4574266110812955"
       data-ad-slot="8795043992"
       data-full-width-responsive="no"
       ins-class="display: block; height: 50px;"
       ins-style="display: block; height: 50px;"
       data-ad-format="horizontal"
       >
    </Adsense>
    </div>
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

</div></div></div>
</div></div></div>
  <a href="javascript:history.go(-1)">
    <button class="btn btn-primary" > quay lại </button>
  </a>
  
  <router-link  to="/cauhinh/3">
  <button class="btn btn-primary" > DANH SÁCH NICK FACEBOOK</button>
  </router-link>
  <router-link  to="/cauhinhtiktok/3">
  <button class="btn btn-primary" > DANH SÁCH NICK TIKTOK</button>
  </router-link>
  <br>  <br>  <br>
  </template>
  
  <script>
    
  var url = location.href  ;
  var splitter = '/?=key='
  var indexOf = url.indexOf(splitter);
  import Swal from 'sweetalert2' ;
  
  
  console.log(indexOf);
    export default {
        name : 'AddInformation',
        // props: ['foo'],
        data (){
            return {
              ok2 : this.$cookies.get("apikey") ,
                name : '',
                lienket : '',
                disableButton: false,
                nutorder: 'Thêm' ,
                nutxuly: null ,
                info : '' ,
                social: null,
                randomNumber:  Math.floor(Math.random() * 100) + 1,
                options: [
        { text: 'Chọn 1 nền tảng', value: 'vui lòng chọn 1 nền tảng' , img: 'https://static.thenounproject.com/png/2383182-200.png'  } , 
        { text: 'Thêm tài khoản chéo Facebook', value: 'facebook'  , img: 'https://hust.media/img/icon/fbicon.gif' } ,
        { text: 'Thêm tài khoản chéo TikTok', value: 'tiktok' , img: 'https://hust.media/img/icon/tiktok.gif' }  ,
        { text: 'Thêm tài khoản chéo instagram', value: 'instagram' , img: 'https://hust.media/img/icon/giphy%20(5).gif' }  
      ],
            }
        },
        methods : {
          asdasdkas(info)
        {
if ( info.status == 3 ||  info.status == 0 )
{
  this.thongbaoerror(info.message) ;

}
else if ( info.status == 1 )
{
  this.thongbaosuccess(info.message) ;
  this.$router.push('/order') ;
}
else if ( info.status == 7 )
{
  this.thongbaosuccess(info.message) ;
  this.$router.push(`/nativeapp/cauhinh/${this.randomNumber}`);

}
        },
            onSubmit(e){
              this.disableButton = true;
              this.nutorder = 'chờ xíu nhé' ;
              this.nutxuly = 1 ;
                e.preventDefault()
                if(!this.lienket){
                    alert('Please điền đầy đủ thông tin')
                    this.nutorder = 'đặt tiếp luôn nào' ,
  this.disableButton = false ,
  this.nutxuly = 0 
                    return
                }
                else
                {
                if(this.social == 'facebook' || this.social == 'tiktok' )  
                {
const ajdjnansdla = 'https://tecom.pro/ttc/profile.php' ;
axios
         .post(ajdjnansdla, {
          key: this.ok2 ,
      chedo: 'themcauhinh' ,
      lienket : this.lienket ,
      social : this.social ,
    })
    .then(response =>    (
      this.info = response.data
  , console.log(this.info) ,
  this.asdasdkas(this.info )
    ,      this.nutorder = 'đặt tiếp luôn nào' ,
  this.disableButton = false ,
  this.nutxuly = 0      ))
    .catch(error => console.log(error) ,
  
        this.thanhcong = this.info.order     ,
  
        this.loi = this.info.error     ,
        console.log( this.info )
        )
                }
                else if(this.social == 'instagram')  
                {
                  const ajdjnansdla = 'https://tecom.pro/insta/profile.php' ;
                  axios
         .post(ajdjnansdla, {
          key: this.ok2 ,
      chedo: 'themcauhinh' ,
      lienket : this.lienket ,
      social : this.social ,
    })
    .then(response =>    (
      this.info = response.data
  , console.log(this.info) ,
  this.asdasdkas(this.info )
    ,      this.nutorder = 'đặt tiếp luôn nào' ,
  this.disableButton = false ,
  this.nutxuly = 0      ))
    .catch(error => console.log(error) ,
  
        this.thanhcong = this.info.order     ,
  
        this.loi = this.info.error     ,
        console.log( this.info )
        )
                }
                }

            
                             
            } ,
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
        created() {
            
            setTimeout(() => {    
                  $('.selectpicker').selectpicker('refresh');
                  setTimeout(() => {     
       $('.sp1').selectpicker('toggle');  }, 300)
              }, 300) ;
          } ,
    
    }
  </script>
  