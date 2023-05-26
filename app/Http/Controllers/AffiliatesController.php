<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class AffiliatesController extends Controller
{
    private mixed $latitude1;
    private mixed $latitude2;
    private mixed $longitude1;
    private mixed $longitude2;

    /*public function __construct($lat1, $lon1, $lat2, $lon2)
    {
        $this->latitude1 = $lat1;
        $this->latitude2 = $lat2;
        $this->longitude1 = $lon1;
        $this->longitude2 = $lon2;
    }*/

    public function index()
    {
        $office_lat = '53.3340285';
        $office_lon = '-6.2535495';

        $file = file_get_contents(storage_path('affiliates.txt'));
        $str = "[" . str_replace("\n", ',', $file) . "]";
        $decodeJson = json_decode($str, true);
        $jsonData = collect($decodeJson)->sortBy('affiliate_id');

        $affiliates =[];
        foreach ($jsonData as $json) {
            $data = [];
            $distance = $this->distance($office_lat, $office_lon, $json['latitude'], $json['longitude']);
            if ($distance <= 100) {
                $data['affiliate_id'] = $json['affiliate_id'];
                $data['name'] = $json['name'];
                $data['distance'] = $distance;
                $affiliates[] = $data;
            }
        }

        return View::make("distance")->with('affiliates',$affiliates);
    }

    public function distance($lat1, $lon1, $lat2, $lon2): float|int
    {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        } else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            return ($miles * 1.609344);
        }
    }

}
