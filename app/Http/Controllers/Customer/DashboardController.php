<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\services\user\DetailUserService;
class DashboardController extends Controller
{
    public function index(){

        $userCurrent=(new DetailUserService())->getCurrentUser();
        return view('customer.dashboard',compact('userCurrent'));
    }
}
