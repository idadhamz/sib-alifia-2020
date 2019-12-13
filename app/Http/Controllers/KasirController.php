<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    // Data Transaksi
    public function index_transaksi_kasir()
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get()


 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataTransaksi.index');
 
    }
}
