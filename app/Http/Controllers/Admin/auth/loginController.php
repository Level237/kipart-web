<?php

namespace App\Http\Controllers\Admin\auth;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function index()
    {

        return view('admin.auth.login');
    }

    public function login(Request $request)
    {


        $url = (new UrlServices())->getUrl();

        $response = Http::post($url . "/api/login/admin", [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $access_token = json_decode((string) $response->getBody(), true)['access_token'];
        Session::put('token', $access_token);
        Session::save();

        if(isset($response['error'])){
            return back()->with('fail',$response["error"]);
        }

        return to_route('admin.dashboard');
        }
    }
