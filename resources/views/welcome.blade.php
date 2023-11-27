<?php 
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
  $ngaunhien2 =  rand(1,2) ;
  if ( $ngaunhien2 == "1")
  {
    $okloadimg = "https://hust.media/img/icon/loadgau.png" ;
  }
  else {
    $okloadimg = "https://hust.media/img/icon/loading2.gif" ;
  }
?>
<div id="loadinggg">
    <img id="loading-image" src="<?=$okloadimg;?>" alt="Loading..." />
</div>

<style>
#loadinggg {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0.7;
    background-color: #fff;
    z-index: 99;
}
</style>
<script>
$(document).ready(function() {
    setTimeout(function() {
        $('#loadinggg').hide();
    }, 200)
});
</script>
<?php

$uri = $_SERVER['REQUEST_URI'];

$keyusers = explode('=key=', $uri , 2);

if ( $keyusers[0] == "/" || $keyusers[0] == "/okluon" )
{

}

else{


     if ( isset($keyusers[1]))
    {
        $keyusers = $keyusers[1] ;
    }
}

$key = DB::table('users')->where('key', $keyusers )->first();

    if ( $keyusers != "" && $key != ""  )
    {
        setcookie( 'apikey', $keyusers, time() + (86400 * 30), "/");
        if (Auth::check()) {
    $user = Auth::user() ;
    $username = $user->username  ;
    echo ("Tải khoản của bạn là : ".$username)  ;
} else {
    $username2 = $key->username ;
        $password2 = $key->password ;
        $user2 = User::where('username', $username2 )
            ->where('password', $password2 )
            ->first();
            if($user2) {
    Auth::loginUsingId($user2->id);
    // -- OR -- //
    // Auth::login($user);
    //   $request->session()->regenerate();
        
    $username = $key->username ;     
    echo ("Tải khoản của bạn là : ".$username)  ;
} 
else
{
    return redirect()->intended('/login');
}
}

// $_COOKIE["apikey"] 
}
else if
( isset($_COOKIE["apikey"])   )
{
    $apikey = $_COOKIE["apikey"]; 
    $key = DB::table('users')->where('key', $apikey )->first();

$username  = $key->username ;
echo ("Tải khoản của bạn là : ".$username)  ;
}

if ( isset($username))
{
    setcookie( 'username', $username, time() + (86400 * 30), "/");


}

   ?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4574266110812955"
        crossorigin="anonymous"></script>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="theme-color" content="#ffe4e1">
    <meta name="apple-mobile-web-app-title" content="hust.media">
    <link rel="apple-touch-icon" href="https://i.imgur.com/33DklOK.png">
    <meta property="og:image" href="https://i.imgur.com/33DklOK.png">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" type="text/css" href="/css/app.css"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    <link href="{{ asset('css/app.css?v=2.3.7') }}" rel="stylesheet">
    <!-- <title>Hust Media</title> -->

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    @include('hellocss');
    {{-- <link rel="stylesheet" href="https://tecom.pro/okok/assets/vendor/api.php"  crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
</head>

<body>
    <div id="app">
        <appvue></appvue>
    </div>
    {{-- <script src="https://js.pusher.com/7.2/pusher.min.js"></script> --}}

    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> -->
    <script src="/js/bootstrap.min.js"></script>

    <script src="/js/app.js?v=2.3.7"></script>
    <script src="https://tecom.pro/okok/assets/vendor/js/helpers.js"></script>
    <script src="https://tecom.pro/okok/assets/js/config.js"></script>
    <script src="https://tecom.pro/okok/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="https://tecom.pro/okok/assets/vendor/js/menu.js"></script>
    <script src="https://tecom.pro/okok/assets/js/main.js"></script>
    <script>
    setTimeout(function() {
        $('#loadinggg').hide();
    }, 200);
    </script>
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