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
    public function index(Request $request){

        $userCurrent=(new DetailUserService())->getCurrentUser();
        $agency_name = $request->session()->get('agency_name');
        $arrayTravel=$request->session()->get('arrayTravel');
        $place=$arrayTravel['number_of_places'];
        $myTravel = [];

        if($request->session()->has('travels')){
            $request->session()->forget('travels');
        }
        $myTravel = [];

        $myTravel=[
            'departure'=>$request->departure,
            'arrival'=>$request->arrival,
            'date'=>$request->date,
            'hour'=>$request->hour,
            'places'=>$request->places,
            'classe'=>$request->classe,
            'price'=>$request->price,
        ];

        $request->session()->put('travels',$myTravel);
        $request->session()->put('travel_id',$request->travel_id);
        if(isset($userCurrent['errors'])){

            return to_route('go-to-login');
        }else{
            return view('passengers.add-passenger',compact('userCurrent','myTravel','agency_name','place'));
            //return $request->travel_id;
        }

    }

    public function add(Request $request)
    {
        $travel_id=$request->session()->get('travel_id');
        $count = count($request->input('name'));
        for ($i=0; $i<$count; $i++){
            $data[] = array('name' => $request->input('name')[$i], 'cni' => $request->input('cni')[$i],'type' => 'homme','telephone'=>$request->input('telephone')[$i]);
        }
        $passengers = response()->json(["passengers" => $data]);
        $request->session()->put('currentPassengers',$data);
        if($request->session()->has('subagency')){
            $subAgency=$request->session()->get('subagency');
            foreach($subAgency as $s){
                $subAgencyId=$s->id;
            }
        }else{
            $subAgencyId= $request->session()->get('subAgency_id');
        }
        $response = (new AddPassengerServices())->add($travel_id, json_encode($passengers->getData()),$subAgencyId);
        $request->session()->put('payment_id',$response->payment_id);

        return to_route('payment-review');
    }
}
