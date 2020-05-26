<?php

namespace App\Http\Controllers;

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
        //
        return $request;
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
