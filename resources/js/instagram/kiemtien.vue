<template>
  <div class="container">
    <div class="max-h-16">
      <div class="cards">
        <Adsense :key="adsenseKey" data-ad-client="ca-pub-4574266110812955" data-ad-slot="8795043992"
          data-full-width-responsive="no" ins-class="display: block; height: 50px;"
          ins-style="display: block; height: 50px;">
        </Adsense>
      </div>
    </div>
    <div class="row">
      <div class="text-center">
        <div style="display: flex; justify-content: center; align-items: center; ">

          <p> Page: {{ tenkiemtien }}</p>
          <button type="button" :class="{ 'btn-sm btn-primary': true, 'disabledok': isLoadingbutton }"
            :disabled="isLoadingbutton" @click="homeok">
            <div v-if="isLoadingbutton">
              Home {{ countdown }}
            </div>
            <div v-else>
              Home
            </div>
          </button>

        </div>
        <a type="button" class="mx-2 text-white  btn-sm btn-primary" @click="doidiem">Đổi điểm sang xu</a>
        <button type="button" :class="{ 'btn-sm btn-primary': true, 'disabledok': isLoadingbutton }"
          :disabled="isLoadingbutton" @click="reloadPosts">
          <div v-if="isLoadingbutton">
            Tải lại danh sách {{ countdown }}
          </div>
          <div v-else>
            Tải lại danh sách
          </div>
        </button>
        <br>
        <button @click="nhandiem" :disabled="ahbsdjaksjd" v-if="tenkiemtien == 'subcheo'" type="button" class="px-10 py-2 rounded-md text-sm 
              font-medium text-white bg-red-400 hover:bg-purple-400 
              focus:outline-none focus:ring-2 focus:ring-offset-2 
              focus:ring-red-500">
          <div class="spinner-border" role="status" v-if="ahbsdjaksjd == true">
          </div>
          <div v-else> Nhận Tất Cả điểm</div>

        </button>
      </div>
      <div v-if="posts == null">
        <br>
        <div class="container-fluid">
          <div class="row" style="background-color: #FFB6C1;">
            <p class="text-center" style="color: #fff;">

            <div class="text-center spinner-border" role="status">

            </div>
            <br>
            Đang tải danh sách
            </p>
          </div>
        </div>
      </div>


      <div v-else class="col-6 col-md-4 col-lg-3 mb-4" v-for="(post, index) in posts" :key="index">

        <div class="card d-flex align-items-center justify-content-center"
          :style="{ backgroundImage: 'url(https://picsum.photos/300/200?random=' + post.idpost + ')', backgroundSize: 'cover' }">
          <h5 v-if="social == 'tiktok' && tenkiemtien != 'kiemtien'" class="card-title ">{{ post.link }}</h5>
          <h5 v-else class="card-title ">{{ post.idpost }}</h5>
          <a @click.stop="handleLinkClick(post.idpost)" :href="post.lienket" target="_blank" class="px-10 py-2 rounded-md text-sm 
            font-medium text-white bg-pink-400 hover:bg-purple-500 
            focus:outline-none focus:ring-2 focus:ring-offset-2 
            focus:ring-pink-500">

            <div v-if="isLoading && currentPostId == post.idpost" class="spinner-border" role="status"></div>
            <div v-else>
              <span v-if="currentPostId == post.idpost"> {{ nutorder }} </span>
              <span v-else>{{ sadasdsaasd }}</span>
            </div>
          </a>


        </div>
      </div>
    </div>
  </div>
  <br> <br> <br>
</template>
    
<style scoped>
.disabledok {
  background-color: #72afff;
  cursor: not-allowed;
  opacity: 0.6;
}
</style>
<script>
import Swal from 'sweetalert2';
export default {
  data() {
    return {
      adsenseKey: 0, // Khởi tạo key ban đầu
      ok2: this.$cookies.get("apikey"),
      isLoadingbutton: false,
      isLoading: false,
      countdown: 0, // Thêm countdown vào data
      demnguoc: null,
      nutorder: null,
      currentPostId: null,
      savefollowing: null,
      posts: null,
      ahbsdjaksjd: false,
      sadasdsaasd: 1,
      start: false
    };
  },
  props: ['tenkiemtien', 'social'],
  created() {
    if (this.tenkiemtien == 'subcheo') { this.sadasdsaasd = 'Theo dõi'; }
    else if (this.tenkiemtien == 'timcheo' || this.tenkiemtien == 'kiemtien') {
      this.sadasdsaasd = 'Thả Tim';
    }
    this.start = true;
    this.reloadPosts();
  },
  beforeUnmount() {
    window.removeEventListener("visibilitychange", this.handleVisibilityChange);
  },
  mounted() {
    this.handleVisibilityChange = () => {
      if (document.visibilityState === "visible") {
        const postId = localStorage.getItem("postId");
        if (postId) {
          this.handlePostFocus(postId);
          setTimeout(() => {
            localStorage.removeItem("postId");
          }, 500);
        }
      }
    };
    window.addEventListener("visibilitychange", this.handleVisibilityChange);
  },

  methods: {
    homeok() {
      if (this.social == 'tiktok') {
        this.$router.push('/jop/tiktok');
      }
      else {
        this.$router.push('/cheoig');
      }
    },
    doidiem() {
      if (this.social == 'tiktok') {
        window.location.href = "https://hust.media/reactapp/exchangepoints";
      }
      else {
        this.$router.push('/nativeapp/exchangepoints');
      }
    },
    asdasdkas(info) {
      if (info.status == 3) {
        this.thongbaoerror(info.message);
        this.$router.push('/cheoig');
      }
      else if (info.status == 8) {
        this.thongbaoerror(info.message);
        this.$router.push('/cauhinhtiktok/3');
      }
      else if (info.status == 7) {
        this.thongbaoerror(info.message);
        this.$router.push('/cheofb');
      }
      else if (info.status == 1) {
        this.thongbaosuccess('Lấy danh sách jop thành công');
        this.posts = info.message;
      }
      else if (info.status == 0) {
        this.thongbaoerror(info.message);
      }
    },
    thongbaoerror(error) {
      this.openappleok = 'no';
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
        title: error

      })
    },
    thongbaosuccess(success) {
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
      this.posts = null;
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
        .post('https://hust.media/insta/profile.php', {
          key: this.ok2,
          chedo: 'getjop',
          theloai: this.tenkiemtien,
          social: this.social

        })
        .then(response => {
          this.info = response.data
          , console.log(this.info),
          this.asdasdkas(this.info);
          if (!this.start) {
            this.adsenseKey++;
          }
          else {
            this.start = false;
          }

        })
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
      if (this.savefollowing == null) {
        this.savefollowing = idpost;
      }
      else {
        this.savefollowing = this.savefollowing + ',' + idpost;
      }
      console.log(this.savefollowing);
      localStorage.setItem("postId", idpost);
    },
    nhandiem() {
      this.ahbsdjaksjd = true;
      axios
        .post('https://hust.media/insta/nhantien.php', {
          key: this.ok2,
          idpost: this.savefollowing,
          theloai: this.tenkiemtien,
          social: this.social
          // binhluan: this.binhluan
        })
        .then(response => (
          console.log(response.data),
          this.dathang(response),
          this.adsenseKey++
        ))
        .catch(error => console.log(error),
        );

    },
    handlePostFocus(idpost) {
      if (this.tenkiemtien == 'timcheo' || this.tenkiemtien == 'kiemtien') {
        console.log(`Post ${idpost} focused`);
        axios
          .post('https://hust.media/insta/nhantien.php', {
            key: this.ok2,
            idpost: idpost,
            theloai: this.tenkiemtien,
            social: this.social
            // binhluan: this.binhluan
          })
          .then(response => (
            console.log(response.data),
            this.dathang(response)
          ))
          .catch(error => console.log(error),
          );

      }
      else {
        this.nutorder = 'thành công';
        this.isLoading = false;
        setTimeout(() => {
          this.filteredPosts();
        }, 500);
      }

    },
    dathang(response) {
      this.ahbsdjaksjd = false;
      this.info1 = response.data;
      if (this.info1.error || this.info1.error2) {
        if (this.info1.error.includes("nhiệm vụ rồi nhận điểm")) {
          this.thongbaoerror(this.info1.error);
          this.nutorder = 'lỗi';
        }
        else if (this.info1.error) {
          this.thongbaoerror(this.info1.error);
          this.nutorder = 'lỗi';
          this.savefollowing = null;
        }
        else if (this.info1.error2) {
          this.thongbaoerror(this.info1.error2);
          this.nutorder = 'lỗi';
          this.savefollowing = null;
        }
      }
      else {
        if (this.info1.mess.includes("điểm")) {
          this.thongbaosuccess(this.info1.mess);
          this.nutorder = 'thành công';
          this.savefollowing = null;
        }
        else if (this.info1.mess) {
          this.thongbaoerror(this.info1.mess);
          this.nutorder = 'lỗi';
          this.savefollowing = null;
        }
      }

      this.isLoading = false;
      setTimeout(() => {
        this.filteredPosts();
      }, 500);
    }
  },

};
</script>