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

class orderController extends Controller
{
    public function order(Request $request)  
    {
        $apikey = $request->apikey ;
        $chedo = $request->chedo ;
      // return response()->json([$request->all()]);  
// echo( response()->json([$request->all()])) ;

$key = DB::table('users')->where('key', $apikey )->first();

$username  = $key->username ;
if ( $chedo == 'clonetiktok' )
{
  $orders = DB::table('orders')->where('category_code', 'clonetiktok' )->where('username', $username  )->orderBy('id', 'desc')->limit(5)->get();

}
else
{
  $orders = DB::table('orders')->where('service_name', 'chuyenxu' )->where('username', $username  )->orderBy('id', 'desc')->limit(5)->get();

}

echo ($orders);


}}
