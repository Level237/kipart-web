<?php

namespace App\Http\Controllers\Agent\auth;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class LogoutController extends Controller
{
    public function logout(Request $request){

        $url=(new UrlServices())->getUrl();
        $response=Http::post($url.'/logout/agt/private');
        $request->session()->forget('tokenAgency');
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }
}
