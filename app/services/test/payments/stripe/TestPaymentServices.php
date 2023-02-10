<?php
namespace App\services\test\payments\stripe;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TestPaymentServices{

    public function pay($payment_id,$amount,$promo_code,$sub_agency_id,$number,$exp_month,$exp_year,$cvv){

        $url = (new UrlServices())->getUrl();
        $accessToken=Session::get('tokenUser');
        $response = Http::withToken($accessToken)->post($url .'/api/v1/stripe/test/payment/'.$payment_id.'/'.$amount.'/'.$promo_code.'/'.$sub_agency_id,[
            'number' => $number,
            'exp_month'=>$exp_month,
            'exp_year'=>$exp_year,
            'cvc'=>$cvv,
            'amount' => $amount,
            'description' => 'ticket payment'
        ]);

        return $response;
    }
}
