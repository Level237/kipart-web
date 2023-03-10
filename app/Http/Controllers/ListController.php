<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;

class ListController extends Controller
{
    public function listDeparture(Request $request){

        $url=(new UrlServices())->getUrl();
        $array=["Douala","Yaoundé","Bafoussam","Dshang","Foumban","Kribi","Foumbot","Koutaba","Mbouda"];
        // $response=Http::get($url.'/api/list/departures',[
        //     'departure'=>$request->query
        // ]);

        return $array;
    }

    public function listArrival(Request $request){}
}
