<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class mapController extends Controller
{
    // public function mapData(){
    //     $maps = DB::table('scan_input')
    //     ->select('id','image')
    //     ->get();

    //     return view('map1', ["maps"=> $maps]);
    // }


    public function mapData(){
        $maps = DB::table('scan_input')
        ->join('diseases','diseases.id', '=', 'scan_input.diseases_id')
        ->select('scan_input.id','diseases.diseases_name','scan_input.location1','scan_input.location2','scan_input.time')
        ->get();

        return view('map1', ["maps"=> $maps]);
    }
}
