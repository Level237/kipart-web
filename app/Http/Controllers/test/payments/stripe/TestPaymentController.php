<?php

namespace App\Http\Controllers\test\payments\stripe;

use App\Http\Controllers\Controller;
use App\services\test\payments\stripe\TestPaymentServices;
use Illuminate\Http\Request;

class TestPaymentController extends Controller
{


    public function testPayment(Request $request){
        if($request->session()->has('subagency')){
            $subAgency=$request->session()->get('subagency');
            foreach($subAgency as $s){
                $subAgencyId=$s->id;
            }
        }else{
            $subAgencyId= $request->session()->get('subAgency_id');
        }

        $payment_id= $request->session()->get('payment_id');
        //$travels=$request->session()->get('travels');
        $testPayment = (new TestPaymentServices())->pay($payment_id,$request->amount,234,$subAgencyId,$request->number,$request->exp_month,$request->exp_year,$request->cvv);
        $response=json_decode($testPayment);
        if(isset($response->message)){
            if($response->message=="succeeded"){

                return to_route('list.tickets')->with('success','paiement effectué avec success');
            }
        }
        else{

            return redirect()->back()->with("error","une erreur a été survenue");
            //return $response;
        }
        
    }
}
