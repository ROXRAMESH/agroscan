<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class solutionController extends Controller
{
    public function solutionC(){
        $tablers = DB::table('scan_input')
                ->select('id')
                ->get();
    }
}
