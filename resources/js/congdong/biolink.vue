<template>
    <body
    class="
      antialiased
      bg-gradient-to-r
      from-pink-300
      via-purple-300
      to-indigo-400
    "
  >
  
    <div class='flex items-center py-7 flex-col min-h-screen '>
        <!-- <div class='break-inside relative overflow-hidden flex flex-col justify-between space-y-2 text-sm rounded-xl max-w-[23rem] p-4 mb-4 bg-[#5E17F4] text-white'>
            <span class='uppercase text-xs text-[#D2BDFF]'>Bước 1 lấy link liên kết</span>
            <div class='flex flex-row items-center space-x-3'>
                <svg width='58' height='56' viewBox='0 0 52 50' fill='none' xmlns='http://www.w3.org/2000/svg'>
                <path d='M32.6458 38.4379C33.9918 37.1198 33.2655 34.0922 31.0668 30.5948C31.8658 30.4707 32.6129 30.281 33.178 29.9905C35.2112 28.9466 36.584 27.044 37.6232 25.0759C38.7403 22.9647 39.49 20.644 40.9477 18.7215C41.1939 18.3966 41.44 18.1052 41.6853 17.831C44.8304 18.206 47.3412 18.8784 47.3412 18.8784L48.3006 16.4534C47.0896 16.0212 45.848 15.6791 44.586 15.4302C45.3591 14.9931 45.8635 14.8569 45.8635 14.8569L44.9543 12.4121C43.4966 13.025 42.3136 13.9293 41.323 15.0121C37.6206 14.806 33.8921 15.5397 30.9506 17.8086C28.7389 19.5155 27.2447 21.8819 25.839 24.2491C24.5935 23.0333 23.2671 21.9023 21.8688 20.8638C22.134 20.4302 22.4182 20.0405 22.7242 19.7397C24.5728 17.9293 27.0116 16.7716 28.6115 14.7C31.9742 10.35 29.5146 3.53103 26.7481 0C26.2524 0.475 25.4325 1.16724 24.8155 1.71379C27.7561 4.70948 29.8127 9.95431 27.5082 13.8733C26.2203 16.0638 23.8404 17.4379 22.1764 19.3198C21.8887 19.6466 21.6313 20.0603 21.3982 20.5172C17.0466 17.4129 13.053 16.1638 11.4704 17.7138C11.3133 17.8737 11.1838 18.0584 11.0874 18.2603L11.0813 18.2543L11.0388 18.3776C10.9799 18.5112 10.9261 18.65 10.8897 18.8017L0 50L31.774 38.95L31.7653 38.9414C32.1068 38.8319 32.4075 38.6707 32.6458 38.4379ZM6.32065 45.9759L3.66863 44.7465L5.45831 39.6172L13.6666 43.4207L6.32065 45.9759ZM21.0116 40.8664L7.24972 34.4879L9.0394 29.3595L19.3233 34.494C13.1847 30.5198 10.8291 24.2293 10.8291 24.2293L11.441 22.4767C12.5286 25.2138 14.9215 28.6224 18.2097 31.8397C21.5256 35.0862 25.0399 37.4379 27.8488 38.4888L21.0116 40.8664ZM26.2975 24.7112C27.7344 22.6621 29.2156 20.594 31.2748 19.1224C33.2352 17.7207 36.4176 17.4647 39.4345 17.6328C38.4153 19.4034 37.6622 21.3681 36.9861 23.2552C36.1689 25.5397 35.0734 27.9086 32.9847 29.3095C32.4214 29.6871 31.6318 29.9629 30.7886 30.1672C29.6298 28.4009 28.1097 26.5336 26.2975 24.7112Z' fill='white' />
                <path d='M18.2287 16.3793C19.0971 16.3793 16.4937 13.7931 16.9287 11.525C18.5962 11.3974 22.4078 12.1448 20.1892 9.11379C22.699 9.55345 23.9991 7.68966 21.6296 5.92328C22.4182 5.97845 23.6437 4.49914 22.764 4.31207C19.9456 3.7181 18.8423 5.23448 20.6312 7.42155C18.7505 7.07328 17.2173 7.9431 18.63 9.89655C13.1994 9.22328 16.2891 16.3793 18.2287 16.3793ZM36.8726 14.081C37.6864 13.7155 36.3058 11.3009 35.8569 10.6836C39.2915 10.3181 39.1615 9.3 37.0078 7.11897C42.8631 7.31466 37.1889 4.00431 37.9846 2.69397C38.6736 1.55776 40.7874 2.74914 40.5915 2.11638C39.9311 0 33.6668 1.43103 37.631 5.38276C34.1712 5.45 33.8393 6.575 36.4176 8.9069C31.9265 8.95603 35.5908 14.6552 36.8726 14.081ZM51.7378 22.6078C50.3667 22.9897 50.1553 22.8466 50.3381 24.2043C47.1713 22.7543 43.8207 20.7379 45.854 26.0802C42.2573 23.95 42.4367 25.8155 41.7641 28.8853C40.8888 28.2069 39.6451 26.419 39.6451 26.419L38.3278 27.5319C38.3278 27.5319 40.7414 30.9181 41.9331 30.7259C42.9809 30.5578 43.5512 28.5879 43.6093 26.8517C46.946 28.2526 48.5432 28.4397 47.017 24.3431C49.6846 25.8336 52.9555 27.1483 51.7378 22.6078ZM3.50916 7.27328L5.96011 9.71207L3.50916 12.15L1.05734 9.71207L3.50916 7.27328ZM24.1005 26.5181L21.6478 28.956L19.1959 26.5164L21.6486 24.0776L24.1005 26.5181ZM13.1908 3.44828L15.6417 5.88621L13.1899 8.32586L10.7389 5.88621L13.1908 3.44828ZM39.8765 37.4862L37.4238 35.0474L39.8748 32.6078L42.3275 35.0466L39.8765 37.4862ZM34.4113 45.85L31.9603 43.4121L34.4113 40.9733L36.8631 43.4121L34.4113 45.85ZM45.1649 47.7759L42.7123 45.3371L45.1623 42.8974L47.615 45.3362L45.1649 47.7759ZM47.6159 36.669L45.1649 34.2302L47.6159 31.7922L50.0668 34.2302L47.6159 36.669ZM43.5243 6.03448L45.9753 8.47241L43.5235 10.9112L41.0725 8.47241L43.5243 6.03448Z' fill='white' />
                </svg>
                <span class='text-base font-medium'>Chúc mừng bạn đã đến lấy link của hust media</span>
            </div>
            <div class='flex justify-between items-center'>
                <span>{{ lienket }}</span>
                <button class='flex items-center justify-center text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
                <span @click="saochep(lienket)">Sao chép liên kết</span>
                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                    <path d='M5 12h13M12 5l7 7-7 7' />
                </svg>
                </button>
            </div>
        </div> -->
        <div class="bg-green-300 shadow-lg pb-3 rounded-b-3xl">
            <div
                class="flex  rounded-b-3xl bg-gray-100 dark:bg-gray-700 space-y-5 flex-col items-center py-7">
             <span
                        class="text-h1">{{ usernamebio }} </span>
                        <div class="container max-w-screen-lg mx-auto">
                            <div>
                        
                              <div class="flex flex-wrap justify-center gap-2">
                                <div v-for="(value, key) in usersocial"  :key="value">
                                    <div v-if="key == 'facebook'">
                                        <a :href="value" target="_blank">
                                            <button class="bg-blue-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                                <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                                  <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" /></svg>
                                              </button>
                                        </a>                                    
                                    </div>
                                    <div v-if="key == 'instagram'">
                                        <a :href="value" target="_blank">
                                            <button class="bg-red-500 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                                <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                                 viewBox="0 0 24 24"><path 
                                                 d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" /></svg>
                                              </button>
                                        </a>                                    
                                    </div>
                                    <div v-if="key == 'tiktok'">
                                        <a :href="value" target="_blank">
                                            <button class="bg-pink-300 p-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="w-6 h-6 fill-current" viewBox="0 0 250 250" xml:space="preserve">
            
            
                                                    <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;" transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)" >
                                                        <path d="M 36.203 35.438 v -3.51 c -1.218 -0.173 -2.447 -0.262 -3.677 -0.268 c -15.047 0 -27.289 12.244 -27.289 27.291 c 0 9.23 4.613 17.401 11.65 22.342 c -4.712 -5.039 -7.332 -11.681 -7.328 -18.58 C 9.559 47.88 21.453 35.784 36.203 35.438" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,242,234); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                        <path d="M 36.847 75.175 c 6.714 0 12.19 -5.341 12.44 -11.997 l 0.023 -59.417 h 10.855 c -0.232 -1.241 -0.349 -2.5 -0.35 -3.762 H 44.989 l -0.025 59.419 c -0.247 6.654 -5.726 11.993 -12.438 11.993 c -2.015 0.001 -4 -0.49 -5.782 -1.431 C 29.079 73.238 32.839 75.171 36.847 75.175 M 80.441 23.93 v -3.302 c -3.989 0.004 -7.893 -1.157 -11.232 -3.339 c 2.928 3.371 6.869 5.701 11.234 6.641" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,242,234); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                        <path d="M 69.209 17.286 c -3.272 -3.744 -5.075 -8.549 -5.073 -13.522 h -3.972 C 61.203 9.318 64.472 14.205 69.209 17.286 M 32.526 46.486 c -6.88 0.008 -12.455 5.583 -12.463 12.463 c 0.004 4.632 2.576 8.88 6.679 11.032 c -1.533 -2.114 -2.358 -4.657 -2.358 -7.268 c 0.007 -6.88 5.582 -12.457 12.463 -12.465 c 1.284 0 2.515 0.212 3.677 0.577 V 35.689 c -1.218 -0.173 -2.447 -0.262 -3.677 -0.268 c -0.216 0 -0.429 0.012 -0.643 0.016 v 11.626 C 35.014 46.685 33.774 46.49 32.526 46.486" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,0,79); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                        <path d="M 80.441 23.93 v 11.523 c -7.689 0 -14.81 -2.459 -20.627 -6.633 v 30.13 c 0 15.047 -12.24 27.289 -27.287 27.289 c -5.815 0 -11.207 -1.835 -15.639 -4.947 c 5.151 5.555 12.384 8.711 19.959 8.709 c 15.047 0 27.289 -12.242 27.289 -27.287 v -30.13 c 6.009 4.321 13.226 6.642 20.627 6.633 V 24.387 c -1.484 0 -2.927 -0.161 -4.323 -0.46" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(255,0,79); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                        <path d="M 59.813 58.949 v -30.13 c 6.009 4.322 13.226 6.642 20.627 6.633 V 23.93 c -4.364 -0.941 -8.305 -3.272 -11.232 -6.644 c -4.737 -3.081 -8.006 -7.968 -9.045 -13.522 H 49.309 l -0.023 59.417 c -0.249 6.654 -5.726 11.995 -12.44 11.995 c -4.007 -0.004 -7.768 -1.938 -10.102 -5.194 c -4.103 -2.151 -6.676 -6.399 -6.681 -11.032 c 0.008 -6.88 5.583 -12.455 12.463 -12.463 c 1.282 0 2.513 0.21 3.677 0.577 V 35.438 C 21.453 35.784 9.559 47.88 9.559 62.713 c 0 7.173 2.787 13.703 7.328 18.58 c 4.578 3.223 10.041 4.95 15.639 4.945 C 47.574 86.238 59.813 73.996 59.813 58.949" style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(0,0,0); fill-rule: nonzero; opacity: 1;" transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                                    </g>
                                                    </svg>
                                              </button>
                                        </a>                                    
                                    </div>
                                  </div>
                               
                        
                               
                                
                              </div>
                            </div>
                          </div>
            </div>
           
               

            <div
                class="grid px-7 py-2  items-center justify-around grid-cols-2 gap-4 divide-x divide-solid ">
                <div class="col-span-1 flex flex-col items-center ">
                    <span class="text-2xl font-bold dark:text-gray-500">{{ money }} </span>
                    <span class="text-lg font-medium 0">Người theo dõi</span>
                </div>
                <!-- <div class="col-span-1 px-3 flex flex-col items-center ">
                    <span class="text-2xl font-bold dark:text-gray-500">
                       Cao Cấp</span>
                    <span class="text-lg font-medium">Cấp độ</span>
                </div> -->
                <div class="col-span-1 px-3 flex flex-col items-center ">
                    <span class="text-2xl font-bold dark:text-gray-500">
               {{ total_nap }}        </span>
                    <span class="text-lg font-medium">Follow tài khoản này</span>
                </div>
 
            </div>
    
        </div>
        
        <div  class="max-w-7xl mx-2 py-2 mb-2">
            <div class=" mb-2" v-for="user in useraddlink" :key="user.firstName">
            <a :href="user.lienket" target="_blank">
            <div class="relative group">
              <div class="absolute -inset-1 bg-gradient-to-r 
              from-purple-600 to-pink-600 rounded-lg blur opacity-25 
              group-hover:opacity-100 transition duration-1000 
              group-hover:duration-200"></div>
              <div class="relative px-3 py-3 bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 ring-1 ring-gray-900/5 
             rounded-2xl leading-none flex items-top justify-start space-x-3">
             
             
             
                <div class="space-y-2">
                  
                  <p class="text-lg text-slate-1000">
                    <!-- <img src="https://inkythuatso.com/uploads/images/2021/11/mb-bank-logo-inkythuatso-01-10-09-01-10.jpg"    class="h-7 w-7 cananh"> -->
                  
               Mô tả: {{ user.mota }}
                  
                  </p>
                  <div class="block text-indigo-400 group-hover:text-slate-800 transition duration-200" target="_blank">
                 xem ngay ->   </div>
    
                    <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
                </div>
              
              </div>
           
            </div></a>
        </div>  
          </div>
          <div style="text-decoration: none" >
            <button @click="saochep(usernamebio)" type='button'
            class='flex break-inside bg-white text-black border-2 border-black rounded-3xl px-6 py-3 mb-4 w-full dark:bg-slate-800 dark:text-white'>
            <div class='m-auto'>
              <div class='flex items-center justify-start flex-1 space-x-4'>
                <span class='font-medium mb-[-2px]'>Sao chép link bio </span>
                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='#000000' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                  <path d='M5 12h13M12 5l7 7-7 7' />
              </svg>
              </div>
            </div>
          </button>
        </div>
        <!-- <div v-if="ketqua" >
            <div class='break-inside relative overflow-hidden flex flex-col justify-between space-y-3 text-sm rounded-xl max-w-[23rem] p-4 mb-4 bg-white text-black dark:bg-slate-800 dark:text-white'>
                <h3>{{ketqua}}</h3>
                   </div>
    
        </div> -->
        
        <!-- <div class='break-inside relative overflow-hidden flex flex-col justify-between space-y-3 text-sm rounded-xl max-w-[23rem] p-4 mb-4 bg-white text-black dark:bg-slate-800 dark:text-white'>
            <div class='flex items-center justify-between font-medium'>
                <span class='uppercase text-xs text-green-500'>Bước 2 mở bằng trình duyệt</span>
                <span class='text-xs text-slate-500'>#hustmedia</span>
            </div>
            <div class='flex flex-row items-center space-x-3'>
                <div class='flex flex-none items-center justify-center w-10 h-10 rounded-full bg-green-500 text-white'>
                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                    <polygon points='14 2 18 6 7 17 3 17 3 13 14 2' />
                    <line x1='3' y1='22' x2='21' y2='22' />
                </svg>
                </div>
                <span class='text-base font-medium'>Dùng trình duyệt chrome hoặc safari để mở liên kết cần lấy nha</span>
            </div>
            <div> Nếu bạn đang dùng trình duyệt có thể nhấp phía dưới mở link nhé</div>
            <div class='flex justify-between items-center'>
                <div>
                <dt class='sr-only'>Users</dt>
                <dd class='flex justify-start -space-x-1.5'>
                    <a href='#' class='inline-block -m-1'>
                    <img class='w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800' src='https://randomuser.me/api/portraits/women/46.jpg' alt='avatar' />
                    </a>
                    <a href='#' class='inline-block -m-1'>
                    <img class='w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800' src='https://randomuser.me/api/portraits/men/45.jpg' alt='avatar' />
                    </a>
                    <a href='#' class='inline-block -m-1'>
                    <img class='w-7 h-7 rounded-full ring-2 ring-white dark:ring-slate-800' src='https://randomuser.me/api/portraits/women/47.jpg' alt='avatar' />
                    </a>
                    <span class='inline-block -m-1 rounded-full ring-2 ring-white dark:ring-slate-800'>
                    <svg width='28' height='28' viewBox='0 0 31 31' fill='none' xmlns='http://www.w3.org/2000/svg' class='text-slate-200 dark:text-slate-600'>
                        <path d='M31 15.5C31 24.0604 24.0604 31 15.5 31C6.93959 31 0 24.0604 0 15.5C0 6.93959 6.93959 0 15.5 0C24.0604 0 31 6.93959 31 15.5ZM8.20879 15.5C8.20879 19.5268 11.4732 22.7912 15.5 22.7912C19.5268 22.7912 22.7912 19.5268 22.7912 15.5C22.7912 11.4732 19.5268 8.20879 15.5 8.20879C11.4732 8.20879 8.20879 11.4732 8.20879 15.5Z' fill='currentColor' />
                        <path d='M31 15.5C31 18.049 30.3714 20.5586 29.1698 22.8066C27.9682 25.0547 26.2307 26.9716 24.1113 28.3878C21.9919 29.8039 19.556 30.6755 17.0193 30.9254C14.4826 31.1752 11.9234 30.7956 9.56841 29.8201C7.21345 28.8447 5.1354 27.3035 3.51834 25.3331C1.90128 23.3627 0.795112 21.0239 0.297828 18.5239C-0.199455 16.0239 -0.0725081 13.4398 0.667425 11.0006C1.40736 8.56136 2.73744 6.34225 4.53984 4.53985L10.2876 10.2876C9.43046 11.1448 8.79791 12.2002 8.44602 13.3602C8.09413 14.5202 8.03376 15.7491 8.27025 16.9381C8.50675 18.127 9.03281 19.2393 9.80184 20.1764C10.5709 21.1134 11.5591 21.8464 12.6791 22.3103C13.799 22.7742 15.0161 22.9547 16.2225 22.8359C17.4289 22.7171 18.5874 22.3026 19.5953 21.6291C20.6033 20.9556 21.4295 20.0439 22.001 18.9748C22.5724 17.9058 22.8714 16.7122 22.8714 15.5H31Z' fill='#2BC86A' />
                    </svg>
                    </span>
                </dd>
                </div>
                <button class='flex items-center justify-center text-xs font-medium rounded-full px-4 py-1 space-x-1 border-2 border-black bg-white hover:bg-black hover:text-white text-black dark:bg-slate-800 dark:text-white dark:border-white dark:hover:bg-white dark:hover:text-black'>
                <span @click="molienket" >Xem liên kết</span>
                <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'>
                    <path d='M5 12h13M12 5l7 7-7 7' />
                </svg>
                </button>
            </div>
            </div> -->
    </div>
    </body>
    </template>
    <script>
    import {  collection,  doc , onSnapshot  } from "firebase/firestore" ;
    import Swal from 'sweetalert2' ;
    import db from '../firebase/init.js' ;
         export default {
              data() {
                  return {
                      loading: false,
                      users: null,
                      userss: null,
                      size: null ,
                      ketqua: null ,
                      usernamebio: null,
                      mota: null ,
                      hientruyen: null ,
                      usersocial: null ,
                      error: null,
                      seraddlink: [] ,
              testuseraddlink: [] ,
                      infoBox: null,
                      width:0,
                      height:0
                  };
              },
              created() {
                  this.fetchData();
                  setTimeout( () => {
    this.biolinklienket() ;
    this.biolinksocial() ;
      }, 500);
                  
              },
              methods: {
               
                  fetchData() {
          
                    var url = location.href  ;
        var splitter = 'webapp/' ;
        
        
        var urlsplit = url.split(splitter)[1];
        this.usernamebio = urlsplit ;
        console.log(urlsplit) ;
    } ,
    async biolinklienket() {

   onSnapshot(collection(db, this.usernamebio), (snap) => {
          this.useraddlink = [] ,
          this.testuseraddlink = [] ,
          snap.forEach((doc) => {

          this.testuseraddlink.push(doc.data()) ;
       this.testoj =   this.testuseraddlink[Object.keys(this.testuseraddlink)[Object.keys(this.testuseraddlink).length - 1]] ;
       this.testoj =   JSON.stringify(this.testoj) ;
       if ( this.testoj.indexOf('addlink') > -1 )
       {
        this.useraddlink.push(doc.data()) ;
         console.log( JSON.stringify(this.useraddlink) );
       }
         
          
        })
         

        // this.lienket = snap.data().lienket
        // this.mota = snap.data().mota
      })
},
async biolinksocial() {
       onSnapshot(doc(db, this.usernamebio, 'social'), (snap) => {
        this.usersocial = snap.data() ;
console.log( this.usersocial );
      })

},
saochep(urlsplit) {
        Swal.fire({
  title: 'Sao chép thành công' 
 
})
urlsplit = 'https://vip.hust.media'+'/webapp/'+ urlsplit ;
                navigator.clipboard.writeText(urlsplit);
               
      },
    molienket(){
        window.location.href = this.lienket ;
    }
    
    }}
              
    </script>