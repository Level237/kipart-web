<?php

namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use App\services\api\UrlServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LogoutController extends Controller
{
    public function logout(Request $request){

        $url=(new UrlServices())->getUrl();
        $response=Http::post($url.'/logout/adm/private');
        $request->session()->forget('token');
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }
}
