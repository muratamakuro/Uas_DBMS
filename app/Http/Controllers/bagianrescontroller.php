<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $bagianres= \DB::table('t_bagian_res')->get();
        $data = array('bagianres' => $bagianres);
        return view ('bagianres/index', $data);
    }
}
