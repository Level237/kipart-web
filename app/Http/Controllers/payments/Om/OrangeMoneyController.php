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

        $sub_agency_id= $request->session()->get('subAgency_id');
        $payment_id= $request->session()->get('payment_id');
        $code=null;
        $travels=$request->session()->get('travels');
        $initPayment=(new InitPaymentServices())->init($request->number,$travels['price'],$sub_agency_id);
        $initresponse=json_decode($initPayment->getBody());
        if(isset($initresponse->accessToken)){
            $statusPayment=(new StatusPaymentServices())->payStatus($initresponse->accessToken,$initresponse->payToken,$payment_id,$code,$sub_agency_id,$travels['price']);
            $statusresponse=json_decode($statusPayment->getBody());

            if(isset($statusresponse->status)){

                if($statusresponse->status=="CANCELLED"){
                    return redirect()->back()->with("error","transaction annulée");
                }
                if($statusresponse->status=="EXPIRED"){
                    return redirect()->back()->with("error","votre transaction à expiré");
                }
                if($statusresponse->status=="SUCCESSFULL"){

                    return $statusresponse;
                }
                return redirect()->back()->with("error","une erreur s'est produit");
            }

        }
       
    }
}
