<?php

namespace App\services\public\search\agencies;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;

class ListAgencyWithPathServices{

    public function index($departure,$arrival){

        $url=(new UrlServices())->getUrl();
        $response=Http::retry(3,100,throw: false)->get($url.'/api/listAgencyByPath/'.$departure.'/'.$arrival);

        return $response;
    }
}
