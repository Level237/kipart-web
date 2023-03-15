<?php

namespace App\Http\Controllers\payments\Om;

use App\Http\Controllers\Controller;
use App\services\payments\om\InitPaymentServices;
use App\services\payments\om\StatusPaymentServices;
use Illuminate\Http\Request;
use App\services\user\DetailUserService;
class OrangeMoneyController extends Controller
{

    public function index(Request $request){

        $currentPassengers = $request->session()->get('currentPassengers');
        $agency_name = $request->session()->get('agency_name');
        $travels=$request->session()->get('travels');
        $userCurrent=(new DetailUserService())->getCurrentUser();

        return view('payments.payment-with-om',compact('userCurrent','currentPassengers','travels','agency_name'));
    }
    public function pay(Request $request){

        if($request->session()->has('subagency')){
            $subAgency=$request->session()->get('subagency');
            foreach($subAgency as $s){
                $subAgencyId=$s->id;
            }
        }else{
            $subAgencyId= $request->session()->get('subAgency_id');
        }
        $payment_id= $request->session()->get('payment_id');
        $code="123";
        $travels=$request->session()->get('travels');
        $initPayment=(new InitPaymentServices())->init($request->number,1,$subAgencyId);
        $initresponse=json_decode($initPayment->getBody());

        if(isset($initresponse->accessToken)){
            $statusPayment=(new StatusPaymentServices())->payStatus($initresponse->accessToken,$initresponse->payToken,$payment_id,$code,$subAgencyId,1);
            $statusresponse=json_decode($statusPayment->getBody());

            if(isset($statusresponse->status)){

                if($statusresponse->status=="CANCELLED"){
                    return redirect()->back()->with("cancel","votre transaction a été annulée");
                }
                if($statusresponse->status=="EXPIRED"){
                    return redirect()->back()->with("expired","votre transaction à expiré");
                }
                if($statusresponse->status=="SUCCESSFULL"){

                    return $statusresponse;
                }
                return redirect()->back()->with("error","une erreur s'est produit");
            }
            return $statusPayment;
        }

        if($initresponse->message="Votre Credit est insuffisant"){
            return redirect()->back()->with("fail","Credit insuffisant!");
        }

    }
}
