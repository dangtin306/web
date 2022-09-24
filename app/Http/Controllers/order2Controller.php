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

class order2Controller extends Controller
{
    public function order(Request $request)  
    {
        $apikey = $request->apikey ;
      // return response()->json([$request->all()]);  
// echo( response()->json([$request->all()])) ;

$key = DB::table('users')->where('key', $apikey )->first();

$username  = $key->username ;
$orders = DB::table('orders')
->where('username', $username  )->orderBy('id', 'desc')->limit(50)
->select(array('id', 'username','url', 'money', 'createdate', 'amount', 'status' ))->get();

echo ($orders);


}}
