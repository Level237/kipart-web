<?php

namespace App\services\payments\om;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
class StatusPaymentServices{

    public function payStatus($token,$payToken,$payment_id,$code,$subId,$price){

        $url=(new UrlServices())->getUrl();
        $accessToken=Session::get('tokenUser');
        $response=Http::withToken($accessToken)->get($url.'/api/v1/getPayment/status/'.$token.'/'.$payToken.'/'.$payment_id.'/'.$code.'/'.$subId.'/'.$price);

        return $response;
    }
}
