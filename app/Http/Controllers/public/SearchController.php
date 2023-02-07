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
            'type'=>$request->type,
            'type'=>$request->type,
            'type'=>$request->type,
            'type'=>$request->type,
            'type'=>$request->type,
        ];
        $datas=json_decode($listAgenciesWithPath->getBody());

        return view('search.step-one',compact('datas'));

    }

    public function stepTwo(Request $request){

        $listSubAgencies=(new ListSubAgencyServices())->index($request->agency_id);

        $datas=json_decode($listSubAgencies);

        return view('search.step-two',compact('datas'));
        //return $datas;
    }

    public function stepThree(Request $request){

        return view('search.step-three');
    }
}
