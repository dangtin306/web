<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use App\Models\User;

class TestController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function check(Request $request)
    {
      
        $user = User::where('username', $request->username)
            ->where('password', $request->password)
            ->first();

if($user) {
    Auth::loginUsingId($user->id);
    // -- OR -- //
    // Auth::login($user);
      $request->session()->regenerate();
        
            return redirect()->intended('/home');

} else {
 
  return back()->withErrors([
    'password' => 'The provided credentials do not match our records.',
])->onlyInput('password');
}

        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        
        //     return redirect()->intended('dashboard');
        // }

    }
}