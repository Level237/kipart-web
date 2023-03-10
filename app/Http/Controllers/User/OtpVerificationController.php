<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\services\api\UrlServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class OtpVerificationController extends Controller
{
    public function index(){
        $phone_number=Session::get("number");
        $phone_array=str_split($phone_number);
        $arrayLast=array($phone_array[count($phone_array) - 2],$phone_array[count($phone_array) - 1]);
        $arrayFirst=array($phone_array[0],$phone_array[1]);
        $numberFirst=implode($arrayFirst);
        $number_last=implode($arrayLast);
        return view('auth.otp',compact('number_last','numberFirst'));
    }

    public function verify(Request $request){
        $otps=$request->otp;
        $code=implode($otps);
        $phone_number=Session::get("number");
        $url=(new UrlServices())->getUrl();
        $response=Http::post($url.'/api/verify/Otp',[
            'otp'=>$code,
            'phone_number'=>$phone_number
        ]);
        $message=json_decode($response->getBody());

        if($message->message=="PING Invalide ou informations incorrecte"){
            return redirect()->back()->with('error',"Code Incorrect");
        }else{

            return $message;
        }

    }
}
