<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Models\data_diri_pemohon;
use App\Models\validasi_verifikasi;
use App\Models\verifikasi_data;

use App\Models\tracking_verifikasi;

use Auth;

class dashboardController extends Controller
{
 
    public function index()
    {

    	// Jumlah
        $jmlPemohon = data_diri_pemohon::count();
        $jmlPemohonanBerhasil = validasi_verifikasi::where('status', 2)->count();
    	$jmlUser = User::count();

        $kd_user = Auth::user()->kd_user;

        $data_tracking = tracking_verifikasi::leftJoin('berkas_pemohon', 'tracking_verifikasi.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->select('tracking_verifikasi.*', 'pemohon.kd_user')
        ->where('pemohon.kd_user', $kd_user)
        ->orderBy('tracking_verifikasi.created_at', 'DESC')
        ->limit(3)
        ->get();

        $riwayat_pelayanan = tracking_verifikasi::leftJoin('berkas_pemohon', 'tracking_verifikasi.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->select('tracking_verifikasi.*', 'pemohon.*')
        ->orderBy('tracking_verifikasi.created_at', 'DESC')
        ->limit(5)
        ->get();

        $data_pelayanan = verifikasi_data::leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->leftJoin('users', 'verifikasi_data.id_user', '=', 'users.id')
        ->select('users.name', 'pemohon.*', 'verifikasi_data.id_status')
        ->orderBy('verifikasi_data.created_at', 'DESC')
        ->get();

        // dd($data_tracking);

        return view('dashboard.index', compact('data_tracking', 'jmlPemohon', 'jmlPemohonanBerhasil', 'jmlUser', 'riwayat_pelayanan', 'data_pelayanan'));
 
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
