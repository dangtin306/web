<template>
    <div class="row fixrow">

        <!-- <div class="col-xl-4">
          <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#napbank">
            NẠP QUA NGÂN HÀNG cập nhật sau 1 đến 4 tiếng
          </button>
        </div> --> 
        <!-- Button trigger modal -->
        <div class="text-center">
        <router-link type="button" class="mx-2  btn btn-primary" to="/okluon">Hướng dẫn</router-link>
<button type="button" class="mx-2  btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
Chức năng này đang cập nhật hiện chưa có
</button>
        
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>
<!-- Modal -->

       
    

        <table class="table-auto relative w-full border border-separate text-break text-sm">
          <thead class="bg-blue-500 text-white">
            <tr>
              <th class="p-3">Mức coin</th>
              <th class="p-3 text-left">Xu thưởng</th>
              <th class="p-3 text-left">Quyền lợi</th>
  
  
           
            </tr>
          </thead>
       
        
           
         
                <tbody>
                  <template v-for="item in VIETTEL"  >
                    
                <tr class="bg-gradient-to-r from-blue-100 to-pink-200 hover:from-pink-400 hover:to-yellow-300 lg:text-black" v-if="!item.tongdai" >
                <td class="p-3 font-medium capitalize"> {{ item.tien }}</td>
                <td class="p-3">{{ item.thucnhan }}</td>
                <td class="p-3"  >
                  
                  <div v-bind:id="item.cuphap">{{ item.cuphap }} <span @click="saochepp(item.cuphap)">
                  <div class="float-right">
                  <button class='text-xs font-medium rounded-full px-4 py-2 space-x-1 bg-white text-black'>
               <div v-if="id == item.cuphap ">{{ dasaochep }}</div> <div v-else > Nhận thưởng ngay</div> 
                </button></div>
                </span></div> 
              
              </td>  
              
              </tr>
              <span class="absolute  rounded-2xl inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>
              </template>
              </tbody>
         
           
         
          
         
        </table>

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

    export default {
      data (){
            return {
              ok2 : this.$cookies.get("apikey") ,
              name2 : '',
                urlsplit: '0928889798' ,
                lienket: null ,
                status: null ,
                id: null ,
                dasaochep: null,
                sonhantin: null,
                VIETTEL: 
[{ tongdai: '9029' } ,
  { tien: '10,000' , thucnhan: '+100' , cuphap: 'Nhận 100 xu' }, 
{ tien: '20,000' , thucnhan: '+300' , cuphap: 'Nhận 400 xu ( 100 xu từ cấp độ trước đó ) giảm giá 1% tổng dịch vụ' }, 
{ tien: '30,000' , thucnhan: '+500' , cuphap: 'Nhận 900 xu ( 400 xu từ cấp độ trước đó )' }, 
{ tien: '50,000' , thucnhan: '+1000' , cuphap: 'Chưa có' }, 
{ tien: '70,000' , thucnhan: '+100,000' , cuphap: 'Chưa có' }, 
{ tien: '100,000' , thucnhan: '+250,000' , cuphap: 'Chưa có' },
],
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

      this.id = id ;
      this.dasaochep = 'Đã sao chép' ;
      console.log(this.id);
    },
        },
        created() {
              this.sonhantin = this.VIETTEL[0].tongdai  
            } ,
      } ;
            </script>