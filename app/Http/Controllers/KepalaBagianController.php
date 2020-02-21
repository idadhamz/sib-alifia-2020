<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

use App\Models\verifikasi_data;
use App\Models\validasi_verifikasi;
use App\Models\tracking_verifikasi;

use Auth;
use File;
use PDF;


class KepalaBagianController extends Controller
{
    public function index_surat_izin_belajar()
    {

        $data_permohonan_surat = verifikasi_data::leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->leftJoin('users', 'verifikasi_data.id_user', '=', 'users.id')
        ->select('verifikasi_data.*', 'pemohon.*', 'users.name')
        ->where('verifikasi_data.id_status', 1)
        ->get();
 
        return view('kepala_bagian.suratIzinBelajar.index', compact('data_permohonan_surat'));
 
    }

    public function print_surat_izin_belajar($id)
    {
        
        $name = Auth::user()->name;

        $data_permohonan_surat_print = verifikasi_data::leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->leftJoin('users', 'verifikasi_data.id_user', '=', 'users.id')
        ->leftJoin('petugas', 'users.id', '=', 'petugas.id_user')
        ->select('verifikasi_data.*', 'pemohon.*', 'users.name', 'petugas.nip', 'petugas.jabatan')
        ->where('verifikasi_data.id', $id)
        ->get();

        // return view('kepala_bagian.suratIzinBelajar.print', compact('data_permohonan_surat_print'));
        $customPaper = array(0,0,612.00,1008.00);
        $pdf = PDF::loadview('kepala_bagian.suratIzinBelajar.print', compact('data_permohonan_surat_print'))->setPaper($customPaper);
        return $pdf->download('Surat Izin Belajar oleh ' . $name . '.pdf');
 
    }

    public function create_surat_izin_belajar($id)
    {
 		
    	$name = Auth::user()->name;

 		$data_permohonan_surat_create = verifikasi_data::leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->select('verifikasi_data.*', 'pemohon.*')
        ->where('verifikasi_data.id', $id)
        ->get();
        return view('kepala_bagian.suratIzinBelajar.form', compact('data_permohonan_surat_create', 'name'));
 
    }

    public function store_surat_izin_belajar(Request $request)
    {

    	$rules = [
            'keterangan' => 'required',
        ];

        $customMessages = [
            'keterangan.required' => 'Keterangan wajib diisi!',
         ];

        $this->validate($request, $rules, $customMessages);

        $nip = request('nip');

        $pathTujuan = public_path('assets/file/sib/'. $nip);
        if (!file_exists($pathTujuan)) {
            File::makeDirectory($pathTujuan, $mode = 0777, true, true);
        }

        // Surat Alasan Perpanjangan
        if($request->file('surat_izin_belajar') != null){
            $surat_izin_belajar = $request->file('surat_izin_belajar');
            $nm_surat_izin_belajar = "surat_izin_belajar.".$surat_izin_belajar->getClientOriginalExtension();
            $surat_izin_belajar->move($pathTujuan, $nm_surat_izin_belajar);
            $data_surat_izin_belajar = 'assets/file/sib/'. $nip . '/' . $nm_surat_izin_belajar;
        }

        $DataValidasi = new validasi_verifikasi;
        $DataValidasi->tgl_surat = now();
        $DataValidasi->tgl_validasi = null;
        $DataValidasi->id_verifikasi = request('id');
        $DataValidasi->id_user = Auth::user()->id;
        $DataValidasi->surat_izin_belajar = $request->file('surat_izin_belajar') == null ? null : $data_surat_izin_belajar;
        $DataValidasi->keterangan = request('keterangan');
        $DataValidasi->status = 0;
        $DataValidasi->created_at = now();
        $DataValidasi->save();

        verifikasi_data::where('id', $request->id)->update([
            'id_status' => 3,
            'keterangan' => request('keterangan')
        ]);

        $DataTracking = new tracking_verifikasi;
        $DataTracking->id_berkas = request('id_berkas');
        $DataTracking->id_status = 3;
        $DataTracking->created_at = now();
        $DataTracking->save();

        return redirect('/suratIzinBelajar/index')->with('message', 'Surat Berhasil dibuat!');
 
    }

    public function index_validasi_surat_izin_belajar()
    {

        $data_permohonan_validasi = validasi_verifikasi::leftJoin('verifikasi_data', 'validasi_verifikasi.id_verifikasi', '=', 'verifikasi_data.id')
        ->leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->leftJoin('users', 'verifikasi_data.id_user', '=', 'users.id')
        ->select('pemohon.*', 'users.name', 'validasi_verifikasi.*')
        ->get();
 
        return view('kepala_bagian.validasi.index', compact('data_permohonan_validasi'));
 
    }

    public function validasi_surat_izin_belajar(Request $request)
    {

        validasi_verifikasi::where('id', $request->id)->update([
            'tgl_validasi' => now(),
            'status' => 1,
        ]);
 
        return redirect('/validasi/index')->with('message', 'Data Berhasil divalidasi!');
 
    }

    public function batal_validasi_surat_izin_belajar(Request $request)
    {

        validasi_verifikasi::where('id', $request->id)->update([
            'tgl_validasi' => null,
            'status' => 0,
            'izin_dinas_perpanjangan' => null
        ]);
 
        return redirect('/validasi/index')->with('message_delete', 'Validasi Dibatalkan!');
 
    }
}
