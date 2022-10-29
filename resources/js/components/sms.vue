<template>
    <!-- This is an example component -->
  
  
  số xu hiện tại lại là {{money }}
  số điện thoại hiện tại là {{ phonechuan }}

  <div class="text-center">
    <router-link type="button" class="mx-2  btn btn-primary" to="/themsdt">Sửa số điện thoại</router-link>

    
</div>
   
          <div class=" items-center justify-center">

        <table class="table-auto relative w-full border border-separate text-break text-sm">
          <thead class="bg-blue-500 text-white">
            <tr>
              <th class="p-3">Số tiền nạp</th>
              <th class="p-3 text-left">Thực nhận</th>
              <th class="p-3 text-left">Cú pháp</th>
  
  
           
            </tr>
          </thead>
       
        
           
         
                <tbody>
                  <template v-for="item in nhamang"  >
                <tr class="bg-blue-200 lg:text-black" v-if="!item.tongdai" >
                <td class="p-3 font-medium capitalize"> {{ item.tien }}</td>
                <td class="p-3">{{ item.thucnhan }}</td>
                <td class="p-3"  ><div v-bind:id="item.cuphap">{{ item.cuphap }} gửi {{ sonhantin }} <span @click="saochepp(item.cuphap)">
                  <div class="float-right">
                  <button class='text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
               <div v-if="id == item.cuphap ">{{ dasaochep }}</div> <div v-else > Sao chép</div> 
                </button></div>
                </span></div> </td>   </tr></template>
              </tbody>
         
           
         
          
         
        </table>
      </div>

 
  </template>
  
  <script>
    import Swal from 'sweetalert2' ;
    export default {
      data (){
            return {
              ok2 : this.$cookies.get("apikey") ,
              name2 : '',
                urlsplit: '0928889798' ,
                lienket: null ,
                status: null ,
                VIETTEL: 
[{ tongdai: '9029' } ,
  { tien: 'Nạp 10,000' , thucnhan: '+5,000' , cuphap: 'MOZ DK10 3QAFK NT_napxu' }, 
{ tien: 'Nạp 20,000' , thucnhan: '+10,000' , cuphap: 'MOZ DK20 3QAFK NT_napxu' }, 
{ tien: 'Nạp 50,000' , thucnhan: '+25,000' , cuphap: 'MOZ DK50 3QAFK NT_napxu' }, 
{ tien: 'Nạp 100,000' , thucnhan: '+50,000' , cuphap: 'MOZ DK100 3QAFK NT_napxu' }, 
{ tien: 'Nạp 200,000' , thucnhan: '+100,000' , cuphap: 'MOZ DK200 3QAFK NT_napxu' }, 
{ tien: 'Nạp 500,000' , thucnhan: '+250,000' , cuphap: 'MOZ DK500 3QAFK NT_napxu' },
],
VINAPHONE: 
[{ tongdai: '888' } ,
  { tien: 'Nạp 10,000' , thucnhan: '+5,000' , cuphap: 'MOB DK10 AFK NT_napxu' }, 
{ tien: 'Nạp 20,000' , thucnhan: '+10,000' , cuphap: 'MOB DK20 AFK NT_napxu' }, 
{ tien: 'Nạp 50,000' , thucnhan: '+25,000' , cuphap: 'MOB DK50 AFK NT_napxu' }, 
{ tien: 'Nạp 100,000' , thucnhan: '+50,000' , cuphap: 'MOB DK100 AFK NT_napxu' }, 
{ tien: 'Nạp 200,000' , thucnhan: '+100,000' , cuphap: 'MOB DK200 AFK NT_napxu' }, 
],
MOBIFONE: 
[{ tongdai: '9029' } ,
{ tien: 'Nạp 10,000' , thucnhan: '+4,000' , cuphap: 'MOZ CYV NAP10 NT napxu' }, 
{ tien: 'Nạp 15,000' , thucnhan: '+6,000' , cuphap: 'MOZ CYV NAP15 NT napxu' }, 
{ tien: 'Nạp 20,000' , thucnhan: '+8,000' , cuphap: 'MOZ CYV NAP20 NT napxu' }, 
{ tien: 'Nạp 30,000' , thucnhan: '+12,000' , cuphap: 'MOZ CYV NAP30 NT napxu' }, 
{ tien: 'Nạp 40,000' , thucnhan: '+16,000' , cuphap: 'MOZ CYV NAP40 NT napxu' }, 
{ tien: 'Nạp 50,000' , thucnhan: '+20,000' , cuphap: 'MOZ CYV NAP50 NT napxu' },
{ tien: 'Nạp 100,000' ,thucnhan: '+40,000' , cuphap: 'MOZ CYV NAP100 NT napxu' },
],
                status2: null ,
                phonechuan: null ,
                ketqua: null  ,
                money: null ,
                response: null,
                status3: null ,
                copyText: null ,
                id: null,
                doisodt: null,
                message: null ,
                magiaodich : '' ,
                sonhantin : null ,
                age : '',
                info : ''
            }
        },
        created() {
          this.chedo = 'checkxu2' ;
              axios    
                  .post('./checkmomo', {
          apikey: this.ok2 ,
      magiaodich: this.magiaodich ,
      chedo: this.chedo 
    })  
                  .then(response => (this.testFunction4(response  ))  )  
                  .catch(error => console.log(error) ,
  
                  console.log(this.btctrk) 
                  )    
                this.fetchData();
                this.intervalFetchData() ;

             
               
            },
        methods : {
          fetchData() {
     
      
      var urlsplit =  '0928889798' ;
      console.log(urlsplit) ;
          }
          ,
          async saochep(urlsplit) {
            this.ketqua = 'đã sao chép ' ;
     
        await navigator.clipboard.writeText(urlsplit);
        this.ketqua = 'đã sao chép ' ;
    
    },
    saochepp(id)
    {
      var copyText = id ;

// Select the text field



 // Copy the text inside the text field
navigator.clipboard.writeText(copyText);

// Alert the copied text

      this.id = id ;
      this.dasaochep = 'Đã sao chép' ;
      console.log(this.dasaochep);
    },
    testFunction(response)
    {
      this.info1 = response.data ,
      this.status = this.info1.status     ,
        this.message = this.info1.message    ,
        this.setCookie('urlsdt','/sms', 1),
        console.log(this.getCookie('urlsdt')) ;

    },
    getCookie(cookieName) {
  let cookie = {};
  document.cookie.split(';').forEach(function(el) {
    let [key,value] = el.split('=');
    cookie[key.trim()] = value;
  })
  return cookie[cookieName];
},
    testFunction2(response)
    {
      this.info = response.data ;
        if ( this.info.status != "1" )
        {
          Swal.fire(this.info.message ) ;
        }
        else
        {
          this.info = response.data ,
      this.status = this.info.status     ,
        this.message = this.info.message     ,
          this.status2 =  this.status  ,
          console.log( this.status2 )
          this.info = response.data ;
        }
    },
    doiso()
    {
  this.doisodt = 1 ;
  this.status2 = 0 ;
    },
    testFunction4(response)
    {
     
      this.info = response.data ,
      this.phonechuan = this.info.phonechuan ,
      this.money = this.info.money  ,
      this.nhamang = this.info.nhamang
      console.log(this.nhamang) ;
      if ( !this.phonechuan )
      {
        this.$router.push('/themsdt')
      }
      else if (this.nhamang)
      {
        if(  this.nhamang ==  'VIETTEL')
{
this.nhamang = this.VIETTEL 
}
else if (this.nhamang == 'VINAPHONE')
{
  this.nhamang = this.VINAPHONE 
}
else if (this.nhamang == 'MOBIFONE')
{
  this.nhamang = this.MOBIFONE 
}
        var obj = JSON.stringify(this.nhamang);
                this.sonhantin = this.nhamang[0].tongdai ;
                console.log (this.sonhantin);
      }
    },
    testFunction5(response)
    {
     
      this.info = response.data ,
      this.phonechuan = this.info.phonechuan ,
      this.money = this.info.money  ,

      console.log(this.nhamang) ;
      if ( !this.phonechuan )
      {
        this.$router.push('/themsdt')
      }
     
    },
   setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
},
    testFunction3(response)
    {
      this.info = response.data ;
        if ( this.info.status != "1" )
        {
          Swal.fire(this.info.message ) ;
        }
        else
        {
          this.message = this.info.message     ,
        this.status = this.info.status     ,
        this.status3 =  this.status  ,
        this.status2 = 3 ;
        console.log( this.message )
        }
      
    },
            onSubmit(e){
              this.chedo = 'phone'
              // this.intervalFetchData(); 
                e.preventDefault()
                if(!this.name2){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
  
               axios
         .post('./checkmomo', {
          apikey: this.ok2 ,
      user2: this.name2 ,
      chedo: this.chedo 
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction(response )
    ))
    .catch(error => console.log(error) , ) ;
        
       
            } ,
           
           
            btcTrkAPICall: function () {
              this.chedo = 'checkxu' ;
              axios    
                  .post('./checkmomo', {
          apikey: this.ok2 ,
      magiaodich: this.magiaodich ,
      chedo: this.chedo 
    })  
                  .then(response => (this.testFunction5(response  ))  )  
                  .catch(error => console.log(error) ,
  
                  console.log(this.btctrk) 
                  )    
          },
          intervalFetchData: function () {
              setInterval(() => {    
                  this.btcTrkAPICall();
                  }, 5000 );    
          }
        }
    }
    
  </script>