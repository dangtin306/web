<template>
    <div class="users">
        <div class="loading" v-if="loading">
            Loading...
        </div>
  
        <div v-if="error" class="error">
            {{ error }}
        </div>
  
        <ul v-if="users">
         
          <li v-for="{ url, money ,createdate  } in users">
            <strong>chuyển cho:</strong> {{ url }},
            <strong>số tiền:</strong> {{ money / 1.04 }}
            <strong>Thời gian:</strong> {{ createdate }}
        </li>
               
       
        </ul>
    </div>
  </template>
  <script>
  import axios from 'axios';
  export default {
    data() {
        return {
            loading: false,
            users: null,
            error: null,
        };
    },
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
                  apikey: apikey 
    })
                .then(response => {
                       this.loading = false;
              this.users = response.data  ;
              console.log(this.users);
                });
        },
        
    }
  }
  </script>