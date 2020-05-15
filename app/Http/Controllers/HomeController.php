<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pebanding;
use App\pasien_odp;
use App\pasien_pdp;
use App\pasien_positif;
use App\pasien_meninggal;
use App\pasien_sembuh;

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
        // $data_rs_1 = \App\rs_1::all();
        // return view('welcome',['data_rs_1' => $data_rs_1]);

        $odp = \App\pasien::find(1);
        $pdp = \App\pasien::find(2);
        $positif = \App\pasien::find(3);
        $meninggal = \App\pasien::find(4);
        $sembuh = \App\pasien::find(5);

        // $pasien_odp = \App\donatur::all()->sum('tunai');
        // $pasien_pdp = \App\pasien_pdp::all();
        // $pasien_positif = \App\pasien_positif::all();
        // $pasien_sembuh = \App\pasien_sembuh::all();
        // $pasien_meninggal = \App\pasien_meninggal::all();



        return view('newindex',[
            'odp' => $odp,
            'pdp' => $pdp,
            'positif' => $positif,
            'meninggal' => $meninggal,
            'sembuh' => $sembuh,

            // 'pasien_odp' => $pasien_odp,
            // 'pasien_pdp' => $pasien_pdp,
            // 'pasien_positif' => $pasien_positif,
            // 'pasien_sembuh' => $pasien_sembuh,
            // 'pasien_meninggal' => $pasien_meninggal
            
            ]);
    }

    public function daerah1(Request $request)
    {
        $data_daerah = \App\daerah::find(1);
        return view('agam',['data_daerah' => $data_daerah]);
    }

    public function daerah2(Request $request)
    {
        $data_daerah = \App\daerah::find(2);
        return view('Dharmasraya',['data_daerah' => $data_daerah]);
    }
 
    public function daerah3(Request $request)
    {
        $data_daerah = \App\daerah::find(3);
        return view('KepulauanMentawai',['data_daerah' => $data_daerah]);
    }

    public function daerah4(Request $request)
    {
        $data_daerah = \App\daerah::find(4);
        return view('Bukittinggi',['data_daerah' => $data_daerah]);
    }

    public function daerah5(Request $request)
    {
        $data_daerah = \App\daerah::find(5);
        return view('Padang',['data_daerah' => $data_daerah]);
    }

    public function daerah6(Request $request)
    {
        $data_daerah = \App\daerah::find(6);
        return view('PadangPanjang',['data_daerah' => $data_daerah]);
    }

    public function daerah7(Request $request)
    {
        $data_daerah = \App\daerah::find(7);
        return view('Pariaman',['data_daerah' => $data_daerah]);
    }

    public function daerah8(Request $request)
    {
        $data_daerah = \App\daerah::find(8);
        return view('Payakumbuh',['data_daerah' => $data_daerah]);
    }

    public function daerah9(Request $request)
    {
        $data_daerah = \App\daerah::find(9);
        return view('SawahLunto',['data_daerah' => $data_daerah]);
    }

    public function daerah10(Request $request)
    {
        $data_daerah = \App\daerah::find(10);
        return view('KotaSolok',['data_daerah' => $data_daerah]);
    }

    public function daerah11(Request $request)
    {
        $data_daerah = \App\daerah::find(11);
        return view('50Kota',['data_daerah' => $data_daerah]);
    }

    public function daerah12(Request $request)
    {
        $data_daerah = \App\daerah::find(12);
        return view('PadangPariaman',['data_daerah' => $data_daerah]);
    }

    public function daerah13(Request $request)
    {
        $data_daerah = \App\daerah::find(13);
        return view('Pasaman',['data_daerah' => $data_daerah]);
    }

    public function daerah14(Request $request)
    {
        $data_daerah = \App\daerah::find(14);
        return view('PasamanBarat',['data_daerah' => $data_daerah]);
    }

    public function daerah15(Request $request)
    {
        $data_daerah = \App\daerah::find(15);
        return view('PesisirSelatan',['data_daerah' => $data_daerah]);
    }

    public function daerah16(Request $request)
    {
        $data_daerah = \App\daerah::find(16);
        return view('Sijunjung',['data_daerah' => $data_daerah]);
    }

    public function daerah17(Request $request)
    {
        $data_daerah = \App\daerah::find(17);
        return view('Solok',['data_daerah' => $data_daerah]);
    }

    public function daerah18(Request $request)
    {
        $data_daerah = \App\daerah::find(18);
        return view('SolokSelatan',['data_daerah' => $data_daerah]);
    }

    public function daerah19(Request $request)
    {
        $data_daerah = \App\daerah::find(19);
        return view('TanahDatar',['data_daerah' => $data_daerah]);
    }

    public function pasien(Request $request)
    {
        $data_pasien = \App\pasien::all();
        return view('popup3',['data_pasien' => $data_pasien]);
    }

    public function pasien_covid19(Request $request)
    {
        $data_pasien_positif = \App\pasien_positif::all();
        $data_pasien_odp = \App\pasien_odp::all();
        $data_pasien_pdp = \App\pasien_pdp::all();
        $data_pasien_meninggal = \App\pasien_meninggal::all();
        $data_pasien_sembuh = \App\pasien_sembuh::all();

        return view('line',
        [
            'data_pasien_positif' => $data_pasien_positif,
            'data_pasien_odp' => $data_pasien_odp,
            'data_pasien_pdp' => $data_pasien_pdp,
            'data_pasien_meninggal' => $data_pasien_meninggal,
            'data_pasien_sembuh' => $data_pasien_sembuh
        ]);
    }

    public function landingpage()
    {
        $data_rs = \App\rs::all();
        return view('index');
    }

    public function rumahsakit()
    {
        $data_rs_1 = \App\rs_1::all();
        return view('popup1',['data_rs_1' => $data_rs_1]);
    }
    public function penyaluran()
    {
        $data_rs_2 = \App\rs_2::all();
        return view('popup9',['data_rs_2' => $data_rs_2]);
    }

    // public function kebutuhan()
    // {
    //     $data_kebutuhan = \App\kebutuhan::all();
    //     return view('kebutuhan',['data_kebutuhan' => $data_kebutuhan]);
    // }

    public function kebutuhan()
    {
        $count1 = \App\kebutuhan::all()->sum('masker_n95');
        $count2 = \App\kebutuhan::all()->sum('masker_surgical');
        $count3 = \App\kebutuhan::all()->sum('sarung_tangan');
        $count4 = \App\kebutuhan::all()->sum('coverall_jumpsuit');
        $count5 = \App\kebutuhan::all()->sum('faceshield');
        $count6 = \App\kebutuhan::all()->sum('kacamata_goggles');
        $count7 = \App\kebutuhan::all()->sum('boot_and_shoe_cover');
        $count8 = \App\kebutuhan::all()->sum('handsanitizer');
        $count9 = \App\kebutuhan::all()->sum('desinfektan');
        $count10 = \App\kebutuhan::all()->sum('multivitamin');

        $countd1 = \App\donatur::all()->sum('masker_n95');
        $countd2 = \App\donatur::all()->sum('masker_surgical');
        $countd3 = \App\donatur::all()->sum('sarung_tangan');
        $countd4 = \App\donatur::all()->sum('coverall_jumpsuit');
        $countd5 = \App\donatur::all()->sum('faceshield');
        $countd6 = \App\donatur::all()->sum('kacamata_goggles');
        $countd7 = \App\donatur::all()->sum('boot_and_shoe_cover');
        $countd8 = \App\donatur::all()->sum('handsanitizer');
        $countd9 = \App\donatur::all()->sum('desinfektan');
        $countd10 = \App\donatur::all()->sum('multivitamin');

        $data_daerah = \App\daerah::find(1);
        $data_daerah2 = \App\daerah::find(2);
        $data_daerah3 = \App\daerah::find(3);
        $data_daerah4 = \App\daerah::find(4);
        $data_daerah5 = \App\daerah::find(5);
        $data_daerah6 = \App\daerah::find(6);
        $data_daerah7 = \App\daerah::find(7);
        $data_daerah8 = \App\daerah::find(8);
        $data_daerah9 = \App\daerah::find(9);
        $data_daerah10 = \App\daerah::find(10);
        $data_daerah11 = \App\daerah::find(11);
        $data_daerah12 = \App\daerah::find(12);
        $data_daerah13 = \App\daerah::find(13);
        $data_daerah14 = \App\daerah::find(14);
        $data_daerah15 = \App\daerah::find(15);
        $data_daerah16 = \App\daerah::find(16);
        $data_daerah17 = \App\daerah::find(17);
        $data_daerah18 = \App\daerah::find(18);
        $data_daerah19 = \App\daerah::find(19);

        $data_rs_2 = \App\rs_2::all();



        $countd1 = \App\donatur::all()->sum('masker_n95');
        $countd2 = \App\donatur::all()->sum('masker_surgical');
        $countd3 = \App\donatur::all()->sum('sarung_tangan');
        $countd4 = \App\donatur::all()->sum('coverall_jumpsuit');
        $countd5 = \App\donatur::all()->sum('faceshield');
        $countd6 = \App\donatur::all()->sum('kacamata_goggles');
        $countd7 = \App\donatur::all()->sum('boot_and_shoe_cover');
        $countd8 = \App\donatur::all()->sum('handsanitizer');
        $countd9 = \App\donatur::all()->sum('desinfektan');
        $countd10 = \App\donatur::all()->sum('multivitamin');
        $countd11 = \App\donatur::all()->sum('kantong_jenazah');
        $countd12 = \App\donatur::all()->sum('Skorlet');

        return view('popup2',
            [
                'count1' => $count1,
                'count2' => $count2,
                'count3' => $count3,
                'count4' => $count4,
                'count5' => $count5,
                'count6' => $count6,
                'count7' => $count7,
                'count8' => $count8,
                'count9' => $count9,
                'count10' => $count10,

                'countd1' => $countd1,
                'countd2' => $countd2,
                'countd3' => $countd3,
                'countd4' => $countd4,
                'countd5' => $countd5,
                'countd6' => $countd6,
                'countd7' => $countd7,
                'countd8' => $countd8,
                'countd9' => $countd9,
                'countd10' => $countd10,

                'data_daerah' => $data_daerah,
                'data_daerah2' => $data_daerah2,
                'data_daerah3' => $data_daerah3,
                'data_daerah4' => $data_daerah4,
                'data_daerah5' => $data_daerah5,
                'data_daerah6' => $data_daerah6,
                'data_daerah7' => $data_daerah7,
                'data_daerah8' => $data_daerah8,
                'data_daerah9' => $data_daerah9,
                'data_daerah10' => $data_daerah10,
                'data_daerah11' => $data_daerah11,
                'data_daerah12' => $data_daerah12,
                'data_daerah13' => $data_daerah13,
                'data_daerah14' => $data_daerah14,
                'data_daerah15' => $data_daerah15,
                'data_daerah16' => $data_daerah16,
                'data_daerah17' => $data_daerah17,
                'data_daerah18' => $data_daerah18,
                'data_daerah19' => $data_daerah19,

                'data_rs_2' => $data_rs_2

            ]);
        // return view('popup3',compact('count1','count2','count3','count4','count5','count6','count7','count8','count9','count10','count11','count12'));
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

//TESTING
    public function popup1()
    {
        $data_rs = \App\rs::all();  
        return view('popup1');
    }
    public function popup2()
    {
        $data_rs_1 = \App\rs_1::all();
        $jumlah = [];
        foreach($data_rs_1 as $data){
            //$jumlah[] = $data_rs_1->kebutuhan()->;
        }

        return view('popup2',['data_rs_1' => $data_rs_1]);
    }
    public function popup3()
    {
        $data_rs = \App\rs_1::all();  
        return view('popup3');
    }
    public function popup4()
    {
        $data_pasien = \App\pasien::all();  
        return view('popup4');
    }
    public function about()
    { 
        return view('popupabout');
    }

    // public function line()
    // {
    //     $data_pasien = \App\pasien::all();  
    //     return view('line');
    // }

    //berita
    public function apd()
    {
        return view('bka');
    }

    public function berdars()
    {
        return view('berdars');
    }

    public function berdapukes()
    {
        return view('berdapukes');
    }
    
    public function bercat()
    {
        return view('bercat');
    }
}
