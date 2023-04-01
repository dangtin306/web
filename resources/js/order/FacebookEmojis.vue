<template>
    <div class="flex items-center justify-center ">
      <div v-on:click="selectEmoji('LIKE')" class="facebook-emoji mr-2" v-bind:class="{ 'facebook-emoji-active': selectedEmoji === 'LIKE' }">
        <img :src="'https://cdn.dribbble.com/users/1048364/screenshots/4808898/facebook_like.gif'" :alt="'LIKE'" class="w-12 h-11" />
      </div>
      <div v-on:click="selectEmoji('LOVE')" class="facebook-emoji mr-2" v-bind:class="{ 'facebook-emoji-active': selectedEmoji === 'LOVE' }">
        <img :src="'https://i.pinimg.com/originals/3f/94/76/3f9476d56c7f7bf244bf9ba0b83f19da.gif'" :alt="'LOVE'" class="w-11 h-9" /> <!-- Thay "/heart.png" bằng đường dẫn đến biểu tượng tương ứng -->
      </div>
      <div v-on:click="selectEmoji('CARE')" class="facebook-emoji" v-bind:class="{ 'facebook-emoji-active': selectedEmoji === 'CARE' }">
        <img :src="'https://hust.media/img/icon/thuongthuong.gif'" :alt="'CARE'" class="w-8 h-8" /> <!-- Thay "/care.png" bằng đường dẫn đến biểu tượng tương ứng -->
      </div>
      <div v-on:click="selectEmoji('WOW')" class="facebook-emoji" v-bind:class="{ 'facebook-emoji-active': selectedEmoji === 'WOW' }">
        <img :src="'https://hust.media/img/icon/wow-emoji.gif'" :alt="'WOW'" class="w-10 h-10" /> <!-- Thay "/care.png" bằng đường dẫn đến biểu tượng tương ứng -->
      </div>
      <div v-on:click="selectEmoji('HAHA')" class="facebook-emoji" v-bind:class="{ 'facebook-emoji-active': selectedEmoji === 'HAHA' }">
        <img :src="'https://gifdb.com/images/high/laughing-teary-eye-emoji-s8c8d73quzytzbob.gif'" :alt="'HAHA'" class="w-10 h-10" /> <!-- Thay "/care.png" bằng đường dẫn đến biểu tượng tương ứng -->
      </div>
      <div v-on:click="selectEmoji('ANGRY')" class="facebook-emoji" v-bind:class="{ 'facebook-emoji-active': selectedEmoji === 'ANGRY' }">
        <img :src="'data:image/png;base64,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'" 
        :alt="'ANGRY'" class="w-9 h-9" /> <!-- Thay "/care.png" bằng đường dẫn đến biểu tượng tương ứng -->
      </div>
      <div v-on:click="selectEmoji('SAD')" class="facebook-emoji" v-bind:class="{ 'facebook-emoji-active': selectedEmoji === 'SAD' }">
        <img :src="'https://i.pinimg.com/originals/62/1a/88/621a886cacc055559415a9c7c559996b.gif'" 
        :alt="'SAD'" class="w-12 h-10" /> <!-- Thay "/care.png" bằng đường dẫn đến biểu tượng tương ứng -->
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "FacebookEmojis",
    props: {
      selectedEmoji: {
        type: String,
        required: true
      }
    },
    methods: {
      selectEmoji(value) {
        this.$emit('update:selectedEmoji', value);
      }
    }
  };
  </script>
  
  <style>
  .facebook-emoji {
    cursor: pointer;
    display: flex;
    align-items: center;
    border-radius: 50%;
    padding: 0.2rem;
  }
  
  
  .facebook-emoji-active {
    background-color: pink;
  }
  
  .facebook-emoji img {
    margin-right: 5px;
  }
  </style>
  