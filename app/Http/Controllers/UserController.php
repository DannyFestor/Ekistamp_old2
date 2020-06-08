<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;

use Illuminate\Support\Facades\Log;

class UserController extends Controller
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
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $info = [];
       $user = Auth::user();
       $user->stations()->each(function($station, $key) use (&$info) {
           $prefectures[] = $station->prefecture;
           $cities[] = $station->city;
           $info[] = ['id' => $key, 'station' => $station, 'prefecture' => $station->prefecture, 'city' => $station->city];
       });
       return view('user.index', ['user' => $user, 'stations' => $info]);
   }

    public function addStation(Request $request) {
        $user = Auth::user();
        $ids = $request->data;
        $user->stations()->attach($ids);
        Log::channel('stderr')->info($ids);

        return $user->stations;
    }
}
