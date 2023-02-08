<?php

namespace App\Http\Controllers\public;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\services\public\search\agencies\ListSubAgencyServices;
use App\services\public\search\agencies\ListAgencyWithPathServices;
use App\services\public\search\SearchServices;

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
        //return $request->dateDeparture;

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
         $dataSearch=(new SearchServices())->searchByAgency(2,$arrayTravel['type'],$arrayTravel['departure'],$arrayTravel['arrival'],$arrayTravel['departure_time'],$arrayTravel['dateDeparture'],$arrayTravel['number_of_places'],$arrayTravel['classe']);
         $datas=json_decode($dataSearch);
         $datas=$datas->data;

         return view("search.step-three",compact('agencyName',"datas"));
        //return $arrayTravel;

        // foreach($datas as $travel){
        //     dd($travel->departure);
        // }
        // dd($datas);
        //return $request->subAgency;
    }
}
