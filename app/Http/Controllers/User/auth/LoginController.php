<?php

namespace App\Http\Controllers\User\auth;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\services\user\DetailUserService;

class LoginController extends Controller
{
    public function login(Request $request){

        $url=(new UrlServices())->getUrl();

        $response = Http::post($url."/api/login", [
            'phone_number' => $request->phone_number,
            'password' => $request->password,
        ]);

        $currentRoute=$request->session()->get('currentRoute');
        if(isset($response['error'])){
            return back()->with('error',"Numero de telephone ou mot de passe invalide");
        }else{
        $access_token = json_decode((string) $response->getBody(), true)['access_token'];
        Session::put('tokenUser', $access_token);
        Session::save();


            return to_route($currentRoute);

        //return $userCurrent;
    }


    }

    public function index(){

        return view('auth.login');

    }
}
