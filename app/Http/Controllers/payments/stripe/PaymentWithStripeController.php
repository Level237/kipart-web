<?php

namespace App\Http\Controllers\payments\stripe;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services\user\DetailUserService;

class PaymentWithStripeController extends Controller
{
    public function index(Request $request){

        $currentPassengers = $request->session()->get('currentPassengers');
        $agency_name = $request->session()->get('agency_name');
        $travels=$request->session()->get('travels');
        $userCurrent=(new DetailUserService())->getCurrentUser();
        return view('payments.step-one',compact('userCurrent','currentPassengers','travels','agency_name'));
        //return $currentPassengers;
    }
}
