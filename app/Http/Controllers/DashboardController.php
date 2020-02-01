<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\akun;
use App\Models\gol_akun;
use App\Models\transaksi;
use App\User;

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

        return view('dashboard.index');
 
    }
}
