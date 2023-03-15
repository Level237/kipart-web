<?php

namespace App\Http\Controllers;

use App\services\api\UrlServices;
use Illuminate\Http\Request;
use App\services\user\DetailUserService;
use Illuminate\Support\Facades\Http;

class HomePageController extends Controller
{
    public function homepage(){

        $userCurrent=(new DetailUserService())->getCurrentUser();
        $url=(new UrlServices())->getUrl();
        $hours=Http::retry(3,400,throw: false)->get($url.'/api/list/hours');
        $hours=json_decode($hours);
        //return $hours;
        return view('homepage',compact('userCurrent','hours'));
        //return $userCurrent;
    }
}
