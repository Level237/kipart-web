<?php

namespace App\Http\Controllers\public;

use Illuminate\Http\Request;
use App\services\api\UrlServices;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function ListAgencyWithPath($departure,$arrival){

        $url=(new UrlServices())->getUrl();
        $response=Http::get($url.'');
    }
}
