<?php

namespace App\services\user;

class DetailUserService{

    public function getCurrentUser(){

        $url=(new UrlServices())->getUrl();

        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->get($url.'/api/v1/details/user');

        return $response;
    }
}
