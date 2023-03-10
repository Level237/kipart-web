<?php

namespace App\services\payments\om;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
class InitPaymentServices{

    public function init($number,$amount,$subId){

        $url=(new UrlServices())->getUrl();
        $accessToken=Session::get('tokenUser');
        $response=Http::retry(3,100,throw: false)->withToken($accessToken)->post($url.'/api/pay/withOrangeMoney'.$number.'/'.$amount.'/'.$subId);

        return $response;
    }
}