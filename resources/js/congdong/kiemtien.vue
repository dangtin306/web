<template>
    <div class="container">
      <div class="row">
          <div class="text-center">
              <router-link type="button" class="mx-2  btn-sm btn-primary" to="/exchangepoints">Đổi điểm sang xu</router-link>
              <button     type="button"
              :class="{ 'btn-sm btn-primary': true, 'disabledok': isLoadingbutton }"
              :disabled="isLoadingbutton" @click="reloadPosts" >
                  <div v-if="isLoadingbutton">
                    Tải lại danh sách {{ countdown }}
                  </div>
                  <div v-else>
                    Tải lại danh sách
                  </div>
                </button>
              
      </div>
      <div  v-if="posts == null" >
        <br>
        <div class="container-fluid">
          <div class="row" style="background-color: #FFB6C1;">
             <p class="text-center" style="color: #fff;">
              
              <div  class="text-center spinner-border" role="status">
                   
              </div>
              <br>
              Đang tải danh sách
             </p>
          </div>
      </div>
      </div>
     
 
        <div v-else
          class="col-6 col-md-4 col-lg-3 mb-4"
          v-for="(post, index) in posts"
          :key="index"
        >
        
          <div class="card d-flex align-items-center justify-content-center" :style="{ backgroundImage: 'url(https://picsum.photos/300/200?random=' + post.idpost + ')', backgroundSize: 'cover' }">
            <h5 class="card-title ">{{ post.idpost }}</h5>
            <a
            @click.stop="handleLinkClick(post.idpost)"
             :href="post.link" target="_blank" 
            class="px-10 py-2 rounded-md text-sm 
            font-medium text-white bg-pink-400 hover:bg-purple-400 
            focus:outline-none focus:ring-2 focus:ring-offset-2 
            focus:ring-pink-500"
            >
            
            <div v-if="isLoading && currentPostId == post.idpost" class="spinner-border" role="status"></div>
            <div v-else>
              <span v-if="currentPostId == post.idpost"> {{ nutorder }} </span>
              <span v-else>Theo dõi</span>
            </div>
          </a>
  
  
          </div>
        </div>    
      </div>
    </div>
    <br>  <br>  <br>
  </template>
    
  <style scoped>
  .disabledok {
      background-color: #72afff;
      cursor: not-allowed;
      opacity: 0.6;
    }
  </style>
    <script>
    import Swal from 'sweetalert2' ;
    export default {
      data() {
        return {
          ok2 : this.$cookies.get("apikey")  ,
          isLoadingbutton: false,
          isLoading: false,
          countdown: 0, // Thêm countdown vào data
          demnguoc: null ,
          nutorder: null,
          currentPostId: null,
          posts: null,
        };
      },
      created(){
  this.reloadPosts() ;
  },
  beforeUnmount() {
  window.removeEventListener("focus", this.handleFocus);
},
  mounted() {
  this.handleFocus = () => {
    const postId = localStorage.getItem("postId");
    if (postId) {
      this.handlePostFocus(postId);
      setTimeout(() => {
        localStorage.removeItem("postId");
      }, 500);
    }
  };
  window.addEventListener("focus", this.handleFocus);
},
    methods: {
      asdasdkas(info)
        {
if ( info.status == 3 )
{
  this.thongbaoerror(info.message) ;
  this.$router.push('/cheofb') ;
}
else if ( info.status == 1 )
{
  this.thongbaosuccess('Lấy danh sách jop thành công') ;
  this.posts = info.message ;
}
else if ( info.status == 0 )
{
  this.thongbaoerror(info.message) ;
}
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
      reloadPosts() {
        this.posts = null ;
      this.isLoadingbutton = true;
      this.countdown = 15; // Khởi tạo giá trị ban đầu cho countdown
      const intervalId = setInterval(() => {
        this.countdown--; // Giảm giá trị countdown mỗi giây
        if (this.countdown === 0) {
          clearInterval(intervalId); // Dừng đếm ngược khi countdown bằng 0
          this.isLoadingbutton = false;
        }
      }, 1000);
      axios
       .post('https://tecom.pro/ttc/profile.php', {
        key: this.ok2 ,
    chedo: 'getjop'
  })
  .then(response => (  this.info = response.data
  , console.log(this.info) ,
  this.asdasdkas(this.info )
 ))
  .catch(error => console.log(error) 
      )
    },
      filteredPosts() {
              if (this.currentPostId) {
                this.posts = this.posts.filter((post) => post.idpost !== this.currentPostId);
              } else {
                this.posts = this.posts;
              }
            },
      handleLinkClick(idpost) {
          this.isLoading = true;
          this.currentPostId = idpost;
        localStorage.setItem("postId", idpost);
      },
      handlePostFocus(idpost) {
          console.log(`Post ${idpost} focused`);
          axios
           .post('https://tecom.pro/ttc/nhantien.php', {
            key: this.ok2 ,
            idpost: idpost 
        // binhluan: this.binhluan
      })
      .then( response => (
      console.log(response.data ) ,
      this.dathang(response )
      ))
      .catch(error => console.log(error) ,
          ) ;
      },
      dathang(response)
      {
          this.info1 = response.data ;
          if (this.info1.error )
          {
            this.thongbaoerror(this.info1.error   ) ;
              this.nutorder = 'lỗi' ;
          }
          else if (this.info1.mess.includes("điểm")) {
            this.thongbaosuccess(this.info1.mess   ) ;
              this.nutorder = 'thành công' ;
}
          else if(this.info1.mess   )
          {
            this.thongbaoerror(this.info1.mess   ) ;
              this.nutorder = 'lỗi' ;
          }
          this.isLoading = false;
        setTimeout(() => {
          this.filteredPosts();
        }, 500); 
      }
    },
      
    };
    </script>