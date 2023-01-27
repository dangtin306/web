<template>
    <div class=" justify-center">
        <div>
            <a  target="_blank" href="https://apps.apple.com/app/hust-media/id6444485454">
            <!-- https://developer.apple.com/app-store/marketing/guidelines/#section-badges -->
            <div class="flex mt-3 w-full h-70 bg-black text-white rounded-xl items-center justify-center">
                <div class="mr-3">
                    <svg viewBox="0 0 384 512" width="70" >
                        <path fill="currentColor" d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"/>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl">Download on the</div>
                    <div class="text-5xl font-semibold font-sans -mt-1">App Store</div>
                </div>
            </div>
        </a>
    
        <a  target="_blank" href="https://play.google.com/store/apps/details?id=com.hm.hustmedia">
            <!-- https://play.google.com/intl/en_us/badges/ -->
            <div class="flex mt-3 w-full h-71 bg-black text-white rounded-lg items-center justify-center">
                <div class="mr-3">
                    <svg viewBox="30 336.7 120.9 129.2" width="65">
                        <path fill="#FFD400" d="M119.2,421.2c15.3-8.4,27-14.8,28-15.3c3.2-1.7,6.5-6.2,0-9.7  c-2.1-1.1-13.4-7.3-28-15.3l-20.1,20.2L119.2,421.2z"/>
                        <path fill="#FF3333" d="M99.1,401.1l-64.2,64.7c1.5,0.2,3.2-0.2,5.2-1.3  c4.2-2.3,48.8-26.7,79.1-43.3L99.1,401.1L99.1,401.1z"/>
                        <path fill="#48FF48" d="M99.1,401.1l20.1-20.2c0,0-74.6-40.7-79.1-43.1  c-1.7-1-3.6-1.3-5.3-1L99.1,401.1z"/>
                        <path fill="#3BCCFF" d="M99.1,401.1l-64.3-64.3c-2.6,0.6-4.8,2.9-4.8,7.6  c0,7.5,0,107.5,0,113.8c0,4.3,1.7,7.4,4.9,7.7L99.1,401.1z"/>
                    </svg>
                </div>
                <div>
                    <div class="text-2xl">GET IT ON</div>
                    <div class="text-5xl font-semibold font-sans -mt-1">Google Play</div>
                </div>
            </div>
        </a>
        <a  target="_blank" href="https://hust.media">
            <div class="flex mt-3 w-full h-70 bg-black text-white rounded-lg items-center justify-center">
                <div class="mr-3">
                    <img viewBox="30 336.7 120.9 129.2" width="70" src="data:image/jpeg;base64,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">
              
                </div>
                <div>
                    <div class="text-2xl">OPEN ON</div>
                    <div class="text-5xl font-semibold font-sans -mt-1">Browser</div>
                </div>
            </div>

        </a>
        </div>
    </div>
</template>