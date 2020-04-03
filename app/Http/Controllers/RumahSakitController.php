<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index(Request $request)
    {
        $data_rs_1 = \App\rs_1::all();
        return view('admin.index',['data_rs_1' => $data_rs_1]);
    }

    public function daerah(Request $request)
    {
        $data_daerah = \App\daerah::all();
        return view('admin.daerah',['data_daerah' => $data_daerah]);
    }

    public function pasien(Request $request)
    {
        $data_pasien = \App\pasien::all();
        return view('admin.pasien',['data_pasien' => $data_pasien]);
    }

    public function kebutuhan(Request $request)
    {
        $data_kebutuhan = \App\kebutuhan::all();
        return view('admin.kebutuhan',['data_kebutuhan' => $data_kebutuhan]);
    }

    public function create1(Request $request)
    {    
        \App\kebutuhan::create($request->all());
        return redirect('/kebutuhan-admin');
    }

    public function donatur(Request $request)
    {
        $data_donatur = \App\donatur::all();
        return view('admin.donatur',['data_donatur' => $data_donatur]);
    }

    // public function donatur(Request $request)
    // {
    //     $data_donatur = \App\donatur::all();
    //     $roles = rs::lists('nama_rs', 'id');
    //     return view('admin.donatur',['data_donatur' => $data_donatur],compact('roles', 'selectedRole'));
    // }

    public function create2(Request $request)
    {    
        \App\donatur::create($request->all());
        return redirect('/donatur-admin');
    }

    public function penyedia(Request $request)
    {
        $data_penyedia = \App\penyedia::all();
        return view('admin.penyedia',['data_penyedia' => $data_penyedia]);
    }

    public function create3(Request $request)
    {    
        \App\penyedia::create($request->all());
        return redirect('/penyedia-admin');
    }

    public function donasinya(Request $request)
    {
        $data_donasinya = \App\donasinya::all();
        return view('admin.donasinya',['data_donasinya' => $data_donasinya]);
    }

    public function create_d(Request $request)
    {
        $donasinya = \App\donasinya::create($request->all());
        if($request->hasFile('file_bukti')){
            $request->file('file_bukti')->move('images/',$request->file('file_bukti')->getClientOriginalName());
            $donasinya->file_bukti = $request->file('file_bukti')->getClientOriginalName();
            $donasinya->save();
        }
        return redirect('/donasinya-admin');
    }

    // public function create_d(Request $request)
    // {
    //     \App\donasinya::create($request->all());
    //     return redirect('/donasinya-admin');
    // }
}
