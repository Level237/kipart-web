<?php

namespace App\services\api\brandAmbassador;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CreateBrandServices{

    public function create($request){

        $url=(new UrlServices())->getUrl();

        $token=Session::get('token');
        $response=Http::withToken($token)->post($url.'/api/admin/v1/brands',[
            'name'=>$request->name
        ]);

        return $response;
    }
}
