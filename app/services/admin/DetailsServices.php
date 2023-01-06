<?php
namespace App\services\admin;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DetailsServices{

    public function getUserDetails(){
        $url=(new UrlServices())->getUrl();
        $token=Session::get('token');
        $response=Http::withToken($token)->get($url.'/api/admin/v1/details/admin');

        return $response;
    }
}
