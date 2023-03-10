<?php

namespace App\Http\Controllers\User\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    public function register(Request $request){

        $url=(new UrlServices)->getUrl();
        $response=Http::post($url.'/api/register',[
            'name'=>$request->name,
            'password'=>$request->password,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'brand_ambassadors_id'=>null
        ]);
        $data=json_decode($response->getBody());
        if(isset($data->error)){
            //return redirect()->back()->with('error',"une erreur a ete survenu");
            return $data;
        }else{
            Session::put('number',$request->phone_number);
            Session::save();

            return to_route('otp.index');

        }
    }
}
