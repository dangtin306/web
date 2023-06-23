<template></template>
<script>
  export default {
    name: "cronprofile",
    data (){
            return {
              ok2 : this.$cookies.get("apikey")  ,
              magiaodich: ''  ,
            }},
created() {
    this.intervalFetchData() ;
    this.btcTrkAPICall();
            },
 methods : {
    testFunction4(response)
    {
     
     const info_response = response.data ;
      const money = info_response.money ;
      document.cookie = `money=${money}`;


    },
    btcTrkAPICall: function () {
              this.chedo = 'checkxu3' ;
              axios    
                  .post('../checkmomo', {
          apikey: this.ok2 ,
      magiaodich: this.magiaodich ,
      chedo: 'checkxu3'
    })  
                  .then(response => (this.testFunction4(response  ))  )  
                  .catch(error => console.log(error) ,
  
                  console.log(this.btctrk) 
                  )    
          },
          intervalFetchData: function () {
              setInterval(() => {    
                  this.btcTrkAPICall();
                  }, 7000 );    
          } ,
 }
        }
</script>