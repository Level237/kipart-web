<?php
namespace App\services\public\search;

use App\services\api\UrlServices;
use Illuminate\Support\Facades\Http;

class SearchServices{

    public function searchByAgency($id,$type,$departure,$arrival,$departure_time,$dateDeparture,$number_of_places,$classe){

        $url=(new UrlServices)->getUrl();

        $dataSearch =Http::retry(3,100,throw: false)->post($url.'/api/search/byAgency/'.$id,[
            'type' => $type,
            'departure' => $departure,
            'arrival' => $arrival,
            'departure_time' => $departure_time,
            'dateDeparture' => $dateDeparture,
            'number_of_places' => $number_of_places,
            'classe' => $classe,
        ]);

        return $dataSearch;
    }
}
