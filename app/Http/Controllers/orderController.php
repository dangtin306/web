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
      // return response()->json([$request->all()]);  
// echo( response()->json([$request->all()])) ;

$key = DB::table('users')->where('key', $apikey )->first();

$username  = $key->username ;
$orders = DB::table('orders')->orderBy('id')->where('service_name', 'chuyenxu' )->where('username', $username  )->limit(5)->offset(5)->get();

echo ($orders);


}}
