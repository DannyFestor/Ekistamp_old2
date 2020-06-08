<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\User;
use App\StationUser;
use Illuminate\Http\Request;

class StationUserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ro = array();
        try {
            foreach($request->data as $data) {
                $userstation = new StationUser;
                $userstation->user_id = $request->user()->id;
                $userstation->station_id = $data;
                $userstation->save();
                array_push($ro, $userstation);
            }
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
        return $ro;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StationUser  $userStation
     * @return \Illuminate\Http\Response
     */
    public function show(StationUser $userStation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StationUser  $userStation
     * @return \Illuminate\Http\Response
     */
    public function edit(StationUser $userStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StationUser  $userStation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StationUser $userStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StationUser  $userStation
     * @return \Illuminate\Http\Response
     */
    public function destroy(StationUser $userStation)
    {
        //
    }
}
