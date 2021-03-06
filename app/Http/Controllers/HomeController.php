<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Crime;
use App\Locations;
use Illuminate\Support\Facades\Auth;
use App\Stats;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        if(!session('location')){

            return view('startSession');
        }
        


        $user = Auth::user()->email;
        $locations = Locations::orderBy('id', 'desc')->where('created_By', $user)->get();
        $crimes = Crime::orderBy('id', 'desc')->where('created_By', $user)->get();
        $categories = Category::orderBy('id', 'desc')->get();

        return view('home')
            ->with('categories', $categories)
            ->with('locations', $locations)
            ->with('crimes', $crimes);
    }

    public function startSession(){

        return view('startSession');
    }
}
