<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagianrescontroller extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranres= \DB::table('t_pengeluaran_res')->get();
        $data = array('pengeluaranres' => $pengeluaranres);
        return view ('pengeluaranres/index', $data);
    }
}
