<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\services\agent\DetailsAgencyServices;

class DashboardController extends Controller
{
    public function index(){

        $detailAgency=(new DetailsAgencyServices())->getDetails();
        $countResource=$this->getCountResource();
        $tickets=$this->myTickets();
        $datas=json_decode($tickets->getBody());

        return view('agent.dashboard',compact('detailAgency','countResource','datas'));
        //return $tickets;
    }

    public function getCountResource(){
        $url=(new UrlServices())->getUrl();
        $token=Session::get('tokenAgency');
        $response=Http::withToken($token)->get($url.'/api/agent/v1/count/resources');

        return $response;
    }

    public function myTickets(){

        $tickets=(new DetailsAgencyServices())->getMyTickets();

        return $tickets;
    }
}
