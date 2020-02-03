<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\tracking_verifikasi;

use Auth;

class dashboardController extends Controller
{
 
    public function index()
    {

    	// Jumlah
    	// $jmlUser = User::count();
    	// $jmlTransaksi = transaksi::count();
    	// $jmlAkun = akun::count();
    	// $jml_GolAkun = gol_akun::count();

    	// $DataAkun = akun::orderBy("created_at", "asc")->get();
    	// $DataTransaksi = transaksi::orderBy("tgl_transaksi", "desc")->take(3)->get();

        // return view('dashboard.index', compact('DataAkun', 'DataTransaksi', 'jmlUser', 'jmlTransaksi', 'jmlAkun', 'jml_GolAkun'));

        $kd_user = Auth::user()->kd_user;

        $data_tracking = tracking_verifikasi::leftJoin('berkas_pemohon', 'tracking_verifikasi.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->select('tracking_verifikasi.*', 'pemohon.kd_user')
        ->where('pemohon.kd_user', $kd_user)
        ->orderBy('tracking_verifikasi.created_at', 'DESC')
        ->limit(3)
        ->get();

        // dd($data_tracking);

        return view('dashboard.index', compact('data_tracking'));
 
    }

    // public function tracking_verifikasi()
    // {
        
    //     $kd_user = Auth::user()->kd_user;

    //     $data_tracking = tracking_verifikasi::leftJoin('berkas_pemohon', 'tracking_verifikasi.id_berkas', '=', 'berkas_pemohon.id_berkas')
    //     ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
    //     ->select('tracking_verifikasi.*', 'pemohon.kd_user')
    //     ->where('pemohon.kd_user', $kd_user)
    //     ->get();

    //     return view('layouts.includes._navbar', compact('data_tracking'));
 
    // }
}
