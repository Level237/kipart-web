<?php

namespace App\Http\Controllers\public;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use App\services\public\search\agencies\ListAgencyWithPathServices;

class SearchController extends Controller
{
    public function stepOne(Request $request){

        $listAgenciesWithPath=(new ListAgencyWithPathServices())->index($request->departure,$request->arrival);

        $datas=json_decode($listAgenciesWithPath->getBody());

        return view('search.step-one',compact('datas'));

    }

    public function stepTwo(Request $request){

    }
}
