<template>
  <!-- <div >
    
  
    <router-link class="btn btn-outline-danger" to="/">Home</router-link> |
    <router-link class="btn btn-outline-danger"  to="/time">Hẹn giờ</router-link> |
    <router-link class="btn btn-outline-danger" to="/test">Lịch sử chuyển tiền</router-link> |
    <router-link class="btn btn-outline-danger" to="/game">Game</router-link> | 
    <router-link class="btn btn-outline-danger" to="/okluon">Hướng dẫn sử dụng</router-link> |
    <router-link class="btn btn-outline-danger" to="/testcode">Test tính năng</router-link>
  </div> -->
  <nav class="fixed-bottom navbar-light " >
    <link rel="stylesheet" href="https://tuongtac.fun/style.css">

    <div class="container2 ">
    <div class="tinhchinh2">
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
  

      <li class="menu-item" style="">
        <a  class="menu-link  menu-toggle">
        <img src="https://tuongtac.fun/img/icon/nap.webp " style="width:27px;height:27px">
        <div data-i18n="Analytics">Rút tiền và nạp tiền </div>
        </a>
        <ul class="menu-sub">
        <li>
          <router-link to="/naptien" class="menu-link layout-menu-toggle btn-sm  btn-outline-primary dropdown-item"> <img src="https://tuongtac.fun/img/icon/nap.webp " style="width:20px;height:20px;bg-white ; "> Nạp tiền
        <i class="ni ni-check-bold"></i>
      </router-link>
        <a href="https://hust.media/ruttien.php" class="menu-link layout-menu-toggle btn-sm  btn-outline-primary dropdown-item"> <img src="https://tuongtac.fun/img/icon/nap.webp " style="width:20px;height:20px;bg-white ; "> Rút tiền

        </a>
        </li>
        </ul>
        </li>
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Dịch vụ </span>
          </li>
      <li class="menu-item ">
        <a href="https://hust.media/home/" class="menu-link">
        <img src="https://tuongtac.fun/img/icon/tiktok2.gif" style="width:32px;height:32px">
        <div data-i18n="Analytics">Tăng tương tác mạng xã hội</div>
        </a>
        </li>
      <li class="menu-item ">
        <router-link class="menu-link layout-menu-toggle"   to="/doithe">
        <img src="data:image/png;base64,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" style="width:27px;height:27px">
        <div data-i18n="Analytics">Đổi thẻ sang tiền việt</div>
      </router-link>
        </li>
      <li class="menu-item">
        <a class="menu-link"  href="https://hust.media/themotp.php">
        <img src="https://tuongtac.fun/img/icon/4298126.png" style="width:27px;height:27px">
        <div data-i18n="Analytics">Thuê sim nhận code lấy mã otp</div>
      </a>
        </li>
      <li class="menu-item ">
        <router-link class="menu-link layout-menu-toggle"  to="/okluon">
          <img src="https://tuongtac.fun/img/icon/giphy (7).gif"
         style="width:27px;height:27px">
          <div data-i18n="Analytics">Hướng dẫn sử dụng</div>
        </router-link>
      </li>
      <li class="menu-item ">
        <router-link class="menu-link layout-menu-toggle"  to="/orders">
        <img src="https://tuongtac.fun/img/icon/telegram.png" style="width:27px;height:27px">
        <div data-i18n="Analytics">Tăng mem Telegram Việt Nam</div>
      </router-link>
        </li>
      <!-- Components -->
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Giải trí</span></li>
      <!-- Cards -->
      <li class="menu-item">
        <router-link class="menu-link layout-menu-toggle"  to="/history">
        <img src="https://tuongtac.fun/img/icon/history.svg" style="width:27px;height:27px">
        <div data-i18n="Basic">Nhật ký đơn hàng</div>
      </router-link>
        </li>
      <li class="menu-item">
        <router-link class="menu-link layout-menu-toggle"  to="/id">
        <img src="https://tuongtac.fun/img/icon/idcards.png" style="width:27px;height:27px">
          <div data-i18n="Basic">Tìm lấy id facebook , tiktok , instagram</div>
         </router-link>
      </li>
      <li class="menu-item">
        <router-link  to="/truyen-tranh/home" class="menu-link layout-menu-toggle">
        <img src="https://tuongtac.fun/img/icon/zero-two-icon.gif" style="width:27px;height:27px">
        <div data-i18n="Basic">Đọc truyện tranh :)</div>
      </router-link>
        </li>
      <li class="menu-item">
        <a href="/game/index.php" class="menu-link">
        <img src="https://tuongtac.fun/img/icon/images.png" style="width:27px;height:27px">
          <div data-i18n="Basic">Chơi game vui vẻ</div>
        </a>
      </li>
      
 
      <li class="menu-header small text-uppercase"><span class="menu-header-text">Thông tin &amp; Thêm</span></li>
      <li class="menu-item">
            <a href="/apismm.php" class="menu-link">
            <img src="https://tuongtac.fun/img/icon/source.gif" style="width:27px;height:27px">
              <div data-i18n="Without navbar">Api mua dịch vụ</div>
            </a>
          </li>
          <li class="menu-item <?=$active1;?>">
        <a href="https://github.com/dangtin306" class="menu-link">
        <img src="https://tuongtac.fun/img/icon/internet1.gif" style="width:27px;height:27px">
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
      src="https://tuongtac.fun/img/icon/coin.webp" class="rounded-circle" 
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
<router-view :key="$route.path" />
</div>

</div>
</div>

<div class="floatingButtonWrap">  
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
              <a href="https://t.me/freetiktokfb"> Liên hệ Hỗ trợ </a>
          </li>
             <li>
              <a href="https://t.me/hustmedia"> Liên kết hỗ trợ zalo </a>
          </li>
           <li>
              <a href="https://www.facebook.com/groups/3847726625345377"> Liên hệ facebook </a>
          </li>
          <li>
              <a href="https://zalo.me/g/vzufiz588"> Nhóm zalo  </a>
          </li>
          <li>
              <a href="https://zalo.me/g/mvezii813">  liên hệ phụ </a>
          </li>
         </ul>
  </div>
</div>
<!-- partial -->

</body>
</html>
</template>
<style>
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
  .topok
{
top: -6px !important
}
</style>  

<script>
import $ from "jquery";
import Orders from './order/orders.vue';
export default {
  // inject: ['message'],

  data() {
      return {
        myMoney:  this.$cookies.get("money")  ,
        button : document.querySelector('#menubutton'),
        menu2 : document.querySelector('#menu')
      };
  },
 
  computed: {

  },
  created() {
 
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
back(){
history.back() ;
}
,
tap1(){
this.$router.push('/home/') 
},
tap2(){
this.$router.push('/okluon') 
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