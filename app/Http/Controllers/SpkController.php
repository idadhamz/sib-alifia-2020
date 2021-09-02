<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

use App\Models\data_diri_pemohon;
use App\Models\berkas_pemohon;

class SpkController extends Controller
{
    // Data Pemohon
    public function view_data_pemohon($id)
    {

        // get data
        // $data_diri_pemohon_view = data_diri_pemohon::where('id_pemohon', $id)->get();
        $data_diri_pemohon_view = berkas_pemohon::leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
            ->select('pemohon.*')
            ->where('pemohon.id_pemohon', $id)
            ->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('spk.dataDiriPemohon.view', compact('data_diri_pemohon_view'));
 
    }

    public function index_data_pemohon()
    {

        // get data
        $data_diri_pemohon = berkas_pemohon::leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
            ->select('pemohon.*')
            ->get();
 
    	// mengirim data jabatan ke view index
    	// return view('spk.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('spk.dataDiriPemohon.index', compact('data_diri_pemohon'));
 
    }
}
