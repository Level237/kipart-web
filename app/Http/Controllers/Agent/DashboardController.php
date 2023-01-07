<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use App\services\agent\DetailsAgencyServices;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $detailAgency=(new DetailsAgencyServices())->getDetails();


        return view('agent.dashboard',compact('detailAgency'));
    }
}
