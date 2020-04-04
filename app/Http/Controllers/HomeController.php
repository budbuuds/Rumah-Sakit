<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function index()
    {
        $data_rs = \App\rs::all();
        return view('welcome',['data_rs' => $data_rs]);
    }
    public function landingpage()
    {
        $data_rs = \App\rs::all();  
        return view('index');
    }

    public function rumahsakit()
    {
        $data_rs = \App\rs::all();
        return view('welcome',['data_rs' => $data_rs]);
    }

    public function kebutuhan()
    {
        $data_kebutuhan = \App\kebutuhan::all();
        return view('kebutuhan',['data_kebutuhan' => $data_kebutuhan]);
    }

    public function donatur()
    {
        $data_donatur = \App\donatur::all();
        return view('donatur',['data_donatur' => $data_donatur]);
    }

    public function penyedia()
    {
        $data_penyedia = \App\penyedia::all();
        return view('penyedia',['data_penyedia' => $data_penyedia]);
    }

    public function donasinya()
    {
        $data_donasinya = \App\donasinya::all();
        return view('donasinya',['data_donasinya' => $data_donasinya]);
    }
}
