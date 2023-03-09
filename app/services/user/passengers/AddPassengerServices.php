<?php

namespace App\services\user\passengers;

use GuzzleHttp\Client;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class AddPassengerServices{

    public function add($travel_id,$params,$subAgency_id){

        $url = (new UrlServices())->getUrl();
        $accessToken=Session::get('tokenUser');

        // $response = Http::withToken($accessToken)
        // ->post($url.'/api/v1/add/passengers/'.$travel_id,$params);

        $client = new \GuzzleHttp\Client();
    $response = $client->post($url.'/api/v1/add/passengers/'.$travel_id.'/'.$subAgency_id, [
        'headers' => ['Content-Type'=>'application/json','Authorization' => "Bearer $accessToken"],
        'body'    => $params


    ]);



        return json_decode($response->getBody());
    }
    }
