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
          <div class="text-center">

            <h2 class="text-uppercase">  Get it on</h2>
          
            <div class="buttons justify-content-center mt-3">
          <a target="_blank" href="https://play.google.com/store/apps/details?id=com.hm.hustmedia">
          <button class="btn btn-dark app-button mb-3"><i class="fa fa-play fa-2x"></i><span class="text-uppercase ml-2">Google store</span></button>
          </a>
          <a target="_blank" href="https://apps.apple.com/app/hust-media/id6444485454">
          <button class="btn btn-dark app-button mb-3"><i class="fa fa-apple fa-2x"></i><span class="text-uppercase ml-2">Apple store</span></button>
          </a> 
             
            </div>
          </div>
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
            <a href="https://hust.media/dang-ky4.php?=code=new">
            <button class="button">
           Đăng ký miễn phí
            </button>
          </a>
            <a href="https://hust.media/dang-nhap2.php">
              <button class="button">
          Đăng nhập
              </button>
              </a>
          </div>
        </article>
        <div class="information [ card ]">
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
          <br>
          <Adsense
          data-ad-client="ca-pub-4574266110812955"
           data-ad-slot="8795043992"
           data-full-width-responsive="yes"
           data-ad-format="horizontal"
           >
        </Adsense>
        
      </div>
      </div>
      <br>
      
      <div>
        <br>
        <component :is="'script'" type="text/javascript"
        async   src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4574266110812955"
        crossorigin="anonymous"></component>
        <ins class="adsbygoogle"
        style="display:inline-block;height:100px;width:200px"
        data-ad-client="ca-pub-4574266110812955"
        data-ad-slot="1627514116"
        data-full-width-responsive="true"></ins>
         <component :is="'script'"  type="text/javascript" >
        (adsbygoogle = window.adsbygoogle || []).push({});</component>
     
     
             </div>
             <br>


<br>
<br>
<br>
<br>
</template>

<style lang="scss" scoped>
.cauhinhads
{
  height:50px ;
}
@import "cards.scss"; //new scss file from resources/sass directory
</style>
<script>
 export default {
          data() {
              return {
                ok2 : this.$cookies.get("apikey") ,
                  loading: false,
                  users: null,
                  userss: null,
                  size: null ,
                  ketqua: null ,
                  lienket: null,
                  hientruyen: null ,
                  error: null,
                  infoBox: null,
                  testadsend: null ,
                  width:0,
                  height:0
              };
          },
          created() {
            $(document).ready(function()
    {
        $(".adsense-inject").each(function () {
          
            $(this).append(`
            <ins class="adsbygoogle"
             style="display:inline-block;width:auto;height:100px" 
            data-ad-client="ca-pub-4574266110812955"
             data-ad-slot="1627514116" 
         ></ins>`);
            (adsbygoogle = window.adsbygoogle || []).push({});
        }); 
    }); ;
            var laylinkhome = location.href  ;
            let result = laylinkhome.includes("/home/");
            if ( result == true )
            {
              if ( this.ok2 != '' && this.ok2 != null  )
            {
              window.location.replace("https://hust.media");
            }
            }

        },}
          
              </script>