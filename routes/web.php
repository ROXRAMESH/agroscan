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

Route::get('/home', function(){
    return view('home');
});

Route::get('/map1', function (){
    return view('map1');
});

Route::get('/table1', function (){
    return view('table1');
});

Route::get('/map1','App\Http\Controllers\mapController@mapData');

// Route::get('/map1','App\Http\Controllers\markemapController@markMap');

Route::get('/table1','App\Http\Controllers\filtertableController@fil');

// Route::get('/table1','App\Http\Controllers\filtertableController@fil2');

Route::get('/test','App\Http\Controllers\markemapController@markMap');

Route::get('/home','App\Http\Controllers\homeController@getHome');

// Route::get('/home','App\Http\Controllers\solutionController@getHome');

