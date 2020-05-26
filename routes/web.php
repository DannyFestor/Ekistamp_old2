<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/prefectures', 'PrefectureController@index')->name('prefectures.index');
Route::get('/prefectures/c/{id}', 'PrefectureController@cities')->where('id', '[0-9]+')->name("prefectures.cities");
Route::get('/cities', 'CityController@index')->name('cities.index');
Route::get('/cities/s/{id}', 'CityController@stations')->where('id', '[0-9]+')->name('cities.stations');
Route::get('/stations', 'StationController@index')->name('stations.index');

Route::post('/us', 'UserStationController@store')->name('stations.index');
