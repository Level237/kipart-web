<?php

namespace App\services\user;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailUserService{

    public function getCurrentUser(){

        $url=(new UrlServices())->getUrl();

        $token=Session::get('tokenUser');
        $response=Http::retry(3,100,throw: false)->withToken($token)->get($url.'/api/v1/details/user');

        return $response;
    }
}
