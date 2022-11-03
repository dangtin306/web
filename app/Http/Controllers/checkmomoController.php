<?php

// ************************************
// Author : Le Van Hiep - vanhiep.net *
// ************************************

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;

class checkmomoController extends Controller
{
    public function checkmomo(Request $request)  
    {
        $chucmungchanle =
        "Chúc mừng mọi chuyện đã xong vui lòng chuyển vào số điện thoại ở dưới để tự động cộng xu nhé"
        ;
        header('Content-type: application/json; charset=UTF-8');
        $apikey = $request->apikey ;
        $chedo = $request->chedo ;
      // return response()->json([$request->all()]);  
// echo( response()->json([$request->all()])) ;

$key = DB::table('users')->where('key', $apikey )->first();
$settings = DB::table('settings')->where('webcon', 'hust.media' )->first();

$checkchedo  = $settings->checkchedo ;
$username2  = $key->username ;
$keyweb = $key->keyweb ;
$checkxu = $key->money ;
$checkmomo = DB::table('checkmomo')->where('username', $username2 )->first();
if ( $chedo == 'phone' )
{
    $phone = $request->user2 ;
    $checkphone = DB::table('checkmomo')->where('checkgiaodich', 'YES' )->where('phone', $phone )->where('username','!=' , $username2 )->first();
   
    if (isset($checkphone))
    {
        return json_encode([
            'status' => 0,
            'message' => 'Số điện thoại đã tồn tại vui lòng nhập số khác' ,
    
        ]);
    }
 else   if ( $username2 != '' )
    {
        if( isset($checkmomo ) ) {
            if ( $checkmomo->username )
            {
                $username = $checkmomo->username ;
                $affected = DB::table('checkmomo')
                  ->where('username', $username2)
                  ->update(['phone' => $phone ,
                  'keyweb' => $keyweb ,
                  'checkgiaodich' => 'NO'
                
                ]);
                return json_encode([
                    'status' => 1,
                    'message' => '  Chúc mừng bạn dữ liệu đã lưu vào hệ thống vui lòng chuyển chuyển 100 vnd vào số điện thoải ở dưới để xác nhận chính chủ ',
            
                ]);
            }
        }
        else 
        {
            
            DB::table('checkmomo')->insertOrIgnore([
                'username' => $username2  ,
                'keyweb' => $keyweb ,
                'phone' => $phone ,
                'checkgiaodich' => 'NO'

            ]);
            return json_encode([
                    'status' => 1,
                    'message' => '  Chúc mừng bạn dữ liệu đã lưu vào hệ thống vui lòng chuyển chuyển 100 vnd vào số điện thoải ở dưới để xác nhận chính chủ ',
            
                ]);
            
        }
         
    }
    
}
else if ( $chedo == 'phone2' )
{
    $phone = $request->user2 ;
    $nhamang = $request->nhamang ;
    $checkphone = DB::table('checkmomo')->where('checkgiaodich', 'YES' )->where('phone', $phone )->where('username','!=' , $username2 )->first();
   
    if (isset($checkphone))
    {
        return json_encode([
            'status' => 0,
            'message' => 'Số điện thoại đã tồn tại vui lòng thử lại' ,
    
        ]);
    }
 else   if ( isset($username2))
    {
        if( isset($checkmomo ) ) {
            if ( $checkmomo->username )
            {
                $username = $checkmomo->username ;
                $affected = DB::table('checkmomo')
                  ->where('username', $username2)
                  ->update(['phone' => $phone ,
                  'keyweb' => $keyweb ,
                  'nhamang' => $nhamang ,
                  'checkgiaodich' => 'NO'
                
                ]);
                return json_encode([
                    'status' => 1,
                    'message' => '  Chúc mừng bạn dữ liệu đã lưu vào hệ thống vui lòng mở telegram để xác nhận ( để app ko bị spam và bảo mật dữ liệu tuyệt đối ) ',
            
                ]);
            }
        }
        else 
        {
            
            DB::table('checkmomo')->insertOrIgnore([
                'username' => $username2  ,
                'keyweb' => $keyweb ,
                'phone' => $phone ,
                'nhamang' => $nhamang ,
                'checkgiaodich' => 'NO'

            ]);
            return json_encode([
                    'status' => 1,
                    'message' => ' Chúc mừng bạn dữ liệu đã lưu vào hệ thống vui lòng mở telegram để xác nhận ( để app ko bị spam và bảo mật dữ liệu tuyệt đối ) ',
            
                ]);
            
        }
         
    }
    
}
else if ( $chedo == 'checkxu' )
{
  if( isset($checkmomo->phone ) ) {

    return json_encode([
      'status' => 0,
      'money' => $checkxu ,
      'phonechuan' => $checkmomo->phone
      
      ]);

  }
 else
 {
  return json_encode([
    'status' => 0,
    'money' => $checkxu ,
    'phonechuan' => 'chưa có'
    
    ]);
 }
}
else if ( $chedo == 'checkxu3' )
{
  if( $key  ) {

    return json_encode([
      'status' => 0,
      'money' => $checkxu ,
      'chietkhau' => $key->ck
      
      ]);

  }
 else
 {
  return json_encode([
    'status' => 0,
    'money' => $checkxu ,
    'phonechuan' => 'chưa có'
    
    ]);
 }
}
else if ( $chedo == 'checkxu2' )
{
  if( isset($checkmomo->phone ) ) {
    $phone = $request->user2 ;
    $checkphone = DB::table('checkmomo')->where('checkgiaodich', 'YES' )->where('phone', $phone )->where('username', $username2 )->first();
    $checkphone2 = DB::table('checkmomo')->where('checkgiaodich', 'YES' )->where('username', $username2 )->first();
   
    if (isset($checkmomo->nhamang) && isset($checkphone2) )
    {
      return json_encode([
        'status' => 1,
        'money' => $checkxu ,
        'phonechuan' => $checkmomo->phone,
        'nhamang' => $checkmomo->nhamang,
        'message' => 'thành công' 
        ]);
    }
   else if (isset($checkphone))
    {
      return json_encode([
        'status' => 1,
        'money' => $checkxu ,
        'phonechuan' => $checkmomo->phone,
        'message' => 'thành công' 
        ]);
    }
    else if (isset($checkphone2))
    {
      return json_encode([
        'status' => 1,
        'money' => $checkxu ,
        'phonechuan' => $checkmomo->phone,
        'message' => 'thành công' 
        ]);
    }
    else
    {
      return json_encode([
        'status' => 0,
        'money' => $checkxu ,
        'phonechuan' => '' ,
        'message' => 'chưa xác nhận số dt ở telegram'
        ]);
    }
   

  }
 else
 {
  return json_encode([
    'status' => 0,
    'money' => $checkxu ,
    'phonechuan' => '' ,
    'message' => 'chưa nhập sdt' 
    ]);
 }
}
else if ( $chedo == 'doiso' )
{
  if( isset($checkmomo ) ) {
    if ( $checkmomo->username )
    {
        $username = $checkmomo->username ;
        $affected = DB::table('checkmomo')
          ->where('username', $username2)
          ->update(['phone' => '' ,
          'chedo' => '' ,
          'keyweb' => $keyweb ,
          'checkgiaodich' => 'NO'
        
        ]);
        return json_encode([
            'status' => 1,
            'message' => '  Chúc mừng bạn dữ liệu đã lưu vào hệ thống vui lòng chuyển chuyển 100 vnd vào số điện thoải ở dưới để xác nhận chính chủ ',
    
        ]);
    }
}

}
else if ( $chedo == 'checkxu4' )
{
  if( isset($checkmomo->phone ) ) {
    $phone = $request->user2 ;
    $checkphone = DB::table('checkmomo')->where('checkgiaodich', 'YES' )->where('phone', $phone )->where('username', $username2 )->first();
    $checkphone2 = DB::table('checkmomo')->where('checkgiaodich', 'YES' )->where('username', $username2 )->first();
    $chedomomo = $checkmomo->chedo ;
    if ($chedomomo == '' )
    {
      return json_encode([
        'status' => 2,
        'money' => $checkxu ,
        'phonechuan' => '' ,
        'message' => 'chưa chọn chế độ'
        ]);
    }
    else if (isset($checkphone))
    {
      return json_encode([
        'status' => 1,
        'money' => $checkxu ,
        'phonechuan' => $checkmomo->phone,
        'chedo' => $checkmomo->chedo,
        'message' => 'thành công' 
        ]);
    }
    else if (isset($checkphone2))
    {
      return json_encode([
        'status' => 1,
        'money' => $checkxu ,
        'phonechuan' => $checkmomo->phone,
        'chedo' => $checkmomo->chedo,
        'message' => 'thành công' 
        ]);
    }
    else
    {
      return json_encode([
        'status' => 0,
        'money' => $checkxu ,
        'phonechuan' => '' ,
        'message' => 'chưa xác nhận số dt ở telegram'
        ]);
    }
   

  }
 else
 {
  return json_encode([
    'status' => 0,
    'money' => $checkxu ,
    'phonechuan' => '' ,
    'message' => 'chưa nhập sdt' 
    ]);
 }
}
else if ( $chedo == 'chan' )
{
  if( isset($checkmomo->checkchedo )  )
  {
    $kiemchedo = $checkmomo->checkchedo ;
  if ($kiemchedo == $checkchedo )
  {
  return json_encode([
  'status' => 0,
  'message' => '  Vui lòng đợi tối thiểu 1 phút để thay đổi chẵn lẻ ',
  
  ]);
  }
  else 
  {
    DB::table('checkmomo')
    ->where('username', $username2)
    ->update(['chedo' => $chedo ,
    'checkchedo' => $checkchedo
  
  ]);
    return json_encode([
      'status' => 1,
      'message' => $chucmungchanle ,
      'checkchedo' => $checkchedo

  ]);
  }
  
  }

}
else if ( $chedo == 'le' )
{
  if( isset($checkmomo->checkchedo )  )
  {
    $kiemchedo = $checkmomo->checkchedo ;
  if ($kiemchedo == $checkchedo )
  {
  return json_encode([
  'status' => 0,
  'message' => '  Vui lòng đợi tối thiểu 1 phút để thay đổi chẵn lẻ ',
  
  ]);
  }
  else 
  {
    DB::table('checkmomo')
    ->where('username', $username2)
    ->update(['chedo' => $chedo ,
    'checkchedo' => $checkchedo
  
  ]);
    return json_encode([
      'status' => 1,
      'message' => $chucmungchanle,
      'checkchedo' => $checkchedo

  ]);
  }
  
  }

}
else if ( $chedo == 'magiaodich' )
{
if ( isset(   $checkmomo->phone ) )
{

    $magiaodich = $request->magiaodich ;
    $endpoint = "https://api.web2m.com/historyapimomo/9bd879e1-c1f1-e789-c549-55d545c2604b" ;
    $client = new \GuzzleHttp\Client();
    $id = 5;
    $value = "ABC";
    $response = $client->request('GET', $endpoint,  [
      'form_params' => [
         
      ]]);
    // url will be: https://vinasupport.com/test.php?key1=5&key2=ABC;
    $statusCode = $response->getStatusCode();
    $content = $response->getBody();

    $arr = json_decode($content);
    $json = $arr->momoMsg->tranList ;
  

    
 foreach($json as $query){
   
    // if ($query->tranId == "8097") {
    //     echo $item->content;
    // }

 if ($query->tranId ==  $magiaodich ) {
  $extra = json_decode($query->extra) ;
       $check = "ok" ;
      //  echo $query ;
      
    }
  }
  if ( isset($check)   )
  {
    if (  $check == "ok" && $extra->friendId == $checkmomo->phone  )
    {
      $affected = DB::table('checkmomo')
      ->where('username', $username2)
      ->update(['checkgiaodich' => 'YES' ]);
      return json_encode([
        'status' => 1,
        'message' => 'thanhcong' ,

    ]);
  
    }
   else
   {
    return json_encode([
      'status' => 0,
      'message' => 'Mã giao dịch ko đúng rùi',

  ]);
   }
  }
  else
  {
 return json_encode([
        'status' => 0,
        'message' => 'Mã giao dịch ko đúng',

    ]);
  }

  
}
else
{
  return json_encode([
    'status' => 0,
    'message' => 'Chưa nhập số điện thoại',

]);
}
   

  
}
    }
}