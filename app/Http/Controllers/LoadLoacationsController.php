<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;
use Illuminate\Support\Facades\Auth;

class LoadLoacationsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function make(){
        // $table->string('location')->nullable();
        //     $table->string('country')->nullable();
        //     $table->string('region')->nullable();
        //     $table->string('ip')->nullable();
        //     $table->string('long')->nullable();
        //     $table->string('lat')->nullable();
        //     $table->string('created_By')->nullable();
        $data = Auth::user();

        $n = new Locations;
        $n->country = $data->country;
        $n->region = $data->city;
        $n->ip = $data->country_name;
        $n->long = $data->long;
        $n->lat = $data->lat;
        $n->created_By = $data->email;

        if($n->save()){
            return back();
        }


    }
}
