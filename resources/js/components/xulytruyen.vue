<template>
    <div class="fixrow row">
        <div v-if="status2 != 1 && status2 != 3" >
      <div class="col mt-0">
      <div  class='mt-4 mx-2 items-center justify-center from-teal-100 via-teal-300 to-teal-500 '>
    
        <div  class='w-full max-w-lg px-10 py-8 mx-auto bg-white rounded-lg shadow-xl'>
           
            <div class='max-w-md mx-auto  space-y-6'>
           
                  <div class="col-lg-6">
                      <div class="form-group">
                        <label for="countries2" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn nền tảng</label>
        
                  <select  id="countries2" class="
                  selectpicker sp1 form-control"   @change="onChange()"   name="nhamang" v-model="modeok">
                      <option v-for="option in options" :value="option.value">
                        {{ option.text }}
                      </option>
                    </select>
                    <br>
                 
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn thể loại</label>
                    <select  id="countries" class="form-control selectpicker sp2"  @change="onChange2()"   name="theloai" v-model="modeok">
                      <option v-for="option in options2" :value="option.value">
                        {{ option.text }}
                      </option>
                    </select>
                    <div  v-if="chondichvu == 1" x-show="showen">
                      <label for="dichvu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Chọn dịch vụ</label>
                      <select  id="dichvu" class="form-control selectpicker sp3" data-width="auto" data-size="7"  data-live-search="true"  @change="onChange3()"   name="dichvu" v-model="dichvu">
                        <option v-for="option in options3" :value="option.id">
                          {{ option.money }} Xu     {{ option.name }}
                        </option>
                      </select>
                      </div>
                      </div>
                    </div>
                    <p>Link bài viết ,video, ảnh cần chạy</p>
  <input class="form-control form-control-alternative" v-model="lienketchay" placeholder="Sao chéo liên kết điền vô đây" />
  {{ content }} thời gian ước tính {{ timeuoctinh }}
  <div  v-if="chondichvu2 == 1">
  <p>Số lượng tăng</p>
  <input @keyup="countamount" class="form-control form-control-alternative" v-model="soluongtang" placeholder="Nhập số lượng" />
  </div>
                <div  v-if="chondichvu == 1" x-show="showen">
      
                  <!-- <div class="space-y-2 text-gray-700" x-data="{isshow:false}">
                  <label class="block font-medium text-sm   mx-auto " for="password">
                    Số bình luận tăng là: {{ socmt }}
  </label>                <div class="relative  focus-within:text-gray-900 dark:focus-within:text-gray-800 ">
      
      <div aria-hidden="true" class="absolute inset-y-0 flex items-center px-4 pointer-events-none">
          <svg aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
  </svg>
      </div>
      <textarea class="pl-11 text-gray-800 pr-4 pr-11 py-2 border-gray-600 rounded-md focus:border-gray-400 focus:ring
  focus:ring-gray-800 ring-gray-400 ring focus:ring-offset-2 focus:ring-offset-white dark:border-gray-600 dark:bg-primary-darker
   dark:focus:ring-offset-dark-eval-1 block w-full" id="name2"
  
     name="name2" required="required"   v-model="name2" @keyup="countLine"
     autocomplete="new-password" placeholder="Nhập mỗi nội dung 1 dòng" type="text">
  </textarea>
  
  
      <div class="absolute right-0 z-30 inset-y-1 flex items-center px-4 ">
          <button type="button"  class="z-30 ">
                                  <svg x-show="!isshow" aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
  </svg>                                <svg x-show="isshow" aria-hidden="true" class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
  </svg>                            </button>
      </div>
      </div>
  
                      
              </div> -->
              </div>
                  <button  @click="xacnhan"
                  class='flex break-inside bg-purple-400 hover:bg-purple-300 rounded-3xl px-8 py-2 mb-3 w-full dark:bg-slate-800 dark:text-white'>
                  <div class='flex items-center justify-between flex-1'>
                    <div v-if="nutxuly == '1'" class="spinner-border" role="status">
                   
                    </div>
                 
                    <span class='text-lg font-medium text-white'> {{ nutorder }} </span>
                    <svg  width='17' height='17' viewBox='0 0 17 17' fill='none' xmlns='http://www.w3.org/2000/svg'>
                      <path fillRule='evenodd' clipRule='evenodd'
                        d='M0 8.71423C0 8.47852 0.094421 8.25246 0.262491 8.08578C0.430562 7.91911 0.658514 7.82547 0.896201 7.82547H13.9388L8.29808 2.23337C8.12979 2.06648 8.03525 1.84013 8.03525 1.60412C8.03525 1.36811 8.12979 1.14176 8.29808 0.974875C8.46636 0.807989 8.6946 0.714233 8.93259 0.714233C9.17057 0.714233 9.39882 0.807989 9.5671 0.974875L16.7367 8.08499C16.8202 8.16755 16.8864 8.26562 16.9316 8.3736C16.9767 8.48158 17 8.59733 17 8.71423C17 8.83114 16.9767 8.94689 16.9316 9.05487C16.8864 9.16284 16.8202 9.26092 16.7367 9.34348L9.5671 16.4536C9.39882 16.6205 9.17057 16.7142 8.93259 16.7142C8.6946 16.7142 8.46636 16.6205 8.29808 16.4536C8.12979 16.2867 8.03525 16.0604 8.03525 15.8243C8.03525 15.5883 8.12979 15.362 8.29808 15.1951L13.9388 9.603H0.896201C0.658514 9.603 0.430562 9.50936 0.262491 9.34268C0.094421 9.17601 0 8.94995 0 8.71423Z'
                        fill='white' />
                    </svg>
                  </div>
                </button>
               
                  <div
                      class="bg-white border border-slate-300 shadow-lg rounded-md gap-4 p-4  flex-row items-center justify-center">
                      <section class="w-6 flex flex-col items-center justify-start">
                          <svg width="100%" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path
                                  d="M7.5 13.25C10.9518 13.25 13.75 10.4518 13.75 7C13.75 3.54822 10.9518 0.75 7.5 0.75C4.04822 0.75 1.25 3.54822 1.25 7C1.25 10.4518 4.04822 13.25 7.5 13.25Z"
                                  stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                  d="M4.3269 7.96143C4.80767 9.69219 6.73075 10.7499 8.46152 10.2691C9.51921 9.8845 10.3846 9.01912 10.6731 7.96143"
                                  stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                  d="M10.0481 5.55767C9.91536 5.55767 9.80774 5.45005 9.80774 5.31729C9.80774 5.18453 9.91536 5.0769 10.0481 5.0769"
                                  stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                  d="M10.0481 5.5577C10.1809 5.5577 10.2885 5.45008 10.2885 5.31732C10.2885 5.18456 10.1809 5.07693 10.0481 5.07693"
                                  stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                  d="M4.95193 5.55767C4.81917 5.55767 4.71155 5.45005 4.71155 5.31729C4.71155 5.18453 4.81917 5.0769 4.95193 5.0769"
                                  stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                              <path
                                  d="M4.95197 5.5577C5.08473 5.5577 5.19235 5.45008 5.19235 5.31732C5.19235 5.18456 5.08473 5.07693 4.95197 5.07693"
                                  stroke="#21ce8f" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                          </svg>
                      </section>
                      <section class=" flex flex-col items-start justify-end gap-1">
                          <h1 class="text-base font-semibold text-zinc-800 antialiased">Tổng : {{ tientra }}</h1>
                          <p class="text-sm font-medium text-zinc-400 antialiased">
  Tối thiểu {{minorder }} 
  <br>
  Tối đa {{maxorder  }}
  
                          </p>
                      </section>
                    
                  
              </div>
          </div>
     
          </div>
          <br><br><br><br>
        </div>
      </div>
    
    </div>
   
  
  
    </div>
</template>
<script>
// import helloworld from '!raw-loader!./pg32846.txt' ;
import Swal from 'sweetalert2' ;
import { hamlaychutruoc , hamdemdong , chimuctentruyen , laytudongtruoc , laytrongkhoangdong ,demdongbaonhieutu ,hamdemchu , laytudongsau  }  from './hamxulychu.js' ;
    // import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.css' ;
    // import '../../../node_modules/bootstrap-select/dist/css/bootstrap-select.min.css' ;
    // import '../../../node_modules/bootstrap-select/js/bootstrap-select.js' ;

   export default {
    
      data() {
        return {
        fileContent: '' ,
        ashdbhabsdk: null ,
        modeok: null ,
        jsonArr2: null ,
        chimuccauthoai: null ,
        helloworld: null ,
        chimucchuyen: null ,
        nutxuly: null ,
        nutorder: 'xacnhan',
        tencaccauchuyen: [
        { text: 'THE TWO DROVERS', value: '1' } , 
        { text: 'MR. DEUCEACE', value: '2' } ,
        { text: `THE BROTHERS`, value: '3' }  ,
        { text: `"DR. MANETTE'S MANUSCRIPT"` , value: '4' }  ,
        { text: `THE CALDRON OF OIL` , value: '5' }  ,
        { text: `THE BURIAL OF THE TITHE` , value: '6' }  ,
        { text: `THE KNIGHTSBRIDGE MYSTERY` , value: '7' }  ,
        { text: `THE COURTING OF DINAH SHADD` , value: '8' }  ,
        { text: `THE SIRE DE MALETROIT'S DOOR` , value: '9' }  ,
        { text: `THE SECRET OF GORESTHORPE GRANGE` , value: '10' }  ,
        { text: `A CHANGE OF TREATMENT` , value: '11' }  ,
        { text: `THE STICKIT MINISTER` , value: '12' }  ,
        { text: `THE LAMMAS PREACHING` , value: '13' }  ,
        { text: `AN UNDERGRADUATE'S AUNT` , value: '14' }  ,
        { text: `THE SILHOUETTES` , value: '15' }  ,
        { text: `MY BROTHER HENRY` , value: '16' }  ,
        { text: `GILRAY'S FLOWER-POT` , value: '17' }  ,
        { text: `MR. O'LEARY'S SECOND LOVE` , value: '18' }  ,
        { text: `THE INDIFFERENCE OF THE MILLER OF HOFBAU` , value: '19' }  ,
        { text: `THE STOLEN BODY` , value: '20' }  ,
        { text: `THE LAZARETTE OF THE "HUNTRESS"` , value: '21' }  ,
        { text: `THE GREAT TRIANGULAR DUEL` , value: '22' }  ,
        { text: `THREE THIMBLES AND A PEA` , value: '23' }  ,
      ],
        options: [
        { text: 'Chọn 1 nền tảng', value: '' } , 
        { text: 'Thống kê tên riêng', value: 'thongketenrieng' } ,
        { text: 'Đánh dấu chỉ mục theo thứ tự dòng', value: 'đanhdaumuc2' }  ,
        { text: 'Đánh chỉ mục riêng của chuyện ', value: 'đanhdaumuc3' }  ,
        { text: 'Đánh chỉ mục chương của chuyện ', value: 'đanhdaumuc4' }  ,
        { text: 'Lấy chữ trong khoảng dòng ', value: 'đanhdaumuc5' }  ,
        { text: 'Đánh chỉ mục theo tên riêng', value: 'đanhdaumuc6' }  ,
        { text: 'Tra cứu chỉ mục chuyện ', value: 'danhdaumuc7' }  ,
        { text: 'Tra cứu chỉ mục tên riêng ', value: 'danhdaumuc8' }  ,
        { text: 'Chỉ mục một số câu thoại ngắn', value: 'danhdaumuc9' }  
      ],
      options2:  [
        { text: 'Chọn 1 nền tảng', value: '' } , 
        { text: 'Thống kê tên riêng', value: 'đanhdaumuc1' } ,
        { text: 'Đánh dấu chỉ mục theo thứ tự dòng', value: 'đanhdaumuc2' }  ,
        { text: 'Đánh chỉ mục riêng của chuyện ', value: 'đanhdaumuc3' }  ,
      ],
      options3: null ,
        }
      },
      created(){

                $('.selectpicker').selectpicker('refresh');
                setTimeout(() => {    
                    $('.selectpicker').selectpicker('refresh');
                    setTimeout(() => {     
         $('.sp1').selectpicker('toggle');  }, 300)
                }, 300) ;
                this.getfiletext() ;
     
      },
      methods: {
        getfiletext()
        {

            axios
                .get('https://hust.media/img/truyen.php')
                .then(response => {
                       
              this.helloworld = response.data  ;
              console.log(this.helloworld);
            
                });
        },xacnhan(){
            this.nutxuly = 1 ;
            this.nutorder = 'chờ xíu nhé' ;
        console.log(this.modeok);
        if (this.modeok == 'thongketenrieng'  )
        {
          var asdsadasd = this.helloworld ;
          var fdgdfgdfgfd = this.lienketchay ;
          this.demthongke(asdsadasd , fdgdfgdfgfd) 
        // console.log(this.lienketchay);
        }
      else  if ( this.modeok == 'đanhdaumuc2'    )
        {
          var sabdhjasd  = encodeURI(this.helloworld) ;
        var ashdbhbsajdjknaskd =  hamlaychutruoc(this.lienketchay , this.helloworld ) ;
        console.log(sabdhjasd) ;
        }
        else  if ( this.modeok == 'đanhdaumuc3'    )
        {
         this.danhchimuc() ;
         console.log(this.jsonArr2);
        }
        else  if ( this.modeok == 'đanhdaumuc4'    )
        {
          this.đanhdaumuc4() ;
          console.log(this.chimucchuyen);
        }
        else  if ( this.modeok == 'đanhdaumuc5'    )
        {

          var ashdbhbsajdjknaskd =     laytudongtruoc(this.lienketchay , this.helloworld) ;
         console.log(ashdbhbsajdjknaskd);

        }
        else  if ( this.modeok == 'danhdaumuc7'    )
        {
          this.đanhdaumuc4() ;
          console.log(this.lienketchay );
          var asdvjhasbjd = this.lienketchay  - 1 ;
          console.log(this.chimucchuyen[asdvjhasbjd]);


        }
        else  if ( this.modeok == 'danhdaumuc9'    )
        {
          this.đanhdaumuc4() ;
       var keyCount  = Object.keys(this.chimucchuyen).length ;

       this.chimuccauthoai = [] ;
for (let okok = 0; okok < keyCount; okok++)

    setTimeout(function () { 
      console.log(okok)  ;
 this.demdongbaonhieutu(okok) ;
  
 }.bind(this), 350 * okok);


 setTimeout(function () { 
      
 console.log(this.chimuccauthoai)  ;
      }.bind(this), 10000);
         
        }
          },
          danhchimuc(){
            var keyCount  = Object.keys(this.tencaccauchuyen).length ;

var jsonArr = [];
for (let i = 0; i < keyCount ; i++) {
      // var obj = JSON.stringify(jsonObject);
      let   sdsdfsdfsdf = this.tencaccauchuyen[i].text ;
                var ashdbhbsajdjknaskd =  chimuctentruyen(sdsdfsdfsdf , this.helloworld ) ;
                let asdjasd = i + 1 ;
 jsonArr.push({
        stt: asdjasd ,
        tentruyen: sdsdfsdfsdf ,
        batdau: ashdbhbsajdjknaskd
    });
}
var keyCount  = Object.keys(jsonArr).length ;
this.jsonArr2 = [];
for (let i = 0; i < keyCount ; i++) {
 let asdasasd = i + 1 ;
  let   stt = jsonArr[i].stt ;
  let   tentruyen = jsonArr[i].tentruyen ;
  let   batdau = jsonArr[i].batdau ;
  if ( stt != 23 )
  {
    let   ketthuc = jsonArr[asdasasd].batdau - 1 ;
    this.jsonArr2.push({
        stt: stt ,
        tentruyen: tentruyen ,
        batdau: batdau ,
        ketthuc: ketthuc
    });
  }
  else
  {
    let   ketthuc = 13740 ;
    this.jsonArr2.push({
        stt: stt ,
        tentruyen: tentruyen ,
        batdau: batdau ,
        ketthuc: ketthuc
    });
  }


}


  
          },
          async asdasdasd(okok)
          {
   

     await  this.demdongbaonhieutu(okok) ;
 

          },
          demdongbaonhieutu(okok){
            let   stt = this.chimucchuyen[okok].stt ;
  let   tentruyen = this.chimucchuyen[okok].tentruyen ;
  let   batdau = this.chimucchuyen[okok].batdau ;
  let   ketthuc = this.chimucchuyen[okok].ketthuc ;
  let   chuong = this.chimucchuyen[okok].chuong ;
  let   doanchuyen = this.chimucchuyen[okok].doanchuyen ;
  let toanbo = doanchuyen ;
            let sadsadsda = '' ;
  for (let i = 0; i < 100 ; i++) {
    
  var sadasdasd  = encodeURI(toanbo) ;
  var chulay  = '%0D%0A' ;

  const first6 = sadasdasd.slice(0, 6);
  const first12 = sadasdasd.slice(0, 12);
  // console.log(first6);
if (first6 == '%0D%0A' || first6 == '' || first12 == '%0D%0A%0D%0A' )
{
  // console.log(first6);
  sadasdasd = laytudongsau(chulay,sadasdasd) ;
  sadasdasd = hamlaychutruoc(chulay,sadasdasd) ;
  toanbo = laytudongsau(1,toanbo) ;
  // console.log(sadasdasd);
}
else
{
  let lastFive = '%0D%0A%0D%0A' ;
  var okluon =  hamlaychutruoc(lastFive,sadasdasd) ;

  var okluon3 = decodeURI(okluon) ;
  // console.log(okluon3);
  var okluon2 = hamdemchu (okluon3) ;
  // console.log(okluon2);
 if ( okluon2 < 100 )
 {
  toanbo = laytudongsau(1,toanbo) ;
 }
 else
 {

  for (let y = 80; y < 200 ; y++) {
    const y20 = y + 20 ;
    const first20 = okluon3.slice(y, y20);
     sadsadsda = hamlaychutruoc(first20,okluon3) ;
    var sdfdsfsdffds = hamdemchu (sadsadsda) ;
    // console.log(sdfdsfsdffds);
    var lastChar = sadsadsda.slice(-1); // => "1"
    
 
      if ( sdfdsfsdffds > 70 )
      {
        i = 100 ;
        y = 200 ;
        let cauthoaitieubieu =    sadsadsda ; 
        console.log(cauthoaitieubieu);
    
this.chimuccauthoai.push({
        stt: stt ,
        tentruyen: tentruyen ,
        batdau: batdau ,
        ketthuc: ketthuc ,
        chuong: chuong ,
        doanchuyen: doanchuyen ,
        cauthoaitieubieu: cauthoaitieubieu
    });
      }
      else
      {
  
      }
 

  }
  i = 100 ;
 


 }

}

   
  }
          },
          đanhdaumuc4()
        {
          this.danhchimuc() ;
          var keyCount  = Object.keys(this.jsonArr2).length ;

 this.chimucchuyen = [];
for (let i = 0; i < keyCount ; i++) {
  let   stt = this.jsonArr2[i].stt ;
  let   tentruyen = this.jsonArr2[i].tentruyen ;
  let   batdau = this.jsonArr2[i].batdau ;
  let   ketthuc = this.jsonArr2[i].ketthuc ;
  var ashdbhbsajdjknaskd =    laytrongkhoangdong(batdau,ketthuc, this.helloworld) ;
const substring = "CHAPTER" ;
let cochuongkhong = ashdbhbsajdjknaskd.includes(substring); // true
                // let asdjasd = i + 1 ;

                if ( cochuongkhong ==  true  )
                {
                  if ( stt == 1 )
                  this.chimucchuyen.push({
                  stt: stt ,
        tentruyen: tentruyen ,
        batdau: batdau ,
        ketthuc: ketthuc ,
        doanchuyen: ashdbhbsajdjknaskd ,
        chuong: cochuongkhong ,
        sochuong: 2 ,
        doanchuong: [{ stt:1 , batdau: 140 , ketthuc: 426 },{ stt:2 , batdau: 427 , ketthuc: 1234 } ]
    });
    else if ( stt == 7 )
    {
      this.chimucchuyen.push({
                  stt: stt ,
        tentruyen: tentruyen ,
        batdau: batdau ,
        ketthuc: ketthuc ,
        doanchuyen: ashdbhbsajdjknaskd ,
        chuong: cochuongkhong ,
        sochuong: 4 ,
        doanchuong: [{ stt:1 , batdau: 5227 , ketthuc: 5753 },{ stt:2 , batdau: 5754 , ketthuc: 6109 },{ stt:3 , batdau: 6110 , ketthuc: 6611 },{ stt:4 , batdau: 6611 , ketthuc: 6951 }  ] });
    }
                }
                else
                {
                  this.chimucchuyen.push({
                  stt: stt ,
        tentruyen: tentruyen ,
        batdau: batdau ,
        ketthuc: ketthuc ,
        doanchuyen: ashdbhbsajdjknaskd ,
        chuong: cochuongkhong
    });
                }
               
}

        

          },
        demthongke(asdsadasd , fdgdfgdfgfd ) { 
            var ashdbhabsdk = asdsadasd ;
            this.fileContent = asdsadasd ;
            var fdgdfgdfgfd = fdgdfgdfgfd ;
            console.log(fdgdfgdfgfd);
            console.log(ashdbhabsdk)
            
var count = ashdbhabsdk.split(fdgdfgdfgfd).length - 1;
console.log(count); //should output '2'

    },
    timdongchu(asdsadasd , fdgdfgdfgfd ) { 
            var ashdbhabsdk = asdsadasd ;
            this.fileContent = asdsadasd ;
            var fdgdfgdfgfd = fdgdfgdfgfd ;
            console.log(fdgdfgdfgfd);
            console.log(ashdbhabsdk)
            
var count = ashdbhabsdk.split(fdgdfgdfgfd).length - 1;;
console.log(count); //should output '2'

    },

  }
      }
</script>