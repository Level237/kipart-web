<?php

namespace App\Http\Controllers\Passengers;

use App\Http\Controllers\Controller;
use App\services\api\UrlServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
class UpdatePassengerController extends Controller
{
    public function update(Request $request,$id){

        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenUser');
        $response=Http::withToken($token)->put($url.'/api/v1/update/passengers/'.$id,[
            'name'=>$request->name,
            'cni'=>$request->cni,
            'telephone'=>$request->telephone,
            "type"=>"homme",
            ]);

            return redirect()->back();
    }
}
