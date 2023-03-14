<?php

namespace App\Http\Controllers\public;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\services\user\DetailUserService;
use App\services\public\search\SearchServices;
use App\services\public\search\agencies\ListSubAgencyServices;
use App\services\public\search\agencies\ListAgencyWithPathServices;

class SearchController extends Controller
{

    // choice Agency
    public function stepOne(Request $request){

        if($request->ajax()){

            return "Loading";
        }
        if($request->departure==$request->arrival){
            return redirect()->back()->with('error',"Erreur: la destination et l'arrivée ne doivent pas etre similaire");
        }else{
            $listAgenciesWithPath=(new ListAgencyWithPathServices())->index($request->departure,$request->arrival);
            $userCurrent=(new DetailUserService())->getCurrentUser();
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
            //return $listAgenciesWithPath;
            return view('search.step-one',compact('datas','userCurrent'));
            //return $request->dateDeparture;
        }


    }

    // choice SubAgency
    public function stepTwo(Request $request){
        $userCurrent=(new DetailUserService())->getCurrentUser();
        $arrayList=[];
        $listSubAgencies=(new ListSubAgencyServices())->index($request->agency_id);
        $request->session()->put('agency_name',$request->agency_name);
        $request->session()->put('agency_id',$request->agency_id);
        $datas=json_decode($listSubAgencies);
        $arrayTravel=$request->session()->get('arrayTravel');

        foreach($datas as $list){
            foreach($list as $item){
                if($item->localisation==$arrayTravel['departure']){
                    array_push($arrayList,$item);
                }

            }
        }
        if(count($arrayList)==1){
            $request->session()->put('subagency',$arrayList);
            $request->session()->forget('subagencyName');
            $request->session()->forget('subAgency_id');
            return to_route('search.step-three');
        }else{
            $request->session()->forget('subagency');
            return view('search.step-two',compact('arrayList','userCurrent'));
        }


    }

    // choice Travel
    public function stepThree(Request $request){
        $userCurrent=(new DetailUserService())->getCurrentUser();
        $arrayTravel=$request->session()->get('arrayTravel');
        $agencyName=$request->session()->get('agency_name');
        $agency_id=$request->session()->get('agency_id');

        if($request->session()->has('subagency')){
            $subAgency=$request->session()->get('subagency');
            foreach($subAgency as $s){
                $subAgencyName=$s->nom;
            }
        }else{
            $request->session()->put('subagencyName',$request->subAgencyName);
            $request->session()->put('subAgency_id',$request->subAgency_id);
            $subAgencyName=$request->session()->get('subagencyName');
        }


         $dataSearch=(new SearchServices())->searchByAgency($agency_id,$arrayTravel['type'],$arrayTravel['departure'],$arrayTravel['arrival'],$arrayTravel['departure_time'],$arrayTravel['dateDeparture'],$arrayTravel['number_of_places'],$arrayTravel['classe']);
         $datas=json_decode($dataSearch->getBody());
         $datas=$datas->data;

        //return $subAgency;
         return view("search.step-three",compact('agencyName',"datas",'userCurrent','subAgencyName'));
        //return $arrayTravel;

        // foreach($datas as $travel){
        //     dd($travel->departure);
        // }
        // dd($datas);
        //return $request->subAgency;
    }
}
