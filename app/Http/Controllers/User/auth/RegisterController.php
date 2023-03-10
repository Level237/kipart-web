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
        $response=Http::post($url.'/api/register');
        $data=json_decode($response->getBody());
        Session::put('number',$request->number);
        Session::save();
        if(isset($data->error)){
            return redirect()->back()->with('error',"une erreur a ete survenu");
        }else{

            return to_route('otp.index');

        }
    }
}
