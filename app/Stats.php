<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Crime;



class Stats extends Controller
{
    //

    public function crime_rates(){
        $all = Crime::orderBy('created_at', 'desc');
        $current_location = Crime::where([
            'location'=>session('location')
        ]);
        
        $all_num = count($all);
        $current_location_num = count($current_location);
        
        $risk = ($current_location_num / $all_num) * 100;
        return ($risk);

    }
}
