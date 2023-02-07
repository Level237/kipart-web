<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\user\DetailUserService;

class HomePageController extends Controller
{
    public function homepage(){

        $userCurrent=(new DetailUserService())->getCurrentUser();

        return view('homepage',compact('userCurrent'));
        //return $userCurrent;
    }
}
