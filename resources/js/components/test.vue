


<template>
  <title>Hướng dẫn sử dụng App Hust Media</title>
  <div class="fix-row">
    <div class="col-xl-9 order-xl-2 mb-5 mb-xl-0">
      <div>
        <h1>Hướng dẫn</h1>
        <!-- <h1>{{ message }}</h1> -->

        <!-- <p v-if="picked"><h2>{{ picked }} </h2></p> -->
        <!-- <p v-if="error2">{{ error2 }}

            
        </p> -->
        <!-- <p v-if="show">{{ show }}</p> -->
     
      </div>
      <div>
        <!-- <div class="options">
          <el-radio-group v-model="mode">
            <el-radio :label="1">Random</el-radio>
            <el-radio :label="2">Winning</el-radio>
            <el-radio :label="3">Failure</el-radio>
            <el-radio :label="4">Specified</el-radio>
          </el-radio-group>
          <el-select v-if="mode === 2" class="select" v-model="win" placeholder="Please select">
            <el-option label="Random" :value="''"></el-option>
            <el-option
              v-for="(item, index) in colors.length"
              :key="index"
              :label="index"
              :value="index"
            ></el-option>
          </el-select>
          <template v-if="mode === 4">
            <el-select
              v-for="(item, index) in specified"
              :key="index"
              class="select"
              v-model="specified[index]"
              placeholder="Please select"
            >
              <el-option
                v-for="(item, index) in colors.length"
                :key="index"
                :label="index"
                :value="index"
              ></el-option>
            </el-select>
          </template>
        </div> -->
      </div>

      <div class="d-flex align-items-start">
        <div
          class="nav flex-column nav-pills me-3"
          id="v-pills-tab"
          role="tablist"
          aria-orientation="vertical"
        >
          <button
          @click="chuyenok('earncoins')"
            :class="['nav-link', { active: isActiveTab('earncoins') }]"
            id="earncoins"
            data-bs-toggle="pill"
            data-bs-target="#v-pills-home"
            type="button"
            role="tab"
            aria-controls="v-pills-home"
            aria-selected="true"
          >
            Kiếm xu miễn phí
          </button>
          <button
          @click="chuyenok('followfree')"
            :class="['nav-link', { active: isActiveTab('followfree') }]"
            id="v-pills-profile-tab"
            data-bs-toggle="pill"
            data-bs-target="#v-pills-profile"
            type="button"
            role="tab"
            aria-controls="v-pills-profile"
            aria-selected="false"
          >
            Follow miễn phí
          </button>
          <button
          @click="chuyenok('orders')"
            :class="['nav-link', { active: isActiveTab('orders') }]"
            class="nav-link"
            id="orders"
            data-bs-toggle="pill"
            data-bs-target="#v-pills-messages"
            type="button"
            role="tab"
            aria-controls="v-pills-messages"
            aria-selected="false"
          >
            Hướng dẫn mua dịch vụ
          </button>
          <button
          @click="chuyenok('money')"
            :class="['nav-link', { active: isActiveTab('money') }]"
            class="nav-link"
            id="money"
            data-bs-toggle="pill"
            data-bs-target="#v-pills-settings"
            type="button"
            role="tab"
            aria-controls="v-pills-settings"
            aria-selected="false"
          >
            Hướng dẫn nạp rút xu
          </button>
          <button
            class="nav-link"
            id="hotro-tab"
            data-bs-toggle="pill"
            data-bs-target="#hotro"
            type="button"
            role="tab"
            aria-controls="hotro"
            aria-selected="false"
          >
            Hướng dẫn tạo hỗ trợ
          </button>
          <button
            @click="chay7"
            class="nav-link"
            id="layid-tab"
            data-bs-toggle="pill"
            data-bs-target="#layid"
            type="button"
            role="tab"
            aria-controls="layid"
            aria-selected="false"
          >
            Lấy uid gốc facebook , tiktok
          </button>
          <button
            @click="chay8"
            class="nav-link"
            id="connecttele-tab"
            data-bs-toggle="pill"
            data-bs-target="#connecttele"
            type="button"
            role="tab"
            aria-controls="connecttele"
            aria-selected="false"
          >
            Kết nối app với telegram
          </button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div
            :class="[
              'tab-pane fade show',
              { active: isActiveTab('earncoins') },
            ]"
            id="v-pills-home"
            role="tabpanel"
            aria-labelledby="earncoins"
            tabindex="0"
          >
            <input
              type="radio"
              class="btn-check"
              value="chay1"
              v-model="picked"
              id="chay1"
              autocomplete="off"
            />
            <label class="btn btn-outline-danger" @click="chay1" for="chay1"
              >Chéo tiktok
            </label>

            <input
              type="radio"
              class="btn-check"
              value="chay2"
              v-model="picked"
              id="chay2"
              autocomplete="off"
            />
            <label class="btn btn-outline-danger" @click="chay2" for="chay2"
              >Điểm danh hàng ngày</label
            >
            <input
              type="radio"
              class="btn-check"
              value="chay3"
              v-model="picked"
              id="chay3"
              autocomplete="off"
            />
            <label class="btn btn-outline-danger" @click="chay3" for="chay3"
              >Rải link zalo</label
            >

            <input
              type="radio"
              class="btn-check"
              value="chay4"
              @click="chay4"
              v-model="picked"
              id="chay4"
              autocomplete="off"
            />
            <label class="btn btn-outline-danger" for="chay4">Đăng clip</label>
            <input
              type="radio"
              class="btn-check"
              value="chay10"
              @click="chay10"
              v-model="picked"
              id="chay10"
              autocomplete="off"
            />
            <label class="btn btn-outline-danger" for="chay10"
              >Đánh giá app</label
            >
            <br />
            <div v-if="picked == 'chay1'">
              <iframe
                width="560"
                height="315"
                src="https://www.youtube.com/embed/PI8q3YssSvE"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </div>
            <div v-if="picked == 'chay2'">
              <div id="diemdanh"></div>
            </div>
            <div v-if="picked == 'chay3'">
              <div id="railink"></div>
            </div>
            <div v-if="picked == 'chay4'">
              <div id="dangbai"></div>
            </div>
            <div v-if="picked == 'chay10'">
              <div id="danhgiapp"></div>
            </div>
          </div>
          <div
            :class="[
              'tab-pane fade show',
              { active: isActiveTab('followfree') },
            ]"
            class="tab-pane fade"
            id="v-pills-profile"
            role="tabpanel"
            aria-labelledby="v-pills-profile-tab"
            tabindex="0"
          >
            <h1>
              Để nhận follow miễn phí bạn vui lòng tìm hiểu cách kiếm xu miễn
              phí rồi dùng số xu đó để mua dịch vụ follow trên hust media nhé
            </h1>
          </div>
          <div
          :class="[
              'tab-pane fade show',
              { active: isActiveTab('orders') },
            ]"
            class="tab-pane fade"
            id="v-pills-messages"
            role="tabpanel"
            aria-labelledby="orders"
            tabindex="0"
          >
            <label class="btn btn-outline-danger" @click="muaview" for="muaview"
              >Mua view
            </label>
            <label class="btn btn-outline-danger" @click="muafollow" for="muafollow"
              >Mua Follow</label
            >
            <div v-if="picked == 'muaview'">
              <div id="muaview"></div>
            </div>
            <div v-if="picked == 'muafollow'">
              <div id="muafollow"></div>
            </div>
          </div>
          <div
          :class="[
              'tab-pane fade show',
              { active: isActiveTab('money') },
            ]"
            class="tab-pane fade"
            id="v-pills-settings"
            role="tabpanel"
            aria-labelledby="money"
            tabindex="0"
          >
          <label class="btn btn-outline-danger" @click="donate" for="donate"
              >Nạp xu
            </label>
            <label class="btn btn-outline-danger" @click="payout" for="payout"
              >Rút tiền</label
            >
            <div v-if="picked == 'donate'">
              <div id="donate"></div>
            </div>
            <div v-if="picked == 'payout'">
              <div id="payout"></div>
            </div>
          </div>
          <div
            class="tab-pane fade"
            id="hotro"
            role="tabpanel"
            aria-labelledby="hotro"
            tabindex="0"
          >
            <h1>
              Bạn vụ lòng ấn vô biểu tượng hỗ trợ ở góc dưới bên phải màn hình
              nhé
            </h1>
          </div>
          <div
            class="tab-pane fade"
            id="layid"
            role="tabpanel"
            aria-labelledby="layid"
            tabindex="0"
          >
            <div id="layid2"></div>
          </div>
          <div
            class="tab-pane fade"
            id="connecttele"
            role="tabpanel"
            aria-labelledby="connecttele"
            tabindex="0"
          >
            <div id="connecttele2"></div>
          </div>
        </div>
      </div>
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
     <br>  <br>
  </div>
</template>
  






<script>
import postscribe from "postscribe";
export default {
  data() {
    return {
      title: "3 số giống nhau bạn được nhận x7 xu".split(""),
      title2: "3 số tăng dần x2 xu".split(""),
      light: 0,
      picked: "One",
      message: "Hello World!",
      play1: "",
      timer: 0,
      error2: "",
      mode: 1,
      moder: 1,
      show: "",
      ok2: this.$cookies.get("apikey"),

    };
  },
  computed: {},

  watch: {},
  methods: {
    chuyenok(url)
    {
      this.$router.push( '/huongdan/' + url)  ;
    },
    isActiveTab(tabId) {
      if (window.location.href.indexOf("okluon") > -1  ) {
        if  ( tabId == "earncoins" )
        {
          return window.location.href.indexOf("okluon") !== -1;
        }
       else
       {
        return window.location.href.indexOf(tabId) !== -1;
       }
      } else {
        // Kiểm tra xem tab hiện tại có phải là tab được xác định bởi tabId hay không
        return window.location.href.indexOf(tabId) !== -1;
      }
    },

    chay1() {
      this.message = this.message.split("").reverse().join("");
      setTimeout(function () {
        postscribe(
          "#gist2",
          `<script data-telegram-post="telegram/82" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    chay2() {
      this.message = this.message.split("").reverse().join("");
      setTimeout(function () {
        postscribe(
          "#diemdanh",
          `<script data-telegram-post="freefltiktok/23" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    chay3() {
      this.message = this.message.split("").reverse().join("");
      setTimeout(function () {
        postscribe(
          "#railink",
          `<script data-telegram-post="freefltiktok/17" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    chay4() {
      this.message = this.message.split("").reverse().join("");
      setTimeout(function () {
        postscribe(
          "#dangbai",
          `<script data-telegram-post="freefltiktok/24" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },

    donate() {
      this.picked = "donate";
      this.message = this.message.split("").reverse().join("");
      setTimeout(function () {
        postscribe(
          "#donate",
          `<script data-telegram-post="freefltiktok/33" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    payout() {
      this.picked = "payout";
      this.message = this.message.split("").reverse().join("");
      setTimeout(function () {
        postscribe(
          "#payout",
          `<script data-telegram-post="freefltiktok/80" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    muafollow() {
      (this.picked = "muafollow"),
        (this.message = this.message.split("").reverse().join(""));
      setTimeout(function () {
        postscribe(
          "#muafollow",
          `<script data-telegram-post="freefltiktok/28" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    muaview() {
      (this.picked = "muaview"),
        (this.message = this.message.split("").reverse().join(""));
      setTimeout(function () {
        postscribe(
          "#muaview",
          `<script data-telegram-post="freefltiktok/82" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    chay7() {
      (this.picked = "chay7"),
        (this.message = this.message.split("").reverse().join(""));
      setTimeout(function () {
        postscribe(
          "#layid2",
          `<script data-telegram-post="freefltiktok/34" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    chay8() {
      (this.picked = "chay8"),
        (this.message = this.message.split("").reverse().join(""));
      setTimeout(function () {
        postscribe(
          "#connecttele2",
          `<script data-telegram-post="freefltiktok/35" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    chay10() {
      this.message = this.message.split("").reverse().join("");
      setTimeout(function () {
        postscribe(
          "#danhgiapp",
          `<script data-telegram-post="freefltiktok/37" data-width="100%" src="https://telegram.org/js/telegram-widget.js?19"><\/script>`
        );
      }, 200);
    },
    notify() {
      alert("navigation was prevented.");
    },
  },
};
</script>
  
  
  