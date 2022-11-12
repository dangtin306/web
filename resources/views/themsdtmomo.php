<?php 
use Illuminate\Support\Collection ;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
$uri = $_SERVER['REQUEST_URI'];

$keyusers = explode('=key=', $uri , 2);
setcookie( 'urlsdt', 'https://hust.media/ruttien.php' , time() + (86400 * 30), "/");
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
$chuyensdt = './themsdt?=key='.$keyusers ;
header("Location: $chuyensdt");
exit;
   ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4574266110812955"
     crossorigin="anonymous"></script>