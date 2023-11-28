<template>
    <div id="M882924ScriptRootC1517456"></div>
  <div class="container">
    <div class="max-h-16 ">
      <div class="cards">
        <div id="hientruyen"></div>
        <Adsense :key="adsenseKey"
            data-ad-client="ca-pub-4574266110812955"
             data-ad-slot="1627514116"
             data-full-width-responsive="no"
             data-ad-format="horizontal"
             >
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
        <a type="button" class="mx-2  btn-sm btn-primary" href="https://hust.media/reactapp/exchangepoints">Đổi điểm sang
          xu</a>
        <button type="button" :class="{ 'btn-sm btn-primary': true, 'disabledok': isLoadingbutton }"
          :disabled="isLoadingbutton" @click="reloadPosts">
          <div v-if="isLoadingbutton">
            Tải lại danh sách {{ countdown }}
          </div>
          <div v-else>
            Tải lại danh sách
          </div>
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

        <div v-if="tenkiemtien == 'danhgiapage' || tenkiemtien == 'cmtcheo'"
          class="card d-flex align-items-center justify-content-center"
          :style="{ backgroundImage: 'url(https://picsum.photos/300/200?random=' + post.idpost + ')', backgroundSize: 'cover' }">
          <h5 class="card-title ">{{ post.idpost }}</h5>
          <a @click.stop="handleLinkClick(post.idpost)" :href="post.link" target="_blank" class="px-10 py-2 rounded-md text-sm 
            font-medium text-white bg-red-400 hover:bg-purple-400 
            focus:outline-none focus:ring-2 focus:ring-offset-2 
            focus:ring-red-500">

            <div v-if="isLoading && currentPostId == post.idpost" class="spinner-border" role="status"></div>
            <div v-else>
              <span v-if="currentPostId == post.idpost"> {{ nutorder }} </span>
              <span v-else>{{ sadasdsaasd }}</span>
            </div>
          </a>
          
          <a  v-if="tenkiemtien == 'danhgiapage'" @click.stop="handleLinkClick(post.idpost)" :href="'https://www.facebook.com/' + post.idpost" target="_blank" class="px-10 py-2 rounded-md text-sm 
            font-medium text-white bg-red-400 hover:bg-purple-400 
            focus:outline-none focus:ring-2 focus:ring-offset-2 
            focus:ring-red-500">
            <span>Link id</span>
          </a>
          <div class="overflow-y-auto max-h-64 border border-gray-300 rounded">
            <div @click="saochep(value)" v-for="(value, key) in post.nd" :key="key"
              class="p-4  py-2 px-2  border bg-white border-gray-300 rounded">
              {{ value }}
            </div>
          </div>
        </div>
        <div v-else class="card d-flex align-items-center justify-content-center"
          :style="{ backgroundImage: 'url(https://picsum.photos/300/200?random=' + post.idpost + ')', backgroundSize: 'cover' }">
          <h5 class="card-title ">{{ post.idpost }}</h5>
          <a @click.stop="handleLinkClick(post.idpost)" :href="post.link" target="_blank" class="px-10 py-2 rounded-md text-sm 
            font-medium text-white bg-red-400 hover:bg-purple-400 
            focus:outline-none focus:ring-2 focus:ring-offset-2 
            focus:ring-red-500">

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
    
<style >
.colored-toast2.swal2-icon-success {
  background-color: #a5dc86 !important;
}

.colored-toast2.swal2-icon-error {
  background-color: #f27474 !important;
}

.colored-toast2.swal2-icon-warning {
  background-color: #f8bb86 !important;
}

.colored-toast2.swal2-icon-info {
  background-color: #3fc3ee !important;
}

.colored-toast2.swal2-icon-question {
  background-color: #87adbd !important;
}

.colored-toast2 .swal2-title {
  color: white;
}

.colored-toast2 {
  top: -107px;
}

.colored-toast2 .swal2-close {
  color: white;
}

.colored-toast2 .swal2-html-container {
  color: white;
}

.disabledok {
  background-color: #72afff;
  cursor: not-allowed;
  opacity: 0.6;
}
</style>
<script>
import postscribe from "postscribe";
import Swal from "sweetalert2";
export default {
  data() {
    return {
      adsenseKey: 1,
      ok2: this.$cookies.get("apikey"),
      isLoadingbutton: false,
      isLoading: false,
      countdown: 0, // Thêm countdown vào data
      demnguoc: null,
      nutorder: null,
      currentPostId: null,
      posts: null,
      sadasdsaasd: 1,
      start: false
    };
  },
  props: ["tenkiemtien", "social"],

  created() {
    if (this.tenkiemtien == "subcheo") {
      this.sadasdsaasd = "Theo dõi";
    } else if (this.tenkiemtien == "thamgianhomcheo") {
      this.sadasdsaasd = "Tham gia nhóm";
    } else if (this.tenkiemtien == "likepagecheo") {
      this.sadasdsaasd = "Like Fanpage";
    } else if (this.tenkiemtien == "danhgiapage") {
      this.sadasdsaasd = "Reviews Page";
    } else if (this.tenkiemtien == "sharecheo") {
      this.sadasdsaasd = "Chia sẻ";
    } else if (this.tenkiemtien == "cmtcheo") {
      this.sadasdsaasd = "Bình luận";
    } else if (this.tenkiemtien == "subcheo") {
      this.sadasdsaasd = "Theo dõi";
    }
    this.start = true;
    this.reloadPosts();
    // const script = document.createElement('script');
    // script.async = true;
    // script.src = 'https://cdn.aanetwork.vn/code/e/b/eba0dc302bcd9a273f8bbb72be3a687b.js';
    // script.crossOrigin = 'anonymous';

    // // Thêm thẻ script vào phần head
    // document.head.appendChild(script);
    setTimeout(function () {
      postscribe(
        "#hientruyen",
        `    <script>(function(d,z,s){s.src='https://'+d+'/400/'+z;try{(document.body||document.documentElement).appendChild(s)}catch(e){}})('outsliggooa.com',5904762,document.createElement('script'))<\/script>`
      );
    }, 200);
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
      this.$router.push("/cheofb");
    },
    asdasdkas(info) {
      if (info.status == 3) {
        this.thongbaoerror(info.message);
        this.$router.push("/cheofb");
      } else if (info.status == 1) {
        this.thongbaosuccess("Lấy danh sách jop thành công");
        this.posts = info.message;
      } else if (info.status == 0) {
        this.thongbaoerror(info.message);
      }
    },

    thongbaoerror(error) {
      this.openappleok = "no";
      Swal.mixin({
        toast: true,
        position: "top-right",
        iconColor: "white",
        position: 'bottom-right',
        customClass: {
          popup: 'colored-toast2'
        },
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      }).fire({
        icon: "error",
        title: error,
      });
    },
    thongbaosuccess(success) {
      Swal.mixin({
        toast: true,
        position: "top-right",
        iconColor: "white",
        position: 'bottom-right',
        customClass: {
          popup: 'colored-toast2'
        },
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener("mouseenter", Swal.stopTimer);
          toast.addEventListener("mouseleave", Swal.resumeTimer);
        },
      }).fire({
        icon: "success",
        title: success,
      });
    },
    async saochep(urlsplit) {
      this.ketqua = "đã sao chép ";

      await navigator.clipboard.writeText(urlsplit);

      this.ketqua = "đã sao chép ";
      this.thongbaosuccess("đã sao chép");
      NativeAndroid.copyToClipboard(urlsplit);
    },
    reloadPosts() {
      this.currentPostId = null;
      this.posts = null;
      this.isLoadingbutton = true;
      this.countdown = 5; // Khởi tạo giá trị ban đầu cho countdown
      const intervalId = setInterval(() => {
        this.countdown--; // Giảm giá trị countdown mỗi giây
        if (this.countdown === 0) {
          clearInterval(intervalId); // Dừng đếm ngược khi countdown bằng 0
          this.isLoadingbutton = false;
        }
      }, 1000);
      axios
        .post("https://hust.media/ttc/profile.php", {
          key: this.ok2,
          chedo: "getjop",
          theloai: this.tenkiemtien,
          social: this.social,
        })
        .then(
          (response) => {
            (this.info = response.data),
              console.log(this.info),
              this.asdasdkas(this.info);
            if (!this.start) {
              this.adsenseKey++;
            }
            else {
              this.start = false;
            }
          }
        )
        .catch((error) => console.log(error));
    },
    filteredPosts() {
      if (this.currentPostId) {
        this.posts = this.posts.filter(
          (post) => post.idpost !== this.currentPostId
        );
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
        .post("https://hust.media/ttc/nhantien.php", {
          key: this.ok2,
          idpost: idpost,
          theloai: this.tenkiemtien,
          // binhluan: this.binhluan
        })
        .then(
          (response) => (console.log(response.data), this.dathang(response))
        )
        .catch((error) => console.log(error));
    },
    dathang(response) {
      this.info1 = response.data;
      if (this.info1.error) {
        this.thongbaoerror(this.info1.error);
        this.nutorder = "lỗi";
      } else if (this.info1.mess.includes("điểm")) {
        this.thongbaosuccess(this.info1.mess);
        this.nutorder = "thành công";
      } else if (this.info1.mess) {
        this.thongbaoerror(this.info1.mess);
        this.nutorder = "lỗi";
      }
      this.isLoading = false;
      setTimeout(() => {
        this.filteredPosts();
      }, 500);
    },
  },
};
</script>