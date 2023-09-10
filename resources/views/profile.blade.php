<?php 
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;
$client = new \GuzzleHttp\Client();
$endpoint = "https://hust.media/loadcute3.php" ;
$response = $client->request('GET', $endpoint);
$statusCode = $response->getStatusCode();
$content = $response->getBody();
header('Content-type: application/json; charset=UTF-8');
echo  $content ;

   ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4574266110812955"
     crossorigin="anonymous"></script>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <title>OK</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <div id="app">
            <profile></profile> 
        </div>     
        <script src="/js/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="/js/bootstrap.min.js" ></script>
          
        <script src="/js/app.js"></script>
    </body>
</html>