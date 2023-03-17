<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function ListTicket (){

        $accessToken= Session::get('tokenUser');
        $response=Http::withToken($accessToken)->get('http://api.mykipart.com/api/v1/list/tickets');
        $tickets=json_decode($response->body());
        //return $tickets;


        return view('customer.ListTicket', compact('tickets'));
    }

    public function DisplayTicket($id){
        $accessToken= Session::get('tokenUser');
        $response=Http::retry(3,300,throw:false)->withToken($accessToken)->get('http://api.mykipart.com/api/v1/get/qrCode/'.$id);
        $ticket=json_decode($response->body());

        //return $response;

        return view('customer.DisplayTicket', compact('response'));
    }
}



