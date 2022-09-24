<?php

// ************************************
// Author : Le Van Hiep - vanhiep.net *
// ************************************

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Contact;


class UserController extends Controller
{
    public function testapi(Request $request)  
    {
      // return response()->json([$request->all()]);  
// echo( response()->json([$request->all()])) ;
$key = $request->key ;
$user = $request->user ;
$money = $request->money  ;
      $endpoint = "https://tuongtac.fun/testapi.php";
$client = new \GuzzleHttp\Client();
$id = 5;
$value = "ABC";
$response = $client->request('GET', $endpoint,  [
  'form_params' => [
      'key' => $key ,
      'action' => 'add',
      'service' => '34839' ,
      'link' => $user ,
      'quantity' => $money   ,
  ]]);
// url will be: https://vinasupport.com/test.php?key1=5&key2=ABC;
$statusCode = $response->getStatusCode();
$content = $response->getBody();
$content = json_decode($content);

if ( !isset( $content->order ))
  {      
    echo($content->error ) ;
    
  }
    else {
      echo("Chuyển tiền thành công " ) ;
    }
}}
