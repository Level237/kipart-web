<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\services\agent\DetailsAgencyServices;
use Illuminate\Database\Eloquent\Collection;

class DashboardController extends Controller
{
    public function index(){

        //$detailSubAgency=(new DetailsAgencyServices())->getDetails();
        $detailAgency=(new DetailsAgencyServices())->detailAgency();
        $countResource=$this->getCountResource();
        $tickets=$this->myTickets();
        $datas=json_decode($tickets->getBody());
        $datasAgency=json_decode($detailAgency->getBody());
        if(isset($detailAgency['errors'])){
            return to_route('agent.login');
        }else{
            //return $datas;
            return view('agent.dashboard',compact('datasAgency','countResource','datas'));
            //return $detailAgency;
        }



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
