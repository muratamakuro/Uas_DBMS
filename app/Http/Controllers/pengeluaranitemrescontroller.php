<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranitemres= \DB::table('t_pengeluaranitem_res')->get();
        $data = array('pengeluaranitemres' => $pengeluaranitemres);
        return view ('pengeluaranitemres/index', $data);
    }
}
