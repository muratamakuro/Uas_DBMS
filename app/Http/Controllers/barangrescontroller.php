<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $barangres= \DB::table('t_barang_res')->get();
        $data = array('barangres' => $barangres);
        return view ('barangres/index', $data);
    }
}
