<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
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
        $cities = City::all();
        return $cities;
    }

    public function stations(Request $request)
    {
        error_log($request->id);
        try {
            $stations = City::find($request->id)->stations;
            return $stations;
        } catch(\Exception $e) {
            error_log($e);
        }
    }
}
