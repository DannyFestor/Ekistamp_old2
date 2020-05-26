<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prefecture;
use App\City;
use App\Station;

class StationController extends Controller
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
        $prefectures = Prefecture::all();
        $cities = City::all();
        $stations = Station::all();
        return view('stations.index')
        ->with('prefectures', $prefectures,)
        ->with('cities', $cities)
        ->with('stations', $stations);
    }
}
