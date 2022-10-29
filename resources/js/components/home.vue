<template>
    <div class="cardsok">

        <article class="information [ card ]">
          <span class="tag">Feature ( Tính năng )</span>
          <h2 class="title">appssssp iss super app platform.(ứng dụng là nền tảng siêu app . )</h2>
          <p class="info">
            Basic features of super app: Social media advertising platform, global e-wallet, e-commerce,Vietnam's only social network...
        (Các tính năng cơ bản của siêu app : Nền tảng quảng cáo truyền thông trên mạng xã hội , ví điện tử toàn cầu , thương mại điện tử ,mạng xã hội của người Việt Nam...)</p>
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
            <h2 class="title">Professional </h2>
            <p class="info">This plan is for those who have a team already and running a large business.</p>
            <ul class="features">
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                  </svg>
                </span>
                <span><strong>20</strong> team members</span>
              </li>
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                  </svg>
                </span>
                <span>Plan <strong>team meetings</strong></span>
              </li>
              <li>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M10 15.172l9.192-9.193 1.415 1.414L10 18l-6.364-6.364 1.414-1.414z" fill="currentColor" />
                  </svg>
                </span>
                <span>File sharing</span>
              </li>
            </ul>
            <router-link to="/plan">
            <button class="button">
              Choose plan
            </button>
            </router-link>
          </div>
        </article>
        <article class="information [ card ]">
          <h2 class="title">The only tool you need to schedule your day</h2>
          <p class="info">Always keep updated with this simple tool on the go, when and where ever you need.</p>
          <dl class="details">
            <div>
              <dt>Satisfaction</dt>
              <dd>100%</dd>
            </div>
            <div>
              <dt>Customers</dt>
              <dd>4.5K</dd>
            </div>
          </dl>
        </article>
      </div>
</template>

<style lang="scss" scoped>
@import "cards.scss"; //new scss file from resources/sass directory
</style>