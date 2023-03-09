<?php

namespace App\services\user\passengers;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrentPassagerServices{

    public function getPassagers($travel_id){

        $url = (new UrlServices())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::retry(3,100,throw: false)->withToken($token)->get($url.'/list/passengers/'.$travel_id);

        return $response;
    }
}
