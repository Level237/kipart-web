<?php

namespace App\services\user\passengers;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class CurrentPassagerServices{

    public function getPassagers($travel_id){

        $url = (new UrlServices())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->get($url.'/list/passengers/'.$travel_id);

        return $response;
    }
}
