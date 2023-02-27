<template>
  <p>Chuyển xu qua tài khoản khác 
   trong App <br>
    số lượng tối thiểu 1000 xu <br>
    Phí chuyển xu 5%  
    
    </p>
  <form @submit="onSubmit" class="add-form">
  <div class="form-control">
  
    <label>Tên tài khoản Hust Media người nhận</label>
    <br>
    <input class="border-2 border-rose-600 ..." type="text" v-model="name" name="name" placeholder="Nhập tên tài khoản" />
  </div>
  <div class="form-control">
    <label>Số xu gửi  </label>
    <br>
    <input
    class="border-2 border-rose-600" 
      type="text"
      v-model="age"
      name="age"
      placeholder="Nhập số tiền"
    />
  </div>

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
    <br>

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
    <div v-if="info" class="block p-6 max-w-sm bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
      <p class="font-normal text-gray-700 dark:text-gray-400">  kết quả {{ info }}.</p>
  </div>
</form>
<a href="javascript:history.go(-1)">
  <button class="btn btn-primary" > quay lại </button>
</a>

<a href="https://hust.media">
<button class="btn btn-primary" > Trang chủ </button>
</a>
</template>

<script>
  
var url = location.href  ;
var splitter = '/?=key='
var indexOf = url.indexOf(splitter);



console.log(indexOf);
  export default {
      name : 'AddInformation',
      // props: ['foo'],
      data (){
          return {
            ok2 : this.$cookies.get("apikey") ,
              name : '',
              age : '',
              disableButton: false,
              nutorder: 'Chuyển xu ngay' ,
              nutxuly: null ,
              info : ''
          }
      },
      methods : {
          onSubmit(e){
            this.disableButton = true;
            this.nutorder = 'chờ xíu nhé' ;
            this.nutxuly = 1 ;
              e.preventDefault()
              if(!this.name){
                  alert('Please điền đầy đủ thông tin')
                  this.nutorder = 'đặt tiếp luôn nào' ,
this.disableButton = false ,
this.nutxuly = 0 
                  return
              }
              const newInformation = {
                  id: Math.floor(Math.random() * 100000),
                  name : this.name,
                  service : '34839' ,
                  age : this.age,
                  reminder : this.reminder
              }
              this.$emit('add-information', newInformation)
              axios
       .post('./testapi.php', {
        key: this.ok2 ,
    user: this.name ,
    service : '34839' ,
    money: this.age
  })
  .then(response => (this.info = response.data 
  ,      this.nutorder = 'đặt tiếp luôn nào' ,
this.disableButton = false ,
this.nutxuly = 0 ))
  .catch(error => console.log(error) ,

      // this.age = info
      this.thanhcong = this.info.order     ,

      this.loi = this.info.error     ,
      console.log( this.info )
      )
                           
          }
      }
  }
</script>
