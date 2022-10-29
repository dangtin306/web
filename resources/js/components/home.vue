<template>
    <div class="cardsok">

        <article class="information [ card ]">
          <span class="tag">Feature ( Tính năng )</span>
          <h2 class="title">Về ứng dụng</h2>
          <p class="info">
            Chúng tôi mang đến cho các bạn giải pháp tăng tương tác miễn phí và an toàn.
cung cấp cho khách hàng những giải pháp tối ưu nhất trong việc tìm kiếm khách hàng, kinh doanh buôn bán hiệu quả trên các nền tảng mạng xã hội. 
hust.media sẽ giúp các bạn trở nên nổi bật hơn trên các nền tảng mạng xã hội.</p>
        <router-link to="/okluon">
        <button class="button">
            <span>Learn more ( Xem thêm )</span>
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="none">
              <path d="M0 0h24v24H0V0z" fill="none" />
              <path d="M16.01 11H4v2h12.01v3L20 12l-3.99-4v3z" fill="currentColor" />
            </svg>
          </button></router-link>
        </article>
        <article class="plan [ card ]">
          <div class="inner">
      
            <span class="pricing">
              <span>
                $Free <small>/ m</small>
              </span>
            </span>
            <h2 class="title">Chuyên nghiệp </h2>
            <p class="info">This plan is for those who have a team already and running a large business.

              ( Bạn có thể lựa chọn cấp độ tài khoản cho những kế hoạch kinh doanh chuyên nghiệp )
            </p>
            <ul class="features">
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                  </svg>
                </span>
                <span><strong>Free</strong> bắt đầu hoàn toàn miễn phí</span>
              </li>
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                  </svg>
                </span>
                <span>Giảm giá   <strong>nhiều dịch vụ</strong></span>
              </li>
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                  </svg>
                </span>
                <span>Chat realtime qua app chat tự viết 24/7</span>
              </li>
            </ul>
            <router-link to="/plan">
            <button class="button">
              Choose plan ( Nâng cấp ngay )
            </button>
            </router-link>
          </div>
        </article>
        <article class="information [ card ]">
          <h2 class="title">We Make Things Better</h2>
          <p class="info">Save thousands to millions of bucks by using single tool
            for different amazing and great useful admin.</p>
          <dl class="details">
            <div>
              <dt>Orders</dt>
              <dd>27,050,905+</dd>
            </div>
            <div>
              <dt>
                Price Starting From</dt>
              <dd>Free</dd>
            </div>
          </dl>
        </article>
      </div>
      <br>

    <Adsense
    data-ad-client="ca-pub-4574266110812955"
     data-ad-slot="8795043992"
     data-ad-format="auto"
     data-full-width-responsive="true">
</Adsense>

</template>

<style lang="scss" scoped>
@import "cards.scss"; //new scss file from resources/sass directory
</style>
<script>
 export default {
          data() {
              return {
                  loading: false,
                  users: null,
                  userss: null,
                  size: null ,
                  ketqua: null ,
                  lienket: null,
                  hientruyen: null ,
                  error: null,
                  infoBox: null,
                  width:0,
                  height:0
              };
          },
          created() {

        },}
          
              </script>