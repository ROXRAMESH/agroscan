<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class homeController extends Controller
{
    public function getHome(){
        $homes = DB::table('scan_input')
        ->join('diseases','diseases.id', '=', 'scan_input.diseases_id')
        ->select('scan_input.id','diseases.diseases_name','diseases.solution','scan_input.location1','scan_input.location2','scan_input.time')
        ->get();

        return view('home', ["homes"=> $homes]);

    }
}
