<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\services\api\UrlServices;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function index(){

        $detailsUser=$this->getUserDetails();
        $countResource=$this->getCountResource();
        $token=Session::get('token');

        return view('admin.dashboard',compact('detailsUser','countResource'));
        //return $detailsUser;
    }

    public function getUserDetails(){
        $url=(new UrlServices())->getUrl();
        $token=Session::get('token');
        $response=Http::withToken($token)->get($url.'/api/admin/v1/details/admin');

        return $response;
    }

    public function getCountResource(){
        $url=(new UrlServices())->getUrl();
        $token=Session::get('token');
        $response=Http::withToken($token)->get($url.'/api/admin/v1/count/resources');

        return $response;
    }
}
