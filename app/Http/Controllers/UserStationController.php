<?php

namespace App\Http\Controllers;

use App\User;
use App\UserStation;
use Illuminate\Http\Request;

class UserStationController extends Controller
{
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
        //
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
                // Check if Entry already exists (where)
                // If not (firstOr), make new entry
                $target = UserStation::where([
                        ['user_id', '=', $request->user()->id],
                        ['station_id', '=', $data]
                    ])
                    ->firstOr(function() use ($request, $data) {
                        $userstation = new UserStation;
                        $userstation->user_id = $request->user()->id;
                        $userstation->station_id = $data;
                        $userstation->save();
                        return $userstation;
                    });
                array_push($ro, $target);
                }
        } catch(\Exception $e) {
            echo $e->getMessage();
        }
        return $ro;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UserStation  $userStation
     * @return \Illuminate\Http\Response
     */
    public function show(UserStation $userStation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserStation  $userStation
     * @return \Illuminate\Http\Response
     */
    public function edit(UserStation $userStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserStation  $userStation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserStation $userStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserStation  $userStation
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserStation $userStation)
    {
        //
    }
}
