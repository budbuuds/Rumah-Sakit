<?php

namespace App\Http\Controllers;

use App\donatur;
use App\kebutuhan;
use App\penyedia;
use App\pebanding;
use App\pasien_odp;
use App\pasien_pdp;
use App\pasien_positif;
use App\pasien_meninggal;
use App\pasien_sembuh;
use Illuminate\Http\Request;
use App\Imports\KebutuhanImport;
use App\Imports\DonaturImport;
use App\Imports\PebandingImport;
use App\Imports\PasienOdpImport;
use App\Imports\PasienPdpImport;
use App\Imports\PasienPositifImport;
use App\Imports\PasienMeninggalImport;
use App\Imports\PasienSembuhImport;
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

    public function pasienOdp(Request $request)
    {
        $data_pasien = \App\pasien_odp::all();
        return view('admin.pasienOdp',['data_pasien' => $data_pasien]);
    }

    public function createPasienOdp(Request $request)
    {    
        \App\pasien_odp::create($request->all());
        return redirect('/pasien-odp')->with('sukses','Data berhasil diinput');
    }

    public function editPasienOdp($id)
    {
        $data_pasien = \App\pasien_odp  ::find($id);
        return view('admin/editpasienOdp',['data_pasien' => $data_pasien]);
    }

    public function updatePasienOdp(Request $request,$id)
    {
        $data_pasien = \App\pasien_odp::find($id);
        $data_pasien->update($request->all());
        return redirect('/pasien-odp')->with('sukses');
    }

    public function deleteOdp($id)
    {
        $data_pasien = pasien_odp::FindOrFail($id);
        $data_pasien->delete();
        return redirect('/pasien-odp');
    }

    public function pasienPdp(Request $request)
    {
        $data_pasien = \App\pasien_pdp::all();
        return view('admin.pasienPdp',['data_pasien' => $data_pasien]);
    }

    public function createPasienPdp(Request $request)
    {    
        \App\pasien_pdp::create($request->all());
        return redirect('/pasien-pdp')->with('sukses','Data berhasil diinput');
    }

    public function editPasienPdp($id)
    {
        $data_pasien = \App\pasien_pdp  ::find($id);
        return view('admin/editpasienPdp',['data_pasien' => $data_pasien]);
    }

    public function updatePasienPdp(Request $request,$id)
    {
        $data_pasien = \App\pasien_pdp::find($id);
        $data_pasien->update($request->all());
        return redirect('/pasien-pdp')->with('sukses');
    }

    public function deletePdp($id)
    {
        $data_pasien = pasien_pdp::FindOrFail($id);
        $data_pasien->delete();
        return redirect('/pasien-pdp');
    }

    public function pasienPositif(Request $request)
    {
        $data_pasien = \App\pasien_positif::all();
        return view('admin.pasienPositif',['data_pasien' => $data_pasien]);
    }

    public function createPasienPositif(Request $request)
    {    
        \App\pasien_positif::create($request->all());
        return redirect('/pasien-positif')->with('sukses','Data berhasil diinput');
    }

    public function editPasienPositif($id)
    {
        $data_pasien = \App\pasien_positif  ::find($id);
        return view('admin/editpasienPositif',['data_pasien' => $data_pasien]);
    }

    public function updatePasienPositif(Request $request,$id)
    {
        $data_pasien = \App\pasien_positif::find($id);
        $data_pasien->update($request->all());
        return redirect('/pasien-positif')->with('sukses');
    }

    public function deletepositif($id)
    {
        $data_pasien = pasien_positif::FindOrFail($id);
        $data_pasien->delete();
        return redirect('/pasien-positif');
    }

    public function pasienMeninggal(Request $request)
    {
        $data_pasien = \App\pasien_meninggal::all();
        return view('admin.pasienMeninggal',['data_pasien' => $data_pasien]);
    }

    public function createPasienMeninggal(Request $request)
    {    
        \App\pasien_meninggal::create($request->all());
        return redirect('/pasien-meninggal')->with('sukses','Data berhasil diinput');
    }

    public function editPasienMeninggal($id)
    {
        $data_pasien = \App\pasien_meninggal  ::find($id);
        return view('admin/editpasienMeninggal',['data_pasien' => $data_pasien]);
    }

    public function updatePasienMeninggal(Request $request,$id)
    {
        $data_pasien = \App\pasien_meninggal::find($id);
        $data_pasien->update($request->all());
        return redirect('/pasien-meninggal')->with('sukses');
    }

    public function deleteMeninggal($id)
    {
        $data_pasien = pasien_meninggal::FindOrFail($id);
        $data_pasien->delete();
        return redirect('/pasien-meninggal');
    }

    public function pasienSembuh(Request $request)
    {
        $data_pasien = \App\pasien_sembuh::all();
        return view('admin.pasienSembuh',['data_pasien' => $data_pasien]);
    }

    public function createPasienSembuh(Request $request)
    {    
        \App\pasien_sembuh::create($request->all());
        return redirect('/pasien-sembuh')->with('sukses','Data berhasil diinput');
    }

    public function editPasienSembuh($id)
    {
        $data_pasien = \App\pasien_sembuh  ::find($id);
        return view('admin/editpasienSembuh',['data_pasien' => $data_pasien]);
    }

    public function updatePasienSembuh(Request $request,$id)
    {
        $data_pasien = \App\pasien_sembuh::find($id);
        $data_pasien->update($request->all());
        return redirect('/pasien-sembuh')->with('sukses');
    }

    public function deleteSembuh($id)
    {
        $data_pasien = pasien_sembuh::FindOrFail($id);
        $data_pasien->delete();
        return redirect('/pasien-sembuh');
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

    public function import_excel_pasien_odp(Request $request) 
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
            $file->move('file_pasien_odp',$nama_file);
     
            // import data
            Excel::import(new PasienOdpImport, public_path('/file_pasien_odp/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data donatur Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/pasien-odp');
    }

    public function import_excel_pasien_pdp(Request $request) 
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
            $file->move('file_pasien_pdp',$nama_file);
     
            // import data
            Excel::import(new PasienPdpImport, public_path('/file_pasien_pdp/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data donatur Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/pasien-pdp');
    }

    public function import_excel_pasien_positif(Request $request) 
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
            $file->move('file_pasien_positif',$nama_file);
     
            // import data
            Excel::import(new PasienPositifImport, public_path('/file_pasien_positif/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data donatur Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/pasien-positif');
    }

    public function import_excel_pasien_meninggal(Request $request) 
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
            $file->move('file_pasien_meninggal',$nama_file);
     
            // import data
            Excel::import(new PasienMeninggalImport, public_path('/file_pasien_meninggal/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data donatur Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/pasien-meninggal');
    }

    public function import_excel_pasien_sembuh(Request $request) 
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
            $file->move('file_pasien_sembuh',$nama_file);
     
            // import data
            Excel::import(new PasienSembuhImport, public_path('/file_pasien_sembuh/'.$nama_file));
     
            // notifikasi dengan session
            // Session::flash('sukses','Data donatur Berhasil Diimport!');
     
            // alihkan halaman kembali
            return redirect('/pasien-sembuh');
    }

}
