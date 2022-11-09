<template>
    <div class="row fixrow">

        <div class="text-center">
        <router-link type="button" class="mx-2  btn btn-primary" to="/historyclone">Lịch sử mua clone</router-link>

        
</div>
        <div class="col mt-0">
            <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
          
              <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
                 
                  <div class='max-w-md mx-auto  space-y-6'>
                 
                        <div class="col-lg-6">
                            <div class="form-group">
                              <label for="countries2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn nền tảng</label>
              
                        <select  id="countries2" class="
                        selectpicker sp1 form-control"   @change="onChange()"   name="nhamang" v-model="chedomuaacc">
                            <option v-for="option in options" :value="option.value">
                              {{ option.text }}
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
                <td class="py-3 px-2 font-medium capitalize"> {{ item.name }}</td>
                <td class="py-3 px-2">{{ item.price * 1.3 }}</td>
                <td class="py-3 px-2"> {{ item.amount }} </td>
                <td class="py-3 px-2"  >
                  
                  <div v-bind:id="item.id">{{ item.description }} <span @click="saochepp(item.id)">
                  <div class="float-right">
                  <button class='text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
               <div v-if="id == item.id ">{{ dasaochep }}</div> <div v-else > Mua ngay</div> 
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
        <br><br><br><br>
         </div>
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
                clonetruoc : null ,
                clonesau : null ,
                clonethem : null ,
                dasaochep: null,
                options: [
        { text: 'Tiktok', value: 'tiktok' } , 
        { text: 'Facebook', value: 'facebook' } ,
        { text: 'Instagram', value: 'instagram' }
      ],
                sonhantin: null,
                VIETTEL: null
            }},
           
            methods: 
        {
          saochepp(id)
    {
      var copyText = id ;

// Select the text field



 // Copy the text inside the text field
navigator.clipboard.writeText(copyText);

// Alert the copied text

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
      this.dasaochep = 'Đã mua' ;
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