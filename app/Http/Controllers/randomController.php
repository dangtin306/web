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

class randomController extends Controller
{
    public function random(Request $request)  
    {
        $apikey = $request->key ;
        $picked = $request->picked ;
      // return response()->json([$request->all()]);  
// echo( response()->json([$request->all()])) ;

$key = DB::table('users')->where('key', $apikey )->first();

$username  = $key->username ;
// $orders = DB::table('orders')->where('service_name', 'chuyenxu' )->where('username', $username  )->get();
$thang = rand(0,27) ;
if ( $key->money < 0 )
{
    $money = DB::table('users')->where('key', $apikey )->value('money');
    return json_encode([
        'status' => 1,
        'message' => 'Thất bại, số xu bị âm',
        'result' =>  $money 
    ]);
}
else if  ( $key->money < $picked  )
{ $money = DB::table('users')->where('key', $apikey )->value('money');
    
    return json_encode([
        'status' => 1,
        'message' => 'Thất bại, số xu cần lớn hơn mức cược',
        'result' =>  $money 
    ]);
}
else if ( $thang == 15 )
{
    $xuhientai = $key->money ;
   $thang2 =  $picked * 7 + $xuhientai ;
    DB::table('users')
    ->where('key', $apikey )  // find your user by their email
    ->limit(1)  // optional - to ensure only one record is updated.
    ->update(['money' =>     $thang2 ]);  // update the record in the DB. 
   
    $money = DB::table('users')->where('key', $apikey )->value('money');
    DB::table('orders')->insert([
        'username' => $key->username ,
        'service_name' => 'x7 xu vòng quay may mắn' ,
        'money' =>  $picked ,
        'url' =>  $picked ,
        'createdate' => now() 
    ]);

    return json_encode([
        'status' => 2,
        'message' => 'Chúc mừng bạn đã chiến thắng giải đặc biệt ',
        'result' =>  $money , 
        'status' => 'hoantat'
    ]);
    
  
}
else if ( $thang < 4 )
{
    $xuhientai = $key->money ;
    $moderan = rand(4,11);
   $thang2 =  $picked * 2 + $xuhientai ;
    DB::table('users')
    ->where('key', $apikey )  // find your user by their email
    ->limit(1)  // optional - to ensure only one record is updated.
    ->update(['money' =>     $thang2 ]);  // update the record in the DB. 
   
    $money = DB::table('users')->where('key', $apikey )->value('money');
    DB::table('orders')->insert([
        'username' => $key->username ,
        'service_name' => 'x2 xu vòng quay may mắn' ,
        'money' =>  $picked  , 
        'url' =>  $picked ,
        'createdate' => now() , 
        'status' => 'hoantat'
    ]);

    return json_encode([
        'status' => $moderan ,
        'message' => 'Chúc mừng bạn đã chiến thắng x2 xu ',
        'result' =>  $money 
    ]);

  
  
}
else
{
    DB::table('users')
    ->where('key', $apikey )  // find your user by their email
    ->limit(1)  // optional - to ensure only one record is updated.
    ->update(['money' =>  $key->money  -  $picked  ]);  // update the record in the DB. 
    $money = DB::table('users')->where('key', $apikey )->value('money');
    DB::table('orders')->insert([
        'username' => '***' ,
        'service_name' => 'chơi vòng quay may mắn',
        'createdate' => now() , 
        'status' => 'hoantat'
    ]);
    return json_encode([
        'status' => 1,
        'message' => 'Chúc bạn may mắn lần sau',
        'result' =>  $money 
    ]);
  
  
  
}
echo ($thang);


}}
