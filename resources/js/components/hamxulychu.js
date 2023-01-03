export function hamlaychutruoc (chulay,toanbo){
  var vadghasbd = toanbo.split(chulay)[0]; 
  return vadghasbd ; 
}
export function hamlaychusau (chulay,toanbo){
  var count = chulay.split(chulay).length - 1;

  var sadasdasdsad = toanbo.substring(toanbo.indexOf(chulay) + 6); 
  return sadasdasdsad
}

export function hamlaychugiua (dau,cuoi , toanbo){
  var sadasdasdsad = hamlaychutruoc(cuoi,toanbo) ;
  var sadasdasdsad = hamlaychusau(dau,toanbo) ;
  return sadasdasdsad
}

export function chimuctentruyen (chulay,toanbo){
  var toanbo  = encodeURI(toanbo) ;
  var chulay  = encodeURI(chulay) ;
  var chulay = '%0D%0A' + chulay + '%0D%0A' ;
  var sadasdasdsad = hamlaychutruoc(chulay,toanbo) ;
  // console.log(chulay) ;
  var count = hamdemdong2(chulay,sadasdasdsad) ;
  return count
}

export function hamdemdong (chulay,toanbo){
  var sadasdasdsad = hamlaychutruoc(chulay,toanbo) ;
  // console.log(sadasdasdsad);
  var sabdhjasd  = encodeURI(sadasdasdsad) ;
  var count = sabdhjasd.split('%0D%0A').length - 1;
  count = count + 1 ;
  // alert(count);
  return count
}
export function laytudongtruoc (donglay,toanbo){
  var sadasdasd  = encodeURI(toanbo) ;
  var chulay  = '%0D%0A' ;
  // console.log(donglay) ;
  
  for (let i = 1; i < donglay ; i++) {
    var sadasdasd = hamlaychusau(chulay,sadasdasd) ;
  }
  // alert(count);
  sadasdasd  = decodeURI(sadasdasd) ;
  return sadasdasd
}
export function laytrongkhoangdong (dongtruoc,dongsau , toanbo){
  var sadasdasd = laytudongtruoc(dongtruoc,toanbo) ;
  // var giua = dongsau - dongtruoc + 1 ;
  var ewfwefwef = laytudongtruoc(dongsau,toanbo) ;
// var lastFive = ewfwefwef.substr(ewfwefwef.length - 30);
var lastFive = ewfwefwef.substring(0,30) ;

var okluon =  hamlaychutruoc(lastFive,sadasdasd) ;
  return okluon
}
export function laytudongsau (donglay,toanbo){
  var sadasdasd  = encodeURI(toanbo) ;
  var chulay  = '%0D%0A' ;
  // console.log(donglay) ;
  
  for (let i = 0; i < donglay ; i++) {
    var sadasdasd = hamlaychusau(chulay,sadasdasd) ;
  }
  // alert(count);
  sadasdasd  = decodeURI(sadasdasd) ;
  return sadasdasd
}
export function demdongbaonhieutu (toanbo){
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
    // console.log(lastChar);
    if ( lastChar != '.' )
    {
    }
    else
    {
      if ( sdfdsfsdffds > 70 )
      {
        i = 100 ;
        y = 200 ;
    
      }
      else
      {
  
      }
    }

  }
  i = 100 ;
 


 }

}

   
  }

  setTimeout(function () { 
    console.log(sadsadsda);
    return sadsadsda ;
         }, 100);
}
export function hamdemdong2 (chulay,toanbo){
  var sadasdasdsad = hamlaychutruoc(chulay,toanbo) ;
  // console.log(sadasdasdsad);
  var count = sadasdasdsad.split('%0D%0A').length ;
  count = count + 1 ;
  // alert(count);
  return count
}

export function hamdemchu (toanbo){
  var regex = /[a-zA-Z0-9]/g; // only count letters and numbers

  var count = toanbo.match(regex).length ;
  return count
}

