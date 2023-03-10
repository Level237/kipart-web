<?php

namespace App\Http\Controllers\payments\stripe;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services\user\DetailUserService;

class PaymentWithStripeController extends Controller
{
    public function stepOne(Request $request){

        $currentPassengers = $request->session()->get('currentPassengers');
        $agency_name = $request->session()->get('agency_name');
        $travels=$request->session()->get('travels');
        $userCurrent=(new DetailUserService())->getCurrentUser();
        return view('payments.step-one',compact('userCurrent','currentPassengers','travels','agency_name'));
        //return $currentPassengers;
    }

    public function stepTwo(Request $request){

        if($request->method_payment=="visa-mastercard"){
            $currentPassengers = $request->session()->get('currentPassengers');
        $agency_name = $request->session()->get('agency_name');
        $travels=$request->session()->get('travels');
        $userCurrent=(new DetailUserService())->getCurrentUser();
            return view('payments.step-two',compact('userCurrent','currentPassengers','travels','agency_name'));
        }
        if($request->method_payment=="om"){

            return to_route("payment.withOm");
        }

    }
}
