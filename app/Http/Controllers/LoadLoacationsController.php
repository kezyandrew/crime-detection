<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
$client = new \GuzzleHttp\Client();

// $temp = Request::ip();

class LoadLoacationsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function make(Request $request){

        // $response = $client->request('POST', 'https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAxPyBRZtDj7ssvtYE5_ExKC1aIgfYX_LU');
        // $data = $response->getBody()->getContents();
        // $json = json_decode($response->getBody());
        
        $url = "https://www.googleapis.com/geolocation/v1/geolocate?key=AIzaSyAxPyBRZtDj7ssvtYE5_ExKC1aIgfYX_LU";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $apiResponse = curl_exec($ch);
        curl_close($ch);
        $jsonArrayResponse = json_decode($apiResponse);

        foreach ($jsonArrayResponse as $response) {
            if (gettype($response) == 'object'){

                session([
                    'longitude'=> $response->lng,
                    'latitude'=> $response->lat
                ]);
            }
        }

        $temp = $request->ip();
        return print_r($temp);

        // if ($temp == "::1" || "127.0.0.1"){
        //     $temp = '109.223.139.1';
        // }

        $url = "http://api.ipstack.com/".$temp."?access_key=bf01f636b7ad6832e3e7a97ba16ccfab";
        
        $response = Http::get($url);
        $data = $response->json();

        session([
            'location'=> $data['city'],
            'region'=> $data['region_name'],
            // 'longitude'=> $data['longitude'],
            // 'latitude'=> $data['latitude']
             ]);        

        $n = new Locations;
        $n->country = $data['country_name'];
        $n->region = $data['region_name'];
        $n->location = $data['city'];
        $n->ip = $data['ip'];
        $n->long = session('longitude');
        $n->lat = session('latitude');
        $n->created_By = Auth::user()->email;

        if($n->save()){
            return back();
        }


    }
}
