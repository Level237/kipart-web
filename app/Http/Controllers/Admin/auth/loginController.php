<?php

namespace App\Http\Controllers\Admin\auth;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class loginController extends Controller
{
    public function index(){

        return view('admin.auth.login');
    }

    public function login(Request $request){

        $url=(new UrlServices())->getUrl();

        $response=Http::post($url."/api/login/admin",[
            'email' => $request->email,
            'password' => $request->password,
        ]);

    }
}
