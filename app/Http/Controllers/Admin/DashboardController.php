<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\services\api\UrlServices;

use App\Http\Controllers\Controller;
use App\services\admin\DetailsServices;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){

        $detailsUser=(new DetailsServices())->getUserDetails();
        $countResource=$this->getCountResource();


        return view('admin.dashboard',compact('countResource','detailsUser'));
        //return $countResource;
    }



    public function getCountResource(){
        $url=(new UrlServices())->getUrl();
        $token=Session::get('token');
        $response=Http::withToken($token)->get($url.'/api/admin/v1/adm/resource');

        return $response;
    }
}
