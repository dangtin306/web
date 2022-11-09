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
    </div>
  </template>
  <script>
  import axios from 'axios';
  import DemoGrid from '../components/Grid2.vue'
  export default {
    components: {
    DemoGrid
  },
  data: () => ({
    loading: false,
            users: null,
            error: null,
    searchQuery: '',
    gridColumns: ['url', 'money','createdate'],
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