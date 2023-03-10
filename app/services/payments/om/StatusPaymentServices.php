<?php

namespace App\services\payments\om;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;

class StatusPaymentServices{

    public function payStatus($token,$payToken,$payment_id,$code,$subId,$price){

        $url=(new UrlServices())->getUrl();
        $response=Http::get($url.'/api/getPayment/status/'.$token.'/'.$payToken.'/'.$payment_id.'/'.$code.'/'.$subId.'/'.$price);

        return $response;
    }
}