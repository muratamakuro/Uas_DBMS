<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $petugasres= \DB::table('t_pentugas_res')->get();
        $data = array('petugasres' => $petugasres);
        return view ('petugasres/index', $data);
    }
}
