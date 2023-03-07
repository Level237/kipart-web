<?php

namespace App\services\api\brandAmbassador;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class ListBrandServices{

    public function list(){

        $url=(new UrlServices())->getUrl();

        $token=Session::get('token');
        $response=Http::withToken($token)->get($url.'/api/admin/v1/brandGirls/details');

        return $response;
    }
}
