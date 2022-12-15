<?php 
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Hust Media</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        
        <div id="app">
            <appvue></appvue>
        </div>     
        <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      
        <script src="/js/app.js?v=0.1.0"></script>
    </body>
</html>

