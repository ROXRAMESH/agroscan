<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class filtertableController extends Controller
{
    // public function fliter(){
    //     $table1s = DB::table('scan_input')
    //             ->where('id', 1)
    //             ->get();
    //     // ->where('id = :id', ['id' => 1])
    //     // ->get();

    //     // $tables = DB::select('select * from scan_input where id = 1');

    //     return view('table1', ["table1s"=> $table1s]);

    // }

    public function fil(){

        $tree_count = array();

                $tablers = DB::table('scan_input')
                ->select('time')
                ->distinct('time')
                ->get();

                foreach($tablers as $dt){

                    $count = DB::table('scan_input')
                             ->where("time", $dt->time)
                             ->count();

                    array_push($tree_count, $count);
                }
        
                //return $tree_count;



                return view('table1', ["tablers"=> $tablers,"tree_counts"=>$tree_count]);

    }

    // public function fil2(){

    //     $tabls = DB::table('scan_input')
    //     ->select('id')
    //     ->count('id')
    //     ->get();

    //     return view('table1', ["tabls"=> $tabls]);

    // }
}
