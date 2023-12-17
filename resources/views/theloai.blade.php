<?php 
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;

   ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <?php
        $urigia = $_SERVER['REQUEST_URI'];
if (str_contains( $urigia , '/profile/search') ||
str_contains( $urigia , '/truyen-tranh/home')) { 
}
else if (str_contains( $urigia , 'profile/truyen-tranh/')) {

    $urigia = substr($urigia, strpos($urigia, '/truyen-tranh/') + 14);
    $urigia = 'https://tecom.pro/truyen-tranh/metadoctruyen.php/'.$urigia ;
  
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $urigia ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 20,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}
else if (str_contains( $urigia , '/truyen-tranh/')) {
    $urigia = substr($urigia, strpos($urigia, '/truyen-tranh/') + 14);
    $urigia = 'https://tecom.pro/truyen-tranh/metadoctruyen.php/'.$urigia ;
  
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $urigia ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 20,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}
else if ( !str_contains( $urigia , '/anime/home') && !str_contains( $urigia , '/anime/the-loai') && str_contains( $urigia , '/anime/') ) { 
    $urigia = explode("?url=", $urigia)[1];
 
    $urigia = 'https://tecom.pro/anime/meta.php/?url='.$urigia ;
  
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $urigia ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 20,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}
else if (str_contains( $urigia , '/truyen-tranh/')) {
    $urigia = substr($urigia, strpos($urigia, '/truyen-tranh/') + 14);
    $urigia = 'https://tecom.pro/truyen-tranh/metadoctruyen.php/'.$urigia ;
  
    $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $urigia ,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 20,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
}


        ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4574266110812955"
        crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    <link rel="stylesheet" type="text/css" href="https://vip.hust.media/css/app.css?v=2.4.9">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    @include('hellocss');
    {{-- <link rel="stylesheet" href="https://tecom.pro/okok/assets/vendor/api.php"  crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
</head>

<body>

    <div id="app">
        <appvue></appvue>
        <theloai></theloai>
    </div>
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <script src="https://vip.hust.media/js/app.js?v=2.4.9"></script>

    <script src="https://tecom.pro/okok/assets/vendor/js/helpers.js"></script>
    <script src="https://tecom.pro/okok/assets/js/config.js"></script>
    <script src="https://tecom.pro/okok/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="https://tecom.pro/okok/assets/vendor/js/menu.js"></script>
    <script src="https://tecom.pro/okok/assets/js/main.js"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-CWZJNXPN7L"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-CWZJNXPN7L');
    </script>
</body>

</html>



<style>

</style>