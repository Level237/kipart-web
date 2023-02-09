<?php

namespace App\Http\Controllers\Passengers;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\services\user\DetailUserService;
use App\services\user\passengers\AddPassengerServices;

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

    public function add(Request $request)
    {
        $count = count($request->input('name'));
        for ($i=0; $i<$count; $i++){
            $data[] = array('name' => $request->input('name')[$i], 'cni' => $request->input('cni')[$i],'type' => 'homme','telephone'=>$request->input('telephone')[$i]);
        }
        $passengers = response()->json(["passengers" => $data]);

        $response = (new AddPassengerServices())->add(3, json_encode($passengers->getData()));

        return $response;
    }
}
