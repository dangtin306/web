<template>
    <div class="row fixrow">

        <div class="text-center">
        <router-link type="button" class="mx-2  btn btn-primary" to="/historyclone">Lịch sử mua tài khoản</router-link>

        
</div>
        <div class="col mt-0">
            <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
          
              <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                 
                  <div class='max-w-md mx-auto  space-y-6'>
                 
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label for="countries2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn nền tảng</label>
              
                        <select  id="countries2" class="
                        selectpicker sp1 form-control" data-size="5" data-live-search="true"   @change="onChange()"   name="nhamang" v-model="chedomuaacc">
                            <option v-for="option in options" :value="option.value"
                            :data-content=" `<div style='display: flex; align-items: center;'>  ` +  option.text + `&emsp;` + `<img src='` + option.img + `'` + `class=\'asdasd\'>` +`</div>` "  >
                              <!-- {{ option.text }} -->
                            </option>
                          </select>
                          <br>
                       
        
                      
                        
                            </div>
                          </div>
           
                     
                </div>
           
                </div>
                <br>
              </div>
            </div>
          
        
<!-- Modal -->

       
    
<div v-if="luachonacc == 1 ">
        <table class="table-fixed relative w-full border border-separate text-break text-sm">
          <thead class="bg-blue-500 text-white">
            <tr>
              <th class="py-3 px-2 sm" style="width: 25%">Tên sản phẩm</th>
              <th class="py-3 px-2 text-left" style="width: 15%">Giá</th>
              <th class="py-3 px-2 " style="width: 15%" >Hiện có</th>
              <th class="py-3 px-2 text-left" style="width: 45%">Mô tả</th>
  
  
           
            </tr>
          </thead>
       
        
           
         
                <tbody>
                  <template v-for="item in VIETTEL"  >
                    
                <tr class="bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 lg:text-black" v-if="!item.tongdai" >
                <td class="py-3 px-2 font-medium capitalize"> <div v-html="item.name"></div></td>
                <td class="py-3 px-2">{{ parseFloat((item.price * 1.3).toFixed(2)) !== parseInt((item.price * 1.3)) ? (item.price * 1.3).toFixed(2) : parseInt((item.price * 1.3)) }}
                </td>
                <td class="py-3 px-2"> {{ item.amount }} </td>
                <td class="py-3 px-2"  >
                  
                  <div v-bind:id="item.id"><div v-html="item.description"></div> <span @click="saochepp(item.id)">
                  <div class="float-right">
                  <button class='text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
               <div v-if="idservice == item.id">{{ dasaochep }}</div> <div v-else > Mua ngay</div> 
                </button></div>
                </span></div> 
              
              </td>  
              
              </tr>
              <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </template>
              </tbody>
     
         
          
         
        </table>
            
        <br>
    </div>
    <div v-if="hientkclone == 1">  
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
          <div class="flex flex-col items-center justify-center py-2">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-200 to-purple-600 shadow-lg transform rotate-6 rounded-3xl">
    
            </div>
            <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
             <h2 class="text-3xl text-break font-bold">
                Thông tin đầy đủ : {{ clonethem }}
            </h2></div></div></div>
        </div>
       
         </div>
         <br><br><br><br><br>
</template>
<style>
  
  .cananh {
   display: revert !important; 
}
.fixrow {
      --bs-gutter-x: 0rem !important;
}
</style>
<script>
import Swal from 'sweetalert2' ;
 import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.css' ;
    import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.min.css' ;
    import '../../../node_modules/bootstrap-select/js/bootstrap-select.js' ;

    export default {
      data (){
            return {
              ok2 : this.$cookies.get("apikey") ,
              name2 : '',
                urlsplit: '0928889798' ,
                lienket: null ,
                status: null ,
                luachonacc: null ,
                hientkclone: null ,
                id: null ,
                idservice: null ,
                clonetruoc : null ,
                clonesau : null ,
                clonethem : null ,
                dasaochep: null,
                options: [
                    { text: 'Vui lòng chọn 1 nền tảng', value: 'vuilongchon1cai' , img: 'https://static.thenounproject.com/png/2383182-200.png'  } ,
                    { text: 'Chat GPT', value: 'account|chat gpt' , img: 'https://cdn.sanity.io/images/bl383u0v/production/3e0a187d04a5edb85b57ba4014ad4ea26227174a-1500x1000.gif'  } ,
                    { text: 'Clone Tiktok', value: 'clone|tiktok' , img: 'https://hust.media/img/icon/tiktok.gif' } , 
                    { text: 'Via Tiktok', value: 'via|tiktok' , img: 'https://hust.media/img/icon/tiktok.gif' } , 
        { text: 'Clone Facebook', value: 'clone|facebook' , img: 'https://hust.media/img/icon/fbicon.gif' } ,
        { text: 'Clone Chuyên cày jop', value: 'clone|ttc' , img: 'https://hust.media/img/icon/fbicon.gif' } ,
        { text: 'Via Facebook việt', value: 'account|via việt'  , img: 'https://hust.media/img/icon/meta.png' } ,
        { text: 'Via Facebook khác', value: 'via|via|việt' , img: 'https://hust.media/img/icon/meta.png' } ,
        { text: 'Instagram', value: 'account|instagram', img: 'https://hust.media/img/icon/giphy%20(5).gif'} ,
        { text: ' Tài khoản GMAIL ', value: 'account|gmail' , img: 'data:image/png;base64,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'  } ,
        { text: ' TK Netflix Premium ', value: 'account|netflix' , img: 'https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/227_Netflix_logo-512.png'  } 
      ],
                sonhantin: null,
                VIETTEL: null
            }},
           
            methods: 
        {
          saochepp(id)
    {
      var copyText = id ;

      this.dasaochep = 'Chờ xíu nhé' ;

      this.idservice = id ;
      if(!this.idservice){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
               axios
         .post('https://tuongtac.fun/api/account.php', {
            chedo: 'muaacc' ,
            service : this.idservice  ,
            apikey : this.ok2 ,
            amount : 1
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction1(response )
    ))
    .catch(error => console.log(error) ,
        ) ;
      console.log(this.id);
    },
    onChange() {
    
   
        
    if(!this.chedomuaacc){
                    alert('Please điền đầy đủ thông tin')
                    return
                }
               axios
         .post('https://tuongtac.fun/api/account.php', {
            chedo: 'laytrangthai' ,
            chedomuaacc : this.chedomuaacc 
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction2(response )
    ))
    .catch(error => console.log(error) ,
        ) ;
    
    },
    testFunction1(response)
    {
      this.dasaochep = 'Xử lý xong' ;
        this.info = response.data ;
        if ( this.info.status != "1" )
        {
          Swal.fire(this.info.message ) ;
        }
        else if ( this.info.status == "1" )
        {
            axios
         .post('https://tuongtac.fun/api/account.php', {
            chedo: 'laythongtin' ,
            apikey : this.ok2 ,
    })
    .then( response => (
    console.log(response.data ) ,
    this.testFunction3(response )
    ))
    .catch(error => console.log(error) ,
        ) ;
this.hientkclone = 1 ;
Swal.fire('Mua thành công') ;
        }
    },
    testFunction2(response)
    {
        this.luachonacc = 1 ;
       this.VIETTEL = JSON.stringify(response.data) ;
       this.VIETTEL = this.VIETTEL.replace( 'tds', 'hust media') ;
       this.VIETTEL = this.VIETTEL.replace( 'TDS', 'hust media') ;
       this.VIETTEL = this.VIETTEL.replace( 'Tds', 'hust media') ;
       this.VIETTEL = this.VIETTEL.replace( 'Ttc', 'hust media') ;
       this.VIETTEL = this.VIETTEL.replace( 'TTC', 'hust media') ;
       this.VIETTEL = this.VIETTEL.replace( 'ttc', 'hust media') ;
       this.VIETTEL = JSON.parse(this.VIETTEL) ;
        console.log(this.VIETTEL)
    },
    testFunction3(response)
    {
        this.info = response.data ;
        this.clonetruoc = this.info.truoc ;
        this.clonesau = this.info.sau ;
        this.clonethem = this.info.them ;
    }
        },
        created() {
            
              setTimeout(() => {    
                    $('.selectpicker').selectpicker('refresh');
                    setTimeout(() => {     
         $('.sp1').selectpicker('toggle');  }, 300)
                }, 300) ;
            } ,
      } ;
            </script>