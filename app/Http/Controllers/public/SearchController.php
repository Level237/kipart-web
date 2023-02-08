<?php

namespace App\Http\Controllers\public;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\services\public\search\agencies\ListSubAgencyServices;
use App\services\public\search\agencies\ListAgencyWithPathServices;

class SearchController extends Controller
{
    public function stepOne(Request $request){

        $listAgenciesWithPath=(new ListAgencyWithPathServices())->index($request->departure,$request->arrival);
        $arrayTravel=[
            'type'=>$request->type,
            'departure'=>$request->departure,
            'arrival'=>$request->arrival,
            'dateDeparture'=>$request->dateDeparture,
            'departure_time'=>$request->departure_time,
            'number_of_places'=>$request->number_of_places,
            'classe'=>$request->classe,
        ];

        $request->session()->put('arrayTravel',$arrayTravel);

        $datas=json_decode($listAgenciesWithPath->getBody());

        return view('search.step-one',compact('datas'));

    }

    public function stepTwo(Request $request){

        $listSubAgencies=(new ListSubAgencyServices())->index($request->agency_id);
        $request->session()->put('agency_name',$request->agency_name);
        $datas=json_decode($listSubAgencies);

        return view('search.step-two',compact('datas'));
        //return $datas;
    }

    public function stepThree(Request $request){
        $arrayTravel=$request->session()->get('arrayTravel');
        $agencyName=$request->session()->get('agency_name');
         $request->session()->put('subAgency',$request->subAgency);
        return view('search.step-three',compact('arrayTravel','agencyName'));
        //return $request->subAgency;
    }
}
