<?php

namespace App\Http\Controllers;

use App\donatur;
use App\kebutuhan;
use App\penyedia;
use App\pebanding;
use Illuminate\Http\Request;
use App\Imports\KebutuhanImport;
use App\Imports\DonaturImport;
use App\Imports\PebandingImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

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

    public function createPasien(Request $request)
    {    
        \App\pasien::create($request->all());
        return redirect('/pasien-admin')->with('sukses','Data berhasil diinput');
    }

    public function editPasien($id)
    {
        $data_pasien = \App\pasien::find($id);
        return view('admin/editpasien',['data_pasien' => $data_pasien]);
    }

    public function updatePasien(Request $request,$id)
    {
        $data_pasien = \App\pasien::find($id);
        $data_pasien->update($request->all());
        return redirect('/pasien-admin')->with('sukses');
    }

    public function kebutuhan(Request $request)
    {
        $data_kebutuhan = \App\kebutuhan::all();
        return view('admin.kebutuhan',['data_kebutuhan' => $data_kebutuhan]);
    }

    public function create1(Request $request)
    {    
        \App\kebutuhan::create($request->all());
        return redirect('/kebutuhan-admin')->with('sukses','Data berhasil diinput');
    }

    public function pebanding(Request $request)
    {
        $data_pebanding = \App\pebanding::all();
        return view('admin.pebanding',['data_pebanding' => $data_pebanding]);
    }

    public function createPebanding(Request $request)
    {    
        \App\pebanding::create($request->all());
        return redirect('/pebanding-admin')->with('sukses','Data berhasil diinput');
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
        return redirect('/donatur-admin')->with('sukses','Data berhasil diinput');
    }

    public function penyedia(Request $request)
    {
        $data_penyedia = \App\penyedia::all();
        return view('admin.penyedia',['data_penyedia' => $data_penyedia]);
    }

    public function create3(Request $request)
    {    
        \App\penyedia::create($request->all());
        return redirect('/penyedia-admin')->with('sukses','Data berhasil diinput');
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
        return redirect('/donasinya-admin')->with('sukses','Data berhasil diinput');
    }

    // public function create_d(Request $request)
    // {
    //     \App\donasinya::create($request->all());
    //     return redirect('/donasinya-admin');
    // }

//EDIT DAN DELETE
    public function delete1($id)
    {
        $data_kebutuhan = kebutuhan::FindOrFail($id);
        $data_kebutuhan->delete();
        return redirect('/kebutuhan-admin');
    }
    public function delete2($id)
    {
        $data_donatur = donatur::FindOrFail($id);
        $data_donatur->delete();
        return redirect('/donatur-admin');
    }
    public function delete3($id)
    {
        $data_penyedia = penyedia::FindOrFail($id);
        $data_penyedia->delete();
        return redirect('/penyedia-admin');
    }
    public function delete4($id)
    {
        $data_pebanding = pebanding::FindOrFail($id);
        $data_pebanding->delete();
        return redirect('/pebanding-admin');
    }

    public function edit2($id)
    {
    $data_donatur = donatur::FindOrFail($id);
    return view('admin.donatur',['data_donatur' => $data_donatur]);
    }

    public function update2($id, Request $request)
    {
        $data_donatur = donatur::FindOrFail($id);
        $data_donatur->rs_id = $request->rs_id;
        $data_donatur->nama_donatur = $request->nama_donatur;
        $data_donatur->tunai = $request->tunai;
        $data_donatur->masker_n95 = $request->masker_n95;
        $data_donatur->masker_surgical = $request->masker_surgical;
        $data_donatur->sarung_tangan = $request->sarung_tangan;
        $data_donatur->coverall_jumpsuit = $request->coverall_jumpsuit;
        $data_donatur->faceshield = $request->faceshield;
        $data_donatur->kacamata_goggles = $request->kacamata_goggles;
        $data_donatur->boot_and_shoe_cover = $request->boot_and_shoe_cover;
        $data_donatur->handsanitizer = $request->handsanitizer;
        $data_donatur->desinfektan = $request->desinfektan;
        $data_donatur->multivitamin = $request->multivitamin;
        $data_donatur->kantong_jenazah = $request->kantong_jenazah;
        $data_donatur->Skorlet= $request->Skorlet;
        $data_donatur->updated_at= $request->updated_at;
        $data_donatur->save();
        return redirect('/donatur-admin');
    }

    public function import_excel_kebutuhan(Request $request) 
	{
			// validasi
            $this->validate($request, [
                'file' => 'required|mimes:csv,xls,xlsx'
            ]);
     
            // menangkap file excel
            $file = $request->file('file');
     
            // membuat nama file unik
            $nama_file = rand().$file->getClientOriginalName();
     
            // upload ke folder file_siswa di dalam folder public
            $file->move('file_kebutuhan',$nama_file);
     
            // import data
            Excel::import(new KebutuhanImport, public_path('/file_kebutuhan/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data kebutuhan Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/kebutuhan-admin');
    }
    
    public function import_excel_donatur(Request $request) 
	{
			// validasi
            $this->validate($request, [
                'file' => 'required|mimes:csv,xls,xlsx'
            ]);
     
            // menangkap file excel
            $file = $request->file('file');
     
            // membuat nama file unik
            $nama_file = rand().$file->getClientOriginalName();
     
            // upload ke folder file_siswa di dalam folder public
            $file->move('file_donatur',$nama_file);
     
            // import data
            Excel::import(new DonaturImport, public_path('/file_donatur/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data donatur Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/donatur-admin');
    }
    
    public function import_excel_pebanding(Request $request) 
	{
			// validasi
            $this->validate($request, [
                'file' => 'required|mimes:csv,xls,xlsx'
            ]);
     
            // menangkap file excel
            $file = $request->file('file');
     
            // membuat nama file unik
            $nama_file = rand().$file->getClientOriginalName();
     
            // upload ke folder file_siswa di dalam folder public
            $file->move('file_pebanding',$nama_file);
     
            // import data
            Excel::import(new PebandingImport, public_path('/file_pebanding/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data donatur Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/pebanding-admin');
    }
}
