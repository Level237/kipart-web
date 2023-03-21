<?php

namespace App\Http\Controllers\payments\stripe;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services\user\DetailUserService;
use Illuminate\Support\Facades\Http;
use App\services\api\UrlServices;
use Illuminate\Support\Facades\Session;
class PaymentWithStripeController extends Controller
{
    public function stepOne(Request $request){

        $travel_id = $request->session()->get('travel_id');
        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenUser');
        $list=Http::withToken($token)->get($url."/api/v1/list/passengers/".$travel_id);
        $data=json_decode($list);
        $agency_name = $request->session()->get('agency_name');
        $travels=$request->session()->get('travels');
        $currentPassenger=$request->session()->get('currentPassengers');

        $userCurrent=(new DetailUserService())->getCurrentUser();
        $count=count($currentPassenger);
        //return $count;
        return view('payments.step-one',compact('userCurrent','travels','agency_name','data','count'));
        //return $currentPassengers;
    }

    public function stepTwo(Request $request){

        if($request->method_payment=="visa-mastercard"){
            $currentPassengers = $request->session()->get('currentPassengers');
        $agency_name = $request->session()->get('agency_name');
        $travels=$request->session()->get('travels');
        $userCurrent=(new DetailUserService())->getCurrentUser();
        $count=count($currentPassengers);
            return view('payments.step-two',compact('userCurrent','currentPassengers','travels','agency_name','count'));
        }
        if($request->method_payment=="om"){

            return to_route("index.om");
        }

    }
}
