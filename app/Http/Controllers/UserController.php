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

$service = $request->service ;
if ( $service == '34839' )
{
  $user = $request->user ;
$money = $request->money  ;
  $endpoint = "https://hust.media/testapi.php";
$client = new \GuzzleHttp\Client();
$id = 5;
$value = "ABC";
$response = $client->request('GET', $endpoint,  [
  'form_params' => [
      'key' => $key ,
      'action' => 'add',
      'service' => $service ,
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
} else 
{
  header('Content-type: application/json; charset=UTF-8');
  $comments = $request->binhluan ;
  $link = $request->lienketchay ;
  $quantity = $request->soluong ;

  $endpoint = "https://hust.media/testapi.php";
  $client = new \GuzzleHttp\Client();
  $id = 5;
  $value = "ABC";
  $response = $client->request('GET', $endpoint,  [
    'form_params' => [
        'key' => $key ,
        'action' => 'add',
        'service' => $service ,
        'link' => $link ,
        'quantity' => $quantity   ,
        'comments' => $comments ,
    ]]);
  // url will be: https://vinasupport.com/test.php?key1=5&key2=ABC;
  $statusCode = $response->getStatusCode();
  $content = $response->getBody();
  $content = json_decode($content);
  
  if ( !isset( $content->order ))
    {      
      $phanhoiorder = $content->error ;
      return json_encode([
        'status' => 0,
        'message' => $phanhoiorder 
        
        ]);
    }
      else {
   $order = $content->order ;
   $phanhoiorder = 'Chúc mừng bạn là người thứ '.$order.' ủng hộ App ' ;
        return json_encode([
          'status' => 1,
          'message' => $phanhoiorder ,

          
          ]);
      }
}
    
}


}
