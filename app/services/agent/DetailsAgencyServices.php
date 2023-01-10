<?php

namespace App\services\agent;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailsAgencyServices{

    public function getDetails(){

        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/details/subAgent');

        return $response;
    }

    public function getMyTickets(){

        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/list/ticket');

        return $response;
    }

    public function detailAgency(){

        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/details/AgencyBySubAgent');

        return $response;
    }
}
