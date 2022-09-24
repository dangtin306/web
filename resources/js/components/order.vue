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
    </div>
  </template>
  <script>
  import axios from 'axios';
  import DemoGrid from './Grid.vue'
  export default {
    components: {
    DemoGrid
  },
  data: () => ({
    loading: false,
            users: null,
            error: null,
    searchQuery: '',
    gridColumns: ['url', 'money','amount','status','createdate'],
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
                .post('/order2', {
                  apikey: apikey 
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