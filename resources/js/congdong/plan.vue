<template>
    <div class="row fixrow">

        <!-- <div class="col-xl-4">
          <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#napbank">
            NẠP QUA NGÂN HÀNG cập nhật sau 1 đến 4 tiếng
          </button>
        </div> --> 
        <!-- Button trigger modal -->
        <div class="text-center">
        <!-- <router-link type="button" class="mx-2  btn btn-primary" to="/okluon">Hướng dẫn</router-link> -->
        <router-link  to="/profile">
        <button type="button" class="mx-2  btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Xem Tổng xu nạp {{ total_nap }}
</button>
</router-link>
</div>
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chức năng này đang cập nhật hiện chưa có</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Chức năng này đang cập nhật hiện chưa có
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->
<!-- Modal -->

       
    

        <table class="table-auto relative w-full border border-separate text-break text-sm">
          <thead class="bg-blue-500 text-white">
            <tr>
              <th class="p-1">Cấp độ</th>
              <th class="p-1">Mức coin</th>
              <th class="p-1">Thưởng khi<br> nâng cấp</th>
              <th class="p-1">Tổng thưởng</th>
              <th class="p-1 text-left">Chiết khấu giảm</th>
  
  
           
            </tr>
          </thead>
       
        
           
         
                <tbody>
                  <template v-for="item in jsonArr"  >
                    
                <tr class="bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 lg:text-black" v-if="!item.tongdai" >
                <td class="p-1 font-medium capitalize"> {{ item.level }}</td>
                <td class="p-1">{{ item.soxunap }} xu</td>
                <td class="p-1">{{ item.thucnhan }} xu</td>
                <td class="p-1">{{ item.tongxunhan }} xu</td>
                <td class="p-1"  >
                  
                  <div v-bind:id="item.stt">{{ item.chietkhau }} % <span @click="saochepp(item.stt)">
                  <div class="float-right">
                  <button class='text-xs font-medium rounded-full px-2 py-2 space-x-1 bg-white text-black'>
               <div v-if="id == item.stt ">{{ dasaochep }}</div> <div v-else > Nhận thưởng ngay</div> 
                </button></div>
                </span></div> 
              
              </td>  
              
              </tr>
              <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </template>
              </tbody>
         
           
         
          
         
        </table>

         </div>
         <br> <br> <br> <br><br><br>
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
    export default {
      data (){
            return {
              ok2 : this.$cookies.get("apikey") ,
              name2 : '',
                urlsplit: '0928889798' ,
                lienket: null ,
                error: '' ,
                status: null ,
                id: null ,
                dasaochep: null,
                sonhantin: null,
                jsonArr: null ,
                nangcap: 
[
{ stt: 1 ,  level: 'Newbie' , soxunap: '0' , thucnhan: 20 , chietkhau: '0' }, 
  {stt: 2 , level: 'Đồng' , soxunap: '1,000' , thucnhan: 100 , chietkhau: '0' }, 
{ stt: 3 ,level: 'Bạc' , soxunap: '10,000', thucnhan: 500 , chietkhau: '1' }, 
{stt: 4 , level: 'VIP' , soxunap: '30,000', thucnhan: 1000 , chietkhau: '2' }, 
{stt: 5 , level: 'Vàng' ,soxunap: '50,000' , thucnhan: 2000 , chietkhau: '2' }, 
{ stt: 6 ,level: 'Bạch kim' , soxunap: '100,000' , thucnhan: 3000 , chietkhau: '3' }, 
{stt: 7 , level: 'Đá quý' ,soxunap: '300,000' , thucnhan: 7000  , chietkhau: '4' }, 
{stt: 8 , level: 'Kim cương' ,soxunap: '600,000', thucnhan: 12000 , chietkhau: '5' },
{ stt: 9 ,level: 'Chiến tướng' ,soxunap: '1,000,000', thucnhan: 20000 , chietkhau: '6' },
{stt: 10 , level: 'Thách đấu' ,soxunap: '2,000,000', thucnhan: 30000 , chietkhau: '7' },
{ stt: 11 ,level: 'Tiểu vương quốc' ,soxunap: '3,000,000', thucnhan: 40000 , chietkhau: '8' },
{ stt: 12 ,level: 'Thế giới' ,soxunap: '5,000,000', thucnhan: 50000 , chietkhau: '9' },
{ stt: 13 ,level: 'Hệ mặt trời' ,soxunap: '7,000,000', thucnhan: 70000 , chietkhau: '10' },
{ stt: 14 ,level: 'Siêu sao' ,soxunap: '10,000,000', thucnhan: 100000 , chietkhau: '12' },
{stt: 15 , level: 'Các vì tinh tú' ,soxunap: '15,000,000', thucnhan: 150000 , chietkhau: '14' },
{stt: 16 , level: 'Dải Thiên hà' ,soxunap: '25,000,000', thucnhan: 250000 , chietkhau: '15' }
],
            }},
           
            methods: 
        {
          danhchimuc(){
            let tongxunhan = 0 ;
            var keyCount  = Object.keys(this.nangcap).length ;
            var jsonArr = [];
for (let i = 0; i < keyCount ; i++) {
      // var obj = JSON.stringify(jsonObject);
      let   stt = this.nangcap[i].stt ;
      let   level = this.nangcap[i].level ;
      let   soxunap = this.nangcap[i].soxunap ;
      let   thucnhan = this.nangcap[i].thucnhan ;
      let   chietkhau = this.nangcap[i].chietkhau ;
         tongxunhan = this.nangcap[i].thucnhan + tongxunhan ;
 jsonArr.push({
        stt: stt ,
        level: level ,
        soxunap: soxunap ,
        thucnhan: thucnhan ,
        chietkhau: chietkhau ,
        tongxunhan: tongxunhan
    });
}
this.jsonArr = jsonArr ;
console.log(jsonArr) ;
          },
          saochepp(id)
    {
      var copyText = id ;

// Select the text field



 // Copy the text inside the text field
navigator.clipboard.writeText(copyText);

// Alert the copied text

      this.id = id ;
      this.dasaochep = 'Chờ xíu nhé' ;
      axios
         .post('https://hust.media/plan.php', {
          key: this.ok2 ,
      mucnhan: this.id
    })
    .then(response => (this.dathang(response ) ,this.info = response.data ))
    .catch(error => console.log(error) 
        )
      console.log(this.id);
    },
    dathang(response){
// this.nutorder = 'xác nhận' ,
// this.nutxuly = 0 ,
            this.info1 = response.data ,
            console.log (this.info1);
      this.error = this.info1.error     ;
        this.order = this.info1.order  ;

   if ( this.order  )
   {
    Swal.fire(this.order ) ;
    this.dasaochep = this.order  ;
   }
   else  if ( this.error != ''  )
   {
    Swal.fire(this.error ) ;
    this.dasaochep = this.error  ;
   }
          } ,
        },
        created() {
              this.danhchimuc() ;  
            } ,
      } ;
            </script>