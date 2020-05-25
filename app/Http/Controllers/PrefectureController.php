<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Prefecture;

class PrefectureController extends Controller
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
        return view('prefectures.index')->with('prefectures', $prefectures);
    }
}
