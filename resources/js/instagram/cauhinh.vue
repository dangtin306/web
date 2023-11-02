<template>
  <div class="row fixrow">
    <div class="max-h-16">
      <div class="cards">

        <Adsense  data-ad-client="ca-pub-4574266110812955" data-ad-slot="1627514116"
          data-full-width-responsive="no" data-ad-format="horizontal">
        </Adsense>
      </div>
    </div>
    <!-- <div class="col-xl-4">
      <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#napbank">
        NẠP QUA NGÂN HÀNG cập nhật sau 1 đến 4 tiếng
      </button>
    </div> -->
    <!-- Button trigger modal -->
    <div class="text-center">
      <!-- <router-link type="button" class="mx-2  btn btn-primary" to="/okluon">Hướng dẫn</router-link> -->
      <router-link to="/themcauhinh">
        <button type="button" class="mx-2  btn-sm btn-primary">
          THÊM NICK insta ĐỂ CHẠY
        </button>
      </router-link>
      <router-link to="/cheoig">
        <button type="button" class="mx-2  btn-sm btn-primary">
          Chéo insta
        </button>
      </router-link>
    </div>
  </div>
  <div class="max-w-2xl  py-4  mx-auto rounded-lg shadow-xl">

    <div class="panel px-10 panel-primary">
      <!-- <div 
        class=' flex break-inside bg-white text-black border-2 border-black rounded-3xl px-6 py-1 w-auto dark:bg-slate-800 dark:text-white'>
        <div class='m-auto p-2'>
          <div class='flex items-center justify-start flex-1 space-x-4'>
           
            <span class='font-medium px-2 text-sm'>DANH SÁCH NICK FACEBOOK </span>
          </div>
        </div>
</div> -->
      <div class="panel-heading">
        <h4 class="text-white">DANH SÁCH NICK insta</h4>
      </div>
      <div class="panel-body">
        <div v-if="listcauhinh == null" class="container-fluid">
          <div class="row" style="background-color: #FFB6C1;">
            <p class="text-center" style="color: #fff;">

            <div class="text-center spinner-border" role="status">

            </div>
            <br>
            Đang tải danh sách
            </p>
          </div>
        </div>
        <div v-if="listcauhinh != null" class="container-fluid">
          <div v-if="nickdangdung == null" class="container-fluid">

            <p class="text-center" style="color: #fff;">
              <br>
            <p class="text-sm"> Chọn một tài khoản insta bên dưới để làm Jop</p>
            </p>

          </div>
          <div v-if="listcauhinh != null" id="nickdangdung">
            <label v-if="nickdangdung != null" class="block font-bold">Nick đang dùng:</label>
            <a v-if="nickdangdung != null" target="_blank" v-bind:href="nickdangdung.lienketfb" class="flex items-center">
              <img v-bind:src="'data:image/jpeg;base64,' + nickdangdung.ava" class="w-10 h-10 rounded-full mr-2">
              <span>{{ nickdangdung.tenfb }}</span>
            </a>

            <!-- <div class="form-inline mt-2">
                  <label class="block font-bold mr-2">Chế độ kiếm xu:</label>
                  <select class="form-select" v-model="chedokiemxu">
                      <option value="1">Trình duyệt Facebook</option>
                      <option value="2">Ứng dụng Facebook</option>
                  </select>
                </div> -->
          </div>
          <ul id="dsnick" class="list-group mt-3 max-h-80 overflow-y-scroll">
            <li v-for="user in listcauhinh" :key="user.id" class="list-group-item">
              <label class="radio-inline flex items-center">
                <input v-model="idfacebook" :id="user.id" type="radio" :name="'chk'" :value="user"
                  class="form-radio form-radio-lg h-6 w-6 text-pink-500">
                <a :href="user.lienketfb" target="_blank" class="flex items-center">
                  <img :src="'data:image/jpeg;base64,' + user.ava" class="w-10 h-10 rounded-full ml-2 mr-2">
                  <span>{{ user.tenfb }}</span>
                </a>
              </label>
            </li>
          </ul>
          <br>
          <div class="col" @click="xacnhan">
            <div class="fixrow row text-center">
              <div
                class=' flex break-inside bg-white text-black border-2 border-black rounded-3xl px-6 py-1 w-auto dark:bg-slate-800 dark:text-white'>
                <div class='m-auto p-2'>
                  <button class='flex items-center justify-start flex-1 space-x-4'>
                    <div v-if="nutxuly == '1'" class="spinner-border" role="status">

                    </div>
                    <div v-else>
                      <span class='font-medium px-2 text-sm'>Đặt làm nick chạy </span>
                    </div>

                  </button>
                </div>

              </div>

            </div>
          </div>
        </div>




      </div>
    </div>
  </div> <br><br><br><br>
</template>

<script>
import Swal from 'sweetalert2';

export default {
  created() {
    if (!this.ok2) {
      alert('Vui lòng đăng nhập')
    }
    else {
      this.checktk();
    }

  },
  data() {
    return {
      ok2: this.$cookies.get("apikey"),
      listcauhinh: null,
      nickdangdung: null,
      chedokiemxu: 1,
      nutxuly: null,
      idfacebook: null,
      username_ig: '' ,
      randomNumber: Math.floor(Math.random() * 100) + 1
    }
  },

  methods: {
    dssdsdvsdvsdv(info) {

      console.log(this.randomNumber);
      if (info.status == 0) {
        this.thongbaoerror(info.message);
      }
      else if (info.status == 3) {
        this.thongbaosuccess(info.message);
        this.$router.push('/themcauhinh');
      }
      else if (info.status == 1) {
        this.thongbaosuccess(info.message);
        // this.$router.push(`/cauhinh/${this.randomNumber}`);
        this.$router.push('/cheoig');
      }
      else if (info.status == 4) {
        this.thongbaoerror(info.message);

      }
      this.nutxuly = 0;
    },
    xacnhan() {
      this.nutxuly = 1;
      this.username_ig= this.idfacebook.tenfb; // Lấy giá trị của idfacebook
      this.idfacebook = this.idfacebook.idfacebook; // Lấy giá trị của tenfb
      console.log(this.idfacebook);
      console.log(this.username_ig);
      axios
        .post('https://hust.media/insta/profile.php', {
          key: this.ok2,
          idfacebook: this.idfacebook,
          chedo: 'choncauhinh',
          chedokiemxu: this.chedokiemxu ,
          username_ig: this.username_ig
        })
        .then(response => (
          this.info = response.data
          , console.log(this.info),
          this.dssdsdvsdvsdv(this.info)
          , this.nutorder = 'đặt tiếp luôn nào',
          this.disableButton = false,
          this.nutxuly = 0))
        .catch(error => console.log(error),

          this.thanhcong = this.info.order,

          this.loi = this.info.error,
          console.log(this.info)
        )
    },
    asdasdkas(info) {
      if (info.status == 3) {
        this.thongbaosuccess('Vui lòng thêm tài khoản chéo Facebook');
        this.$router.push('/themcauhinh');
      }
      else if (info.status == 0) {
        this.thongbaoerror(info.message);
      }
      else if (info.status == 1) {
        this.thongbaosuccess(info.message);
        this.listcauhinh = info.listcauhinh;
        this.nickdangdung = info.nickdangdung;
        if (info.chedokiemxu) {
          this.chedokiemxu = info.chedokiemxu;
        }
      }
    },
    checktk() {
      axios
        .post('https://hust.media/insta/profile.php', {
          key: this.ok2,
          chedo: 'listcauhinh'
        })
        .then(response => (this.info = response.data
          , console.log(this.info),
          this.asdasdkas(this.info)
        ))
        .catch(error => console.log(error)
        )
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
  }
}
</script>




