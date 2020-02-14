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
use PDF;
use File;

class BinbangkumController extends Controller
{
    public function index_idp()
    {

        $data_idp = validasi_verifikasi::leftJoin('verifikasi_data', 'validasi_verifikasi.id_verifikasi', '=', 'verifikasi_data.id')
        ->leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->leftJoin('users', 'verifikasi_data.id_user', '=', 'users.id')
        ->select('validasi_verifikasi.*', 'pemohon.*', 'users.name')
        ->where('validasi_verifikasi.status', 1)
        ->get();
 
        return view('binbangkum.idp.index', compact('data_idp'));
 
    }

    public function print_idp($id)
    {
        
        $name = Auth::user()->name;

        $data_idp_print = validasi_verifikasi::leftJoin('verifikasi_data', 'validasi_verifikasi.id_verifikasi', '=', 'verifikasi_data.id')
        ->leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->leftJoin('users', 'verifikasi_data.id_user', '=', 'users.id')
        ->select('validasi_verifikasi.*', 'pemohon.*', 'users.name', 'verifikasi_data.id_berkas')
        ->where('validasi_verifikasi.id', $id)
        ->get();

        // return view('kepala_bagian.suratIzinBelajar.print', compact('data_permohonan_surat_print'));
        $customPaper = array(0,0,612.00,1008.00);
        $pdf = PDF::loadview('binbangkum.idp.print', compact('data_idp_print', 'name'))->setPaper($customPaper);
        return $pdf->download('IDP oleh ' . $name . '.pdf');
 
    }

    public function create_idp($id)
    {
        
        $name = Auth::user()->name;

        $data_idp_create = validasi_verifikasi::leftJoin('verifikasi_data', 'validasi_verifikasi.id_verifikasi', '=', 'verifikasi_data.id')
        ->leftJoin('berkas_pemohon', 'verifikasi_data.id_berkas', '=', 'berkas_pemohon.id_berkas')
        ->leftJoin('pemohon', 'berkas_pemohon.id_pemohon', '=', 'pemohon.id_pemohon')
        ->leftJoin('users', 'verifikasi_data.id_user', '=', 'users.id')
        ->select('validasi_verifikasi.*', 'pemohon.*', 'users.name', 'verifikasi_data.id_berkas')
        ->where('validasi_verifikasi.id', $id)
        ->get();
        return view('binbangkum.idp.form', compact('data_idp_create', 'name'));
 
    }

    public function store_idp(Request $request)
    {

        $rules = [
            'keterangan' => 'required',
        ];

        $customMessages = [
            'keterangan.required' => 'Keterangan wajib diisi!',
         ];

        $this->validate($request, $rules, $customMessages);

        $nip = request('nip');

        $pathTujuan = public_path('assets/file/idp/'. $nip);
        if (!file_exists($pathTujuan)) {
            File::makeDirectory($pathTujuan, $mode = 0777, true, true);
        }

        // Surat Alasan Perpanjangan
        if($request->file('izin_dinas_perpanjangan') != null){
            $izin_dinas_perpanjangan = $request->file('izin_dinas_perpanjangan');
            $nm_izin_dinas_perpanjangan = "izin_dinas_perpanjangan.".$izin_dinas_perpanjangan->getClientOriginalExtension();
            $izin_dinas_perpanjangan->move($pathTujuan, $nm_izin_dinas_perpanjangan);
            $data_izin_dinas_perpanjangan = 'assets/file/idp/'. $nip . '/' . $nm_izin_dinas_perpanjangan;
        }

        validasi_verifikasi::where('id', $request->id)->update([
            'izin_dinas_perpanjangan' => $request->file('izin_dinas_perpanjangan') == null ? null : $data_izin_dinas_perpanjangan,
            'keterangan' => request('keterangan'),
            'status' => 2
        ]);

        $DataTracking = new tracking_verifikasi;
        $DataTracking->id_berkas = request('id_berkas');
        $DataTracking->id_status = 4;
        $DataTracking->created_at = now();
        $DataTracking->save();

        return redirect('/idp/index')->with('message', 'Surat IDP Berhasil diupload!');
 
    }

    public function cancel_idp($id, $id_berkas)
    {

        validasi_verifikasi::where('id', $id)->update([
            'izin_dinas_perpanjangan' => null,
            'keterangan' => null,
            'status' => 1
        ]);

        tracking_verifikasi::where('id_berkas', $id_berkas)->where('status', 4)->delete();
 
        return redirect('/idp/index')->with('message_delete', 'Surat IDP Batal diupload!');
 
    }
}
