<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class markemapController extends Controller
{
    public function markMap(){
        $markers = DB::table('scan_input')
        ->select('location1','location2')
        ->get();

        return view('test', ["markers"=> $markers]);

        // return view('public/js/map',["markers"=>$markers]);
    }
}
