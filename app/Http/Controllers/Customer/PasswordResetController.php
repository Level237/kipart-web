<?php

namespace App\Http\Controllers\customer;

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

    return to_route('checkOtp');
   }

   public function CheckCode(Request $request){
    $number=Session::get('number');
    $response=Http::post('http://api.mykipart.com/api/password/code/check',[
        'code'=> $request->code,
        'phone_number' => $number
    ]);
    $code=json_decode($response);
    if ($code->message=='Le Code de reinitialisation de votre mot de passe est invalide'){
        return redirect()->back()->with('error','code incorrect');
    }
    if($code->message=='Le Code est Valide Vous serez rediriger vers un formulaire de reinitialisation de mot de passe'){
        return view('layouts.backoffice.customer.newPassword');
    }

   }
   public function newPassword(){
    $response=Http::post('http://api.mykipart.com/api/password/reset',[
    ]);
    return $response;


   }


   Public function resetPassword(){
    return view('layouts.backoffice.customer.sendcode');
   }

   Public function CheckOtp(){
    return view ('layouts.backoffice.customer.checkcode');
   }

}
