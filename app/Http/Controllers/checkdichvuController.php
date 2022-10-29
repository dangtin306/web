<?php
 
 namespace App\Http\Controllers;

 use App\Http\Requests\ContactRequest;
 use Illuminate\Http\Request;
 use App\Models\Contact;
 use Illuminate\Support\Collection ;
 use Illuminate\Support\Facades\DB;
 

class checkdichvuController extends Controller
{

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkdichvu(Request $request)
    {
      
        if (isset($request->theloai) )
        {
            $theloai = $request->theloai ;
            $okk = DB::table('service')->where('webcon', 'hust.media' )->where('status', 'show' )->where('category', $theloai )->limit(50)->select(array('id', 'stt','minorder', 'maxorder', 'name', 'money', 'status' ))->get();
            echo ($okk);
        }
       else if (isset($request->dichvu))
       {
       $dichvu = $request->dichvu ;
       $okk = DB::table('service')->where('webcon', 'hust.media' )->where('status', 'show' )->where('id', $dichvu )->limit(1)->select(array('id', 'stt','minorder', 'maxorder', 'name', 'money', 'status','content' ))->first();
       $okk = json_encode( $okk);
       echo ($okk);
       
       }


    }
}