<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\services\agent\DetailsAgencyServices;

class TicketController extends Controller
{
    public function selectFilter(){

        $detailAgency=(new DetailsAgencyServices())->detailAgency();
        $detailSubAgency=(new DetailsAgencyServices())->getDetails();
        $datasAgency=json_decode($detailAgency->getBody());
        return view('agent.tickets.select-filter',compact('datasAgency'));
    }

    public function index(){

        $tickets=(new DetailsAgencyServices())->getMyTickets();
        $datas=json_decode($tickets->getBody());
        $detailAgency=(new DetailsAgencyServices())->detailAgency();
        $detailSubAgency=(new DetailsAgencyServices())->getDetails();
        $datasAgency=json_decode($detailAgency->getBody());
        return view('agent.tickets.index',compact('datas','datasAgency'));
        //return $detailAgency;
    }
}
