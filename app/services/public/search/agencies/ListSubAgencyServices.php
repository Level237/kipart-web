<?php

namespace App\services\public\search\agencies;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;

class ListSubAgencyServices{

    public function index($id){
        $url=(new UrlServices())->getUrl();
    $response=Http::retry(3,100,throw: false)->get($url.'/api/list/subAgencies/'.$id);

    return $response;
    }

}
