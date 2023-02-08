<?php

namespace App\Http\Controllers\Passengers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services\user\DetailUserService;

class AddPassengerController extends Controller
{
    public function index(){

        $userCurrent=(new DetailUserService())->getCurrentUser();

        if(isset($userCurrent['errors'])){

            return to_route('go-to-login');
        }else{
            return view('passengers.add-passenger',compact('userCurrent'));
        }
       
    }

    public function 
}
