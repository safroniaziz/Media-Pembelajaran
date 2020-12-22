<?php

namespace App\Http\Controllers;

use App\DaftarLatihan;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index(){
        $datas = DaftarLatihan::all();
        return view('materi/latihan',compact('datas'));
    }

    public function post(Request $request){
        $nilai = $request->satu + $request->dua+ $request->tiga+ $request->empat+ $request->lima+ $request->enam+ $request->tujuh+ $request->delapan+ $request->sembilan+ $request->sepuluh;
        if ($nilai == 10) {
            $jumlah_benar = 1;
        } elseif ($nilai == 20) {
            $jumlah_benar = 2;
        } elseif ($nilai == 30) {
            $jumlah_benar = 3;
        } elseif ($nilai == 40) {
            $jumlah_benar = 4;
        } elseif ($nilai == 50) {
            $jumlah_benar = 5;
        } elseif ($nilai == 60) {
            $jumlah_benar = 6;
        } elseif ($nilai == 70) {
            $jumlah_benar = 7;
        } elseif ($nilai == 80) {
            $jumlah_benar = 8;
        } elseif ($nilai == 90) {
            $jumlah_benar = 9;
        }else {
            $jumlah_benar = 10;
        }

        if ($nilai >= 70) {
            $status = "1";
            $status2 = "LULUS";
        }else {
            $status = "0";
            $status2 = "BELUM LULUS";
        }
        DaftarLatihan::create([
            'nama'  =>  $request->nama,
            'kelas'  =>  $request->kelas,
            'jumlah_benar'  =>  $jumlah_benar,
            'nilai'  =>  $nilai,
            'status'  =>  $status,
        ]);
        
        return redirect()->back()->with(['success'  =>  'Anda Mendapatkan Nilai "'.$nilai.'" dan dinyatakan "'.$status2.'"']);
    }
}
