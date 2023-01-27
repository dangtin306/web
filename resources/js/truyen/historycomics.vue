<template>
    <div class="users">
        <div class="loading" v-if="loading">
            Loading...
        </div>
        <div v-if="users">
        <form id="search">
            Search <input name="query" v-model="searchQuery">
          </form>
          <DemoGrid
            :data="gridData"
            :columns="gridColumns"
            :nametable="nametable"
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
        <br><br><br><br>
    </div>
  </template>
  <script>
  import Swal from 'sweetalert2' ;
  import axios from 'axios';
  import DemoGrid from '../truyen/historytable.vue'
  export default {
    components: {
    DemoGrid
  },
  data: () => ({
    loading: false,
            users: null,
            error: null,
    searchQuery: '',
    nametable: ['Tên truyện', 'Thời gian đọc','Liên kết đọc'],
    gridColumns: ['url', 'createdate','api_url'],
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
                .post('https://vip.hust.media/order', {
                  apikey: apikey ,
                  chedo: 'historycomics'
    })
                .then(response => {
                       this.loading = false;
              this.users = response.data  ;
this.info = response.data ,
      this.status = this.info.status     ,
      this.message = this.info.message  
      if ( this.status == 10  )
      {
        Swal.fire({
  title: this.message ,
  heightAuto : false,
 
});
setTimeout(() => {     
    this.$router.push('/thankuser');  }, 500) ;
      }
      else
      {
        console.log(this.info);
              this.gridData  = this.info ;

              var Target  = response.data[0] ;
              console.log(this.gridData);
      }
             
                });
        },
    
    }
  }
  </script>