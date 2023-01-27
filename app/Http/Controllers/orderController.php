<?php


namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;

class orderController extends Controller
{
    public function order(Request $request)  
    {
        $apikey = $request->apikey ;
        $chedo = $request->chedo ;
      // return response()->json([$request->all()]);  
// echo( response()->json([$request->all()])) ;

$key = DB::table('users')->where('key', $apikey )->first();
if ( isset($key->username))
{
  $username  = $key->username ;
  if ( $chedo == 'clonetiktok' )
  {
    $arr = DB::table('orders')->where('category_code', 'clonetiktok' )->where('username', $username  )->orderBy('id', 'desc')->limit(5)->get();
  
  }
  else if ( $chedo == 'historycomics' )
  {
  //   $arr = array(
  //     "status" => "10" ,
  //     "message" => "Tính năng này chưa có "
  // );
  // echo json_encode($arr);
    $arr = DB::table('orders')->where('category_code', 'comics-checkip' )->where('username', $username  )->orderBy('id', 'desc')->limit(10)->get();
  
  }
  else
  {
    $arr = DB::table('orders')->where('service_name', 'chuyenxu' )->where('username', $username  )->orderBy('id', 'desc')->limit(5)->get();
  
  }
  echo ($arr);
}
else
{
  $arr = array(
    "status" => "10" ,
    "message" => "Vui lòng đăng nhập! "
);
echo json_encode($arr);
}





}}
