<template>
    <div class="users">
        <div class="loading" v-if="loading">
          <div class="l-container ádasdasdasdasd">
            <div  ref="infoBox">
            <div class="b-game-card" >
                <div class="b-game-card__cover">
            <div class="b-game-card__cover" style="background-image: url(https://img.pikbest.com/png-images/20190918/cartoon-snail-loading-loading-gif-animation_2734139.png!bw340);"></div>
          </div></div></div></div>
        </div>
        <div v-if="users">
        <form id="search">
            Search <input name="query" v-model="searchQuery">
          </form>
          <DemoGrid
            :data="gridData"
            :columns="gridColumns"
            :filter-key="searchQuery">
          </DemoGrid>
        <div v-if="error" class="error">
            {{ error }}
        </div>
    </div>
        <!-- <ul v-if="users">
         
          <li v-for="{ url, money ,createdate  } in users">
            <strong>chuyển cho:</strong> {{ url }},
            <strong>số tiền:</strong> {{ money / 1.04 }}
            <strong>Thời gian:</strong> {{ createdate }}
        </li>
               
       
        </ul> -->
        <br><br><br><br><br>
    </div>
  </template>
  <style lang="scss" scoped>
  @import "../components/truyen.scss"; //new scss file from resources/sass directory
</style>
  <script>
  import axios from 'axios';
  import DemoGrid from '../components/Grid2.vue'
  export default {
    components: {
    DemoGrid
  },
  mounted() {
        // var size = window.innerHeight / 30 ;
        var size = this.$refs.infoBox.clientHeight / 20;
       
        this.Height= size + 'px' ;
    
        console.log(this.Height);
    
      },
  data: () => ({
    loading: false,
            users: null,
            error: null,
            infoBox: null,
    searchQuery: '',
    gridColumns: ['service_name','url', 'money','createdate'],
    gridData:''
  }),

    created() {
        this.fetchData();
    },
   
    methods: {
        fetchData() {
         
            this.error = this.users = null;
            this.loading = true;
            const apikey = this.$cookies.get("apikey");
            console.log(apikey);
            axios
                .post('/order', {
                  apikey: apikey ,
                  chedo: 'clonetiktok'
    })
                .then(response => {
                       this.loading = false;
              this.users = response.data  ;
              console.log(this.users);
              this.gridData  = this.users ;

              var Target  = response.data[0] ;
              console.log(this.gridData);
                });
        },
        
    }
  }
  </script>