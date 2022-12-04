<template>
   
</template>

<script>

    export default {
      data() {
          return {
        
          };
      },

      created() {
       var url = location.href  ;
var splitter = '/truyenchuyen/' ;


var urlsplit = url.split(splitter)[1];
   var ewjhrfjwehfjkjewfj = '/truyen-tranh/' + urlsplit ;
       this.$router.push({  path: ewjhrfjwehfjkjewfj  }) ;

      },
      
   
   
  mounted() {
    // var size = window.innerHeight / 30 ;


  }
    }
    </script>