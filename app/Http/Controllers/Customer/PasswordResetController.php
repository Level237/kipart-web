<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class PasswordResetController extends Controller
{
   public function SendCode (Request $request){
    $number=$request->phone;
    Session::put('number', $number);
    Session::save();
    $response= Http::post('http://api.mykipart.com/api/sendCode',[
        'phone_number'=> $number
    ]);


    $responseData=json_decode($response);

    if(isset($responseData->phone_number)){
        return redirect()->back()->with('error','Numero invalide ou Incorrect');
    }else{
        return to_route('checkOtp');
    }
   }

   public function CheckCode(Request $request){
    $number=Session::get('number');

    $response=Http::post('http://api.mykipart.com/api/password/code/check',[
        'code'=> $request->code,
        'phone_number' => $number
    ]);
    $code=json_decode($response);
    if (isset($code->code)){
        return redirect()->back()->with('error','code incorrect');
    }else{
        $code=$request->session()->put("code",$request->code);
        return view('layouts.backoffice.customer.newPassword');
    }


   }
   public function newPassword(Request $request){
    $number=Session::get('number');
    $code=Session::get('code');
    $response=Http::post('http://api.mykipart.com/api/password/reset',[
        'code'=>$code,
        'phone_number'=>$number,
        'password'=>$request->password,
        'password_confirmation'=>$request->password_confirmation
    ]);

    $response=json_decode($response);
    if(isset($response->password)){
        return redirect()->back()->with('error','Rassurez vous que les deux mots de passe sont exactes!');
    }
    else{
        return to_route('login')->with('success','mot de passe reinitialiser avec success');
    }
   }


   Public function resetPassword(){
    return view('layouts.backoffice.customer.sendcode');
   }

   Public function CheckOtp(){
    return view('layouts.backoffice.customer.checkcode');
   }

}
