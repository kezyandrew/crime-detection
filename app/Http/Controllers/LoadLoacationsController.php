<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locations;

class LoadLoacationsController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
}
