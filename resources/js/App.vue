<template>
  <!-- <div >
    
  
    <router-link class="btn btn-outline-danger" to="/">Home</router-link> |
    <router-link class="btn btn-outline-danger"  to="/time">Hẹn giờ</router-link> |
    <router-link class="btn btn-outline-danger" to="/test">Lịch sử chuyển tiền</router-link> |
    <router-link class="btn btn-outline-danger" to="/game">Game</router-link> | 
    <router-link class="btn btn-outline-danger" to="/okluon">Hướng dẫn sử dụng</router-link> |
    <router-link class="btn btn-outline-danger" to="/testcode">Test tính năng</router-link>
  </div> -->
  <div >
  <nav v-if="showElement == true"  class="fixed-bottom navbar-light " >
    <link rel="stylesheet" href="https://hust.media/style.css">

    <div class="container2 itemoknav"    :class="{ hide: isHide }" >
    <div class="tinhchinh2 " ref="element"  v-show="showElement" >
  <div class="row tinhchinh3">
    
  
<!-- partial:index.partial.html -->
<div  class="tabs">
  
  <!-- TAB 1 -->
  
  <input @click="tap1" type="radio" name="tab"  id="tab-01"  />

  <label for="tab-01" >
    <svg>
      <use xlink:href="#icon-01"  class="icon" />
    </svg>
    <div class="wave"></div>
  </label>

  <!-- TAB 2 -->
 
  <input @click="tap2" type="radio" name="tab" onclick="loading02()" id="tab-02" />
  
               
  <label  for="tab-02">
 
    <svg>
   
      <use xlink:href="#icon-02" class="icon" />
    </svg>
   
    <div class="wave"></div>

  </label>
  <!-- TAB 3 -->
  <input @click="tap3" type="radio" name="tab" onclick="loading03()"  id="tab-03" />
  <label for="tab-03">
    <svg>
      <use xlink:href="#icon-03" class="icon" />
    </svg>
    <div class="wave"></div>
  </label>
  <!-- TAB 4 -->
  <input @click="tap4" type="radio" name="tab" onclick="loading04()"  id="tab-04" />
  <label for="tab-04">
    <svg>
      <use xlink:href="#icon-04" class="icon" />
    </svg>
    <div class="wave"></div>
  </label>



</div>
<!-- SVG -->
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-01">
    <path d="M13.93,1H20.8A4.21,4.21,0,0,1,25,5.2V20.8A4.21,4.21,0,0,1,20.8,25H5.2A4.21,4.21,0,0,1,1,20.8V5.2A4.21,4.21,0,0,1,5.2,1h.47"/>
    <line x1="16" y1="10" x2="18" y2="10"/>
    <line x1="8" y1="10" x2="12" y2="10"/>
    <line x1="8" y1="15" x2="18" y2="15"/>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-02">
    <path d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
  <polygon points="15 14.33 11 17 11 11.67 15 9 15 14.33"/>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-03">
    <path d="M7.91,2.08a11.15,11.15,0,0,0-5.73,9.81v6a7.83,7.83,0,0,1-1,2.92A1.47,1.47,0,0,0,2.43,23H23.57a1.47,1.47,0,0,0,1.26-2.16,7.83,7.83,0,0,1-1-2.92v-6A11.06,11.06,0,0,0,15.18,1"/>
  <path d="M15,23a2,2,0,0,1-4,0"/>
  <path d="M16,5.51A6.53,6.53,0,0,1,19.65,9.4"/>
  </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26" id="icon-04">
    <path d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
  <path d="M18,18.26a8,8,0,0,1-10.09-.1"/>
    </symbol>
  <symbol xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 214.6279 198.1416" enable-background="new 0 0 214.6279 198.1416" xml:space="preserve" id="icon-05">
 <g>
  <path fill="#5CB0FF" d="M171.748,142.3193c0-15.4375-12.5625-28-28-28s-28,12.5625-28,28s12.5625,28,28,28   S171.748,157.7568,171.748,142.3193z"/>
  <path fill="#1C71DA" d="M95.748,166.3193v-76h42.989c0.0146,0.7878,0.0696,1.5579,0.0696,2.3516c0,2.2109,1.7891,4,4,4   s4-1.7891,4-4c0-0.7937-0.0603-1.5632-0.0745-2.3516h25.0159h5.6484h2.3516c0-46.3164-37.6836-84-84-84h-8v0.4053   c-42.5754,4.0447-76,39.9785-76,83.5947c0,46.3164,37.6836,84,84,84c2.2109,0,4-1.7891,4-4S97.959,166.3193,95.748,166.3193z    M87.748,164.9949c-19.9287-6.438-35.0586-36.3945-35.0586-72.324c0-0.7937,0.0549-1.5637,0.0696-2.3516h34.989V164.9949z    M53.1655,82.3193C55.75,51.1135,69.7729,26.157,87.748,20.3506v61.9688H53.1655z M95.748,82.3193v-63.293   c21.6829,0,39.6248,27.5808,42.5825,63.293H95.748z M171.3181,82.3193h-24.9685c-2.3884-29.9812-14.96-54.8911-31.9993-65.6013   C144.7681,24.4146,167.9641,50.417,171.3181,82.3193z M77.1458,16.718C60.1064,27.4282,47.5349,52.3381,45.1465,82.3193H20.178   C23.532,50.417,46.728,24.4146,77.1458,16.718z M19.748,90.3193h25.0159c-0.0142,0.7883-0.0745,1.5579-0.0745,2.3516   c0,28.5327,9.217,53.6572,23.1233,68.2603C39.7031,149.769,19.748,122.3567,19.748,90.3193z"/>
  <path fill="#1C71DA" d="M191.5137,184.4287l-19.665-19.665c4.9307-6.1609,7.8994-13.9573,7.8994-22.4443   c0-19.8516-16.1484-36-36-36s-36,16.1484-36,36s16.1484,36,36,36c8.4871,0,16.2834-2.9688,22.4443-7.8994l19.665,19.665   L191.5137,184.4287z M115.748,142.3193c0-15.4375,12.5625-28,28-28s28,12.5625,28,28s-12.5625,28-28,28   S115.748,157.7568,115.748,142.3193z"/>
</g>
<path fill="#FF5D5D" d="M4,22.1416c-1.0234,0-2.0479-0.3906-2.8281-1.1719c-1.5625-1.5615-1.5625-4.0947,0-5.6562L15.3145,1.1719  c1.5625-1.5625,4.0957-1.5625,5.6562,0c1.5625,1.5615,1.5625,4.0947,0,5.6562L6.8281,20.9697  C6.0469,21.751,5.0234,22.1416,4,22.1416z"/>
<path fill="#FF5D5D" d="M18.1426,22.1416c-1.0234,0-2.0469-0.3906-2.8281-1.1719L1.1719,6.8281  c-1.5625-1.5615-1.5625-4.0947,0-5.6562c1.5605-1.5625,4.0938-1.5625,5.6562,0l14.1426,14.1416  c1.5625,1.5615,1.5625,4.0947,0,5.6562C20.1904,21.751,19.166,22.1416,18.1426,22.1416z"/>
<path fill="#00D40B" d="M14,198.1416c-7.7197,0-14-6.2803-14-14s6.2803-14,14-14s14,6.2803,14,14S21.7197,198.1416,14,198.1416z   M14,178.1416c-3.3086,0-6,2.6914-6,6s2.6914,6,6,6s6-2.6914,6-6S17.3086,178.1416,14,178.1416z"/>
<path fill="#FFC504" d="M199.3145,56.7695c-1.0605,0-2.0781-0.4219-2.8281-1.1719l-11.3145-11.3145  c-0.75-0.75-1.1719-1.7676-1.1719-2.8281s0.4219-2.0781,1.1719-2.8281l11.3145-11.3135c1.5625-1.5625,4.0938-1.5625,5.6562,0  l11.3135,11.3135c1.5625,1.5615,1.5625,4.0947,0,5.6562l-11.3135,11.3145C201.3926,56.3477,200.375,56.7695,199.3145,56.7695z   M193.6572,41.4551l5.6572,5.6572l5.6572-5.6572l-5.6572-5.6572L193.6572,41.4551z"/>
  </symbol>
</svg>

<svg xmlns="http://www.w3.org/2000/svg" height="0" width="0">
  <clipPath id="path-icon-01">
    <path d="M13.93,1H20.8A4.21,4.21,0,0,1,25,5.2V20.8A4.21,4.21,0,0,1,20.8,25H5.2A4.21,4.21,0,0,1,1,20.8V5.2A4.21,4.21,0,0,1,5.2,1h.47"/>
  </clipPath>
  <clipPath id="path-icon-02">
    <path d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
  </clipPath>
  <clipPath id="path-icon-03">
    <path d="M7.91,2.08a11.15,11.15,0,0,0-5.73,9.81v6a7.83,7.83,0,0,1-1,2.92A1.47,1.47,0,0,0,2.43,23H23.57a1.47,1.47,0,0,0,1.26-2.16,7.83,7.83,0,0,1-1-2.92v-6A11.06,11.06,0,0,0,15.18,1"/>
  </clipPath>
  <clipPath id="path-icon-04">
    <path d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
  </clipPath>
  <clipPath id="path-icon-05">
    <path d="M17,1a12.33,12.33,0,0,1,8,11.65A12.18,12.18,0,0,1,13,25,12.18,12.18,0,0,1,1,12.65,12.33,12.33,0,0,1,9,1"/>
  </clipPath>
</svg>
</div>
</div>
</div>

<!--- ## DRIBBBLE + TWITTER ############# -->

<!-- partial -->
  
</nav>
<html
lang="en"
class="light-style layout-menu-fixed"
dir="ltr"
data-theme="theme-default"
data-assets-path="/okok/assets/"
data-template="vertical-menu-template-free"
>
  <body
  class="
    antialiased
    bg-gradient-to-r
    from-pink-300
    via-purple-300
    to-indigo-400
  "
>

<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <br>
     <br>
     <div class="app-brand demo">
<a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
<i class="bx bx-chevron-left bx-sm align-middle"></i>
</a>
</div>

<div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
  
      <li class="menu-item ">
        <a href="https://hust.media/home/" class="menu-link">
        <img src="data:image/jpeg;base64,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" style="width:32px;height:32px">
        <div data-i18n="Analytics">Trang chủ</div>
        </a>
        </li>
      <li class="menu-item" style="">
        <a  class="menu-link  menu-toggle">
        <img src="https://hust.media/img/icon/nap.webp " style="width:27px;height:27px">
        <div data-i18n="Analytics">Rút tiền và nạp tiền </div>
        </a>
        <ul class="menu-sub">
        <li>
          <router-link to="/naptien" class="menu-link layout-menu-toggle btn-sm  btn-outline-primary dropdown-item"> <img src="https://hust.media/img/icon/kimcuong.gif" style="width:20px;height:20px;bg-white ; ">&nbsp; Nạp tiền
        <i class="ni ni-check-bold"></i>
      </router-link>
      <router-link to="/chuyenxu" class="menu-link layout-menu-toggle btn-sm  btn-outline-primary dropdown-item"> <img src="https://hust.media/img/icon/coin.svg" style="width:20px;height:20px;bg-white ; "> &nbsp;Chuyển xu
        <i class="ni ni-check-bold"></i>
      </router-link>
        <a href="https://hust.media/ruttien.php" class="menu-link btn-sm  btn-outline-primary dropdown-item"> <img src="https://hust.media/img/icon/nap.webp " style="width:20px;height:20px;bg-white ; ">&nbsp; Rút tiền qua Momo

        </a>     <li>
        <a href="https://hust.media/shop/wallet/paybank" 
        class="menu-link btn-sm  btn-outline-primary dropdown-item"> 
          <img src="https://hust.media/img/icon/imagescoins.png" style="width:20px;height:20px;bg-white ; ">&nbsp; Rút tiền qua ngân hàng

        </a></li>
        </li>
        </ul>
        </li>
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Dịch vụ </span>
          </li>
      <li class="menu-item ">
        <router-link to="/orders" class="menu-link layout-menu-toggle">
        <img src="https://hust.media/img/icon/tiktok2.gif" style="width:32px;height:32px">
        <div data-i18n="Analytics">Tăng tương tác mạng xã hội</div>
      </router-link>
        </li>
      <li class="menu-item ">
        <a class="menu-link "   href="https://hust.media/shop/doithe">
        <img src="data:image/png;base64,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" style="width:27px;height:27px">
        <div data-i18n="Analytics">Đổi thẻ sang tiền việt</div>
        </a>
        </li>

        <li class="menu-item" style="">
          <a  class="menu-link  menu-toggle">
            <img src="https://hust.media/img/icon/4298126.png" style="width:27px;height:27px">
          <div data-i18n="Analytics">Thuê sim nhận code lấy mã otp</div>
          </a>
          <ul class="menu-sub">
          <li>
     
        <!-- <router-link to="/nativeapp/themotp" 
        class="menu-link layout-menu-toggle btn-sm  btn-outline-primary dropdown-item">
         &nbsp;Toàn cầu ( Có chat gpt)
          <i class="ni ni-check-bold"></i>
        </router-link> -->
          <a href="https://hust.media/themotp.php"
           class="menu-link btn-sm  btn-outline-primary dropdown-item">
           &nbsp; Việt Nam
  
          </a>    
          </li>
          </ul>
          </li>
    
      <li class="menu-item ">
        <router-link class="menu-link layout-menu-toggle"  to="/okluon">
          <img src="https://hust.media/img/icon/giphy (7).gif"
         style="width:27px;height:27px">
          <div data-i18n="Analytics">Hướng dẫn sử dụng</div>
        </router-link>
      </li>
      <li class="menu-item ">
        <router-link class="menu-link layout-menu-toggle"  to="/account">
        <img src="https://cdn.sanity.io/images/bl383u0v/production/3e0a187d04a5edb85b57ba4014ad4ea26227174a-1500x1000.gif" style="width:17px;height:17px">
        <div data-i18n="Analytics">Mua tài khoản,via tiktok, Chat GPT</div>
      </router-link>
        </li>
      <!-- Components -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Giải trí</span></li>
      <!-- Cards -->
      <li class="menu-item">
        <router-link class="menu-link layout-menu-toggle"  to="/history">
        <img src="https://hust.media/img/icon/history.svg" style="width:27px;height:27px">
        <div data-i18n="Basic">Nhật ký đơn hàng</div>
      </router-link>
        </li>
      <li class="menu-item">
        <router-link class="menu-link layout-menu-toggle"  to="/id">
        <img src="https://hust.media/img/icon/idcards.png" style="width:27px;height:27px">
          <div data-i18n="Basic">Tìm lấy id facebook , tiktok , instagram</div>
         </router-link>
      </li>
      <li class="menu-item">
        <a  href="https://hust.media/truyen-hay/home" class="menu-link">
        <img src="https://hust.media/img/icon/zero-two-icon.gif" style="width:27px;height:27px">
        <div data-i18n="Basic">Đọc truyện tranh :)</div>
        </a>
        </li>
        <!-- <li class="menu-item">
          <router-link  to="/anime/home" class="menu-link layout-menu-toggle">
          <img src="https://gifdb.com/images/high/icon-happy-cute-anime-girl-4pq05vxulhcty9x3.gif" style="width:27px;height:27px">
          <div data-i18n="Basic">Xem Hoạt hình</div>
        </router-link>
          </li> -->
      <li class="menu-item">
        <a href="/game/index.php" class="menu-link">
        <img src="https://hust.media/img/icon/images.png" style="width:27px;height:27px">
          <div data-i18n="Basic">Chơi game vui vẻ</div>
        </a>
      </li>
      
 
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Thông tin &amp; Thêm</span></li>
      <li class="menu-item">
            <a href="/apismm.php" class="menu-link">
            <img src="https://hust.media/img/icon/source.gif" style="width:27px;height:27px">
              <div data-i18n="Without navbar">Api mua dịch vụ</div>
            </a>
          </li>
          <li class="menu-item <?=$active1;?>">
        <a href="https://github.com/dangtin306" class="menu-link">
        <img src="https://hust.media/img/icon/internet1.gif" style="width:27px;height:27px">
          <div data-i18n="Layouts">Tạo web site riêng</div>
        </a>
      </li>
      <li class="menu-item <?=$active5;?>">
        <a href="https://hust.media/top-nap/" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Top Nạp</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="https://hust.media/page/" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Thông báo</div>
        </a>
      </li>
      <li class="menu-item ">
        <a href="https://hust.media/aboutus.php" class="menu-link">
          <i class="menu-icon tf-icons bx bx-table"></i>
          <div data-i18n="Tables">Chính sách ứng dụng</div>
        </a>
      </li>
      <!-- Misc -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
      <li class="menu-item">
        <a
          href="https://hust.media/ho-tro/"
       
          class="menu-link"
        >
          <i class="menu-icon tf-icons bx bx-support"></i>
          <div data-i18n="Support">Hỗ trợ</div>
        </a>
      </li>
    </ul>
  </aside>

<div class="layout-page">
  <nav
  class="
  sticky-top 
   flex-wrap
    flex 
    items-center
    justify-between
    w-full
    py-1
    md:py-0
    px-2
    text-lg text-gray-700
    bg-white
  "
>
<div  class=" layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
    <svg xmlns="http://www.w3.org/2000/svg" id="menubutton" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
  </a>
 
</div>
  <div class="inline-flex">
    <button @click="back" class="text-break bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-mot rounded-l">
   <h5>Trước</h5>   
    </button>
    
    <button @click="next"  class="text-break bg-gray-300 hover:bg-gray-400 text-gray-800 font-bold py-1 px-mot rounded-r">
      <h5>Next</h5>   
    </button>

<a href="https://hust.media/home/" >
  <div class="text-break bg-pink-200 hover:bg-pink-300 text-gray-800 font-bold px-mot rounded-r  " style="text-align: justify">
    <h6> Hust<br> Media</h6> 
    </div>
</a>
<div v-if="myMoney != null"  class="lienket ">
  <router-link  to="/naptien">

    <div  class="rounded-pill  bg-blue-500"   >
    &nbsp;       <span  class="text-break h6 font-weight-bold mb-3" style="color: pink;" id="my_vnd">{{myMoney }}</span>

    <img 
      src="https://hust.media/img/icon/coin.webp" class="rounded-circle" 
      style="width: 25px; height: 25px; display: inline;"   >
    <!-- <div class="absolutenav ">  </div>   -->
  </div>
  </router-link>
  </div>
  </div>
  <div  @click="doSomething" class="py-2 px-2" >     
        <svg 
      xmlns="http://www.w3.org/2000/svg"
      id="menubutton"
      class="h-6 w-6 cursor-pointer md:hidden block"
      fill="none"
      viewBox="0 0 24 24"
      stroke="currentColor"
    
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        stroke-width="2"
        d="M4 6h16M4 12h16M4 18h16"
      />
    </svg>
    </div>
 <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu2">
    <ul
      class="
        pt-4
        text-base text-gray-700
        md:flex
        md:justify-between 
        md:pt-0"
    >
    <li>
      <router-link class="md:p-4 py-2 block hover:text-purple-400" to="/home/">Trang chủ</router-link> 
    </li>


      <div class="relative inline-flex">
        <svg class="w-2 h-2 absolute topok right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
        <button  class=" border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
        rút gọn link </button>
          <!-- <option>Lịch sử</option> -->
          <!-- <option>   <router-link class="md:p-4 py-2 block hover:text-purple-400"  to="/test">Lịch sử chuyển tiền</router-link> </option> -->
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><router-link class="dropdown-item"  to="/link">lấy link rút gọn</router-link></li>
            <li><router-link class="dropdown-item"  to="/order">Lịch sử đơn hàng</router-link></li>
          </ul>
       
      </div>
      <div class="relative inline-flex">
        <svg class="w-2 h-2 absolute topok right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg>
        <button  class=" border border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
        type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" >
        Game  </button>
          <!-- <option>Lịch sử</option> -->
          <!-- <option>   <router-link class="md:p-4 py-2 block hover:text-purple-400"  to="/test">Lịch sử chuyển tiền</router-link> </option> -->
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><router-link class="dropdown-item"  to="/game">Thử vân may</router-link></li>
            <li><router-link class="dropdown-item"  to="/momo"> Momo</router-link></li>
          
          </ul>
       
      </div>
      <li>
        <router-link class="md:p-4 py-2 block hover:text-purple-400" to="/profile">Tài khoản của tôi</router-link>
      </li>
      <li>
        <router-link class="md:p-4 py-2 block hover:text-purple-400" to="/testcode">Test tính năng</router-link>
      </li>
   
      <li>
        <router-link class="md:p-4 py-2 block hover:text-purple-400" to="/aboutus">About Us</router-link>
      </li>
    </ul>
  </div>

</nav>
<div class="layout-overlay layout-menu-toggle"></div>
<router-view :key="$route.fullPath" />
</div>

</div>
</div>

<div class="floatingButtonWrap itemoknav"    :class="{ hide: isHide }">  
  <div  id="getMessage" class="floatingButtonInner">
  <div class="message2">   
                <h2 class="text-pink"><div class="message"> Hỗ    Trợ    </div></h2> </div>
    <a href="#" class="floatingButton">
          
          <!-- <i class="fa fa-plus icon-default">
          
          </i> -->
          <div class="chatokluon">

            <svg class="svg-inline--fa fa-comment" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="comment" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path class="" fill="currentColor" d="M512 240c0 114.9-114.6 208-256 208c-37.1 0-72.3-6.4-104.1-17.9c-11.9 8.7-31.3 20.6-54.3 30.6C73.6 471.1 44.7 480 16 480c-6.5 0-12.3-3.9-14.8-9.9c-2.5-6-1.1-12.8 3.4-17.4l0 0 0 0 0 0 0 0 .3-.3c.3-.3 .7-.7 1.3-1.4c1.1-1.2 2.8-3.1 4.9-5.7c4.1-5 9.6-12.4 15.2-21.6c10-16.6 19.5-38.4 21.4-62.9C17.7 326.8 0 285.1 0 240C0 125.1 114.6 32 256 32s256 93.1 256 208z"></path></svg>
        </div>
      </a>
     
                  
      <ul class="floatingMenu">
      <li>
              <a href="https://t.me/dangbaiok"> Nhóm thảo luận </a>
          </li>
             <li>
              <a href="https://t.me/hustmedia"> Nhắn tin với admin </a>
          </li>
           <li>
              <a href="https://www.facebook.com/groups/3847726625345377"> Liên hệ facebook </a>
          </li>
          <li>
              <a href="https://zalo.me/g/vzufiz588"> Nhóm zalo  </a>
          </li>
          <li>
              <a href="https://t.me/freefltiktok">  Tính năng mới </a>
          </li>
         </ul>
  </div>
</div>
<!-- partial -->

</body>
</html>
</div>
<cronprofile  />
</template>
<style>
.itemoknav {
  opacity: 1;
  transform: translateY(0);
}

.itemoknav.hide {
  opacity: 0;
  transform: translateY(50px);
  transition: opacity 0.5s, transform 0.5s;
}
.my-pill {
  border-radius: 0.25rem; /* Giảm kích thước bo tròn đi 50% so với lớp rounded-pill mặc định */
  display: inline-block; /* Để phần tử hiển thị trên cùng một dòng với các phần tử khác */
  padding: 0.5rem; /* Thêm khoảng cách lề vào phần tử để giữ cho nó có cùng kích thước với các phần tử khác */
}
.absolutenav {
  position: absolute;
  right: 65px;
    top: 2px;
}

.chatokluon{
  width: 47px;
  height: 3rem;
  bottom: -30 ;
  font-weight: 900 ;
}
.message2 {
  
  display: block;
   width: 247px;
   height: 56px;
   text-align: center;
  

   line-height: 50px;
   position: absolute;
  
   bottom: -17px;
   right: -20px;
   /*border: 5px solid #b2bedc;*/
   /* opacity: 0.3; */
   opacity: 1;
   transition: all 0.4s;
  
}
.floatingButtonWrap {
bottom: 79px;
}
.floatingButtonWrap {
display: block;
position: fixed;
bottom: 66px;
right: 45px;
z-index: 999999999;
}

.floatingButtonInner {
position: relative;
}

.floatingButton {
display: block;
width: 60px;
height: 60px;
text-align: center;
background: -webkit-linear-gradient(45deg, #8769a9, #507cb3);
background: -o-linear-gradient(45deg, #8769a9, #507cb3);
background: linear-gradient(45deg, #8769a9, #507cb3);
color: #fff;
line-height: 50px;
position: absolute;
border-radius: 50% 50%;
bottom: 0px;
right: 0px;
border: 5px solid #b2bedc;
/* opacity: 0.3; */
opacity: 1;
transition: all 0.4s;
}

.floatingButton .fa {
font-size: 25px !important;
height: 90px; /* Important */ 
line-height: 45px; /* Important */ 

}

.floatingButton.open,
.floatingButton:hover,
.floatingButton:focus,
.floatingButton:active {
opacity: 1;
color: #fff;
}


.floatingButton .fa {
transform: rotate(0deg);
transition: all 0.4s;
height: 45px; /* Important */ 
line-height: 45px; /* Important */ 
}

.floatingButton.open .fa {
transform: rotate(225deg);
}

.floatingMenu {
position: absolute;
bottom: 60px;
right: 0px;
/* width: 200px; */
display: none;
}

.floatingMenu li {
width: 100%;
float: right;
list-style: none;
text-align: right;
margin-bottom: 5px;
}

.floatingMenu li a {
padding: 8px 15px;
display: inline-block;
background: #ccd7f5;
color: #6077b0;
border-radius: 5px;
overflow: hidden;
white-space: nowrap;
transition: all 0.4s;
/* -webkit-box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.22);
box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.22); */
-webkit-box-shadow: 1px 3px 5px rgba(211, 224, 255, 0.5);
box-shadow: 1px 3px 5px rgba(211, 224, 255, 0.5);
}

.floatingMenu li a:hover {
margin-right: 10px;
text-decoration: none;
}
                
.tinhchinh2 {
max-width: 400px !important;
margin: auto;
}
.tinhchinh3 {
--bs-gutter-x: 0rem !important;
}
.container2  {
  width: 88%;
  padding: 10px;
  padding-right: var(--bs-gutter-x, 0.75rem);
  padding-left: var(--bs-gutter-x, 0.75rem);
  margin-right: auto;
  margin-left: auto;padding: 24px;
}
</style>
<style>
.menu-vertical .menu-item .menu-link {
  font-size: 0.8375rem;
}
.menu-vertical .menu-item .menu-toggle {
  padding-right: calc(0rem + 0em);
}
.menu-vertical .menu-item .menu-link, .menu-vertical .menu-block {
  padding: 0.3rem 0.7rem !important;
}
.menu-vertical .menu-header {
  margin: 0rem 0 0rem 0 !important;
  padding: 0.625rem 2rem 0.625rem 2rem;
}
.menu-vertical, .menu-vertical .menu-block, .menu-vertical .menu-inner > .menu-item, .menu-vertical .menu-inner > .menu-header {
  width: 18.25rem !important;
}
@media(min-width: 1200px) {

  .layout-menu-fixed:not(.layout-menu-collapsed) .layout-page,.layout-menu-fixed-offcanvas:not(.layout-menu-collapsed) .layout-page {
      padding-left: 18.25rem!important
  }
}
html:not(.layout-navbar-fixed):not(.layout-menu-fixed):not(.layout-menu-fixed-offcanvas) .layout-page,html:not(.layout-navbar-fixed) .layout-content-navbar .layout-page {
  padding-top: 0!important
}
  .topok
{
top: -6px !important
}
  .colored-toast.swal2-icon-success {
      background-color: #a5dc86 !important;
    }
    
    .colored-toast.swal2-icon-error {
      background-color: #f27474 !important;
    }
    
    .colored-toast.swal2-icon-warning {
      background-color: #f8bb86 !important;
    }
    
    .colored-toast.swal2-icon-info {
      background-color: #3fc3ee !important;
    }
    
    .colored-toast.swal2-icon-question {
      background-color: #87adbd !important;
    }
    
    .colored-toast .swal2-title {
      color: white;
    }
    .colored-toast {
      top: 27px;
    }
    .colored-toast .swal2-close {
      color: white;
    }
    
    .colored-toast .swal2-html-container {
      color: white;
    }
</style>  

<script>
import cronprofile from "./congdong/cronprofile.vue";
import $ from "jquery";
export default {
  // inject: ['message'],
  components: {
    cronprofile
  }, 
  data() {
      return {
        isHide: false,
        sdfsdfsdfsdfv:true ,
        delayTimeout: null ,
        scrollBarHeight : null ,
        chieudaidavuot: null ,
        myMoney:  this.$cookies.get("money")  ,
        button : document.querySelector('#menubutton'),
        showElement: true,
        show: true,
        davuottruoc: null ,
        davuotsau: null ,
    elementOffsetTop: 0,
        menu2 : document.querySelector('#menu')
        
      };
  },
  mounted() {
  this.elementOffsetTop = this.$refs.element.offsetTop;
  window.addEventListener('scroll', this.handleScroll);
},
beforeUnmount() {
  window.removeEventListener('scroll', this.handleScroll);
},
  computed: {

  },
  created() {
    window.addEventListener('scroll', this.handleScroll);
    console.log(this.message) // injected value
    $(document).ready(function(){
      $('.floatingButton').on('click',
          function(e){
            
              e.preventDefault();
              $(this).toggleClass('open');
              if($(this).children('.fa').hasClass('fa-plus'))
              {
                $(".message").html('');
                  $(this).children('.fa').removeClass('fa-close');
                  $(this).children('.fa').addClass('fa-plus');
              } 
              else if ($(this).children('.fa').hasClass('fa-close')) 
              {
               
              
                  $(this).children('.fa').removeClass('fa-close');
                  $(this).children('.fa').addClass('fa-plus');
              }
              else 
              {
                
              }
              $('.floatingMenu').stop().slideToggle();
          }
      );
      $(this).on('click', function(e) {
        
          var container = $(".floatingButton");
          // if the target of the click isn't the container nor a descendant of the container
          if (!container.is(e.target) && $('.floatingButtonWrap').has(e.target).length === 0) 
          {
           
              if(container.hasClass('open'))
              {
                  container.removeClass('open');
                  
              }
              if (container.children('.fa').hasClass('fa-close')) 
              {
                
                  container.children('.fa').removeClass('fa-close');
                  container.children('.fa').addClass('fa-plus');
              }
              $('.floatingMenu').hide();
              
          }
        
          // if the target of the click isn't the container and a descendant of the menu
          if(!container.is(e.target) && ($('.floatingMenu').has(e.target).length > 0)) 
          {
            
              $('.floatingButton').removeClass('open');
              $('.floatingMenu').stop().slideToggle();
          } 
      });
  });
  setInterval(() => {    
      this.myMoney =  this.$cookies.get("money") ;
                  }, 1000 );  
  },
  methods: {
    onScroll() {

      const scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
      if (scrollPos > 0) {
        console.log(1);
        this.isHide = true;
// Lấy chiều cao của thanh cuộn (scroll bar)
this.scrollBarHeight = window.pageYOffset;

// Lấy chiều cao của trang (khoảng cách từ điểm trên cùng của trang tới điểm cuối cùng của trang)
const pageHeight = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);

// Tính khoảng cách từ điểm trên cùng của trang tới điểm trên cùng của trang khi chưa vuốt xuống
const distanceToTop = pageHeight - this.scrollBarHeight;
// console.log(this.scrollBarHeight)
this.davuotsau = this.scrollBarHeight ;
if ( this.davuottruoc == null )
{
  this.davuottruoc = this.scrollBarHeight ;
}
else
{
this.chieudaidavuot =  this.davuotsau -  this.davuottruoc ;

  if ( this.scrollBarHeight  < 27 ||  this.chieudaidavuot < 27  )
{
  clearTimeout(this.delayTimeout);
    this.isHide = false;
  this.showElement = true;
  this.sdfsdfsdfsdfv = true;
       
        console.log(this.chieudaidavuot) ;
}


}


      } else {
        // console.log(2);
        // this.isHide = false;
        // this.showElement = true;
      }
    },
    addNewTimeout()
    { 
      const self = this;
      console.log(self.sdfsdfsdfsdfv)
if ( this.sdfsdfsdfsdfv === false )
{
  console.log(4);
  this.showElement = false;
  this.sdfsdfsdfsdfv = true;
}
    },
    handleScroll() {

      
      this.onScroll();
    const currentScrollPosition = window.scrollY;
    const elementTop = this.elementOffsetTop;
    if (currentScrollPosition > elementTop) {
      // this.showElement = false;
      // this.isHide = true;
    } 
  if (currentScrollPosition < this.previousScrollPosition) {
    this.davuottruoc = null  ;
    console.log(2);
    clearTimeout(this.delayTimeout);
    this.isHide = false;
    this.sdfsdfsdfsdfv = true;
        this.showElement = true;
  }
  else if (this.scrollBarHeight  > 27 && this.chieudaidavuot > 27  )
  {
    console.log(3);
if (this.delayTimeout) {
  clearTimeout(this.delayTimeout);
}
this.sdfsdfsdfsdfv = false;
this.delayTimeout = setTimeout(() => {
  this.addNewTimeout() ;
}, 500);
  }
  this.previousScrollPosition = currentScrollPosition;
  },
back(){
history.back() ;
}
,
tap1(){
  window.location.href = "https://hust.media";
},
tap2(){
  window.location.href = 'https://hust.media/menu' ;
},
tap3(){
this.$router.push('/history') 
},
tap4(){
this.$router.push('/profile') 
},
next(){
history.forward() ;
},
    doSomething()
  {
   
      // const button = document.querySelector('#menubutton');
// const menu = document.querySelector('#menu');

menu2.classList.toggle('hidden');




  
  },


  }
}
</script>

<style>
.modal-backdrop
{
  --bs-backdrop-zindex: 0 !important;
  z-index: 0 !important;
}
  .okbaybe{flex-wrap: inherit;}
</style>