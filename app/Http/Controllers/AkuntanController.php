<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\akun;
use App\Models\gol_akun;

class AkuntanController extends Controller
{
    // Data Akun
    public function index_akun()
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get();
        $DataAkun = DB::table('akun')
            ->join('gol_akun', 'akun.kode_golongan', '=', 'gol_akun.kode_golongan')
            ->select('akun.*', 'gol_akun.nm_golongan')
            ->orderBy('akun.created_at', 'asc')
            ->get();
 
    	// mengirim data jabatan ke view index
    	// return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataAkun.index', compact('DataAkun'));
 
    }

    public function add_akun()
    {

        $DataGolAkun = gol_akun::orderBy("created_at", "asc")->get();

        return view('akuntan.dataAkun.create', compact('DataGolAkun'));
 
    }

    public function create_akun(Request $request)
    {

        $rules = [
            'no_akun' => 'required',
            'nm_akun' => 'required',
            'kode_golongan' => 'required',
        ];

        $customMessages = [
            'no_akun.required' => 'No Akun wajib diisi!',
            'nm_akun.required' => 'Nama Akun wajib diisi!',
            'kode_golongan.required' => 'Tipe Akun wajib diisi!',
         ];

        $this->validate($request, $rules, $customMessages);

        $DataAkun = new akun;
        $DataAkun->no_akun = request('no_akun');
        $DataAkun->nm_akun = request('nm_akun');
        $DataAkun->kode_golongan = request('kode_golongan');
        $DataAkun->saldo_normal = request('saldo_normal');
        $DataAkun->created_at = now();
        $DataAkun->save();

        return redirect('/dataAkun')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_akun($id)
    {
        $DataAkunEdit = akun::where('id', $id)->get();
        $DataGolAkun = gol_akun::orderBy("created_at", "asc")->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('akuntan.dataAkun.edit', compact('DataAkunEdit','DataGolAkun'));
    }

    public function update_akun(Request $request)
    {

        $rules = [
            'no_akun' => 'required',
            'nm_akun' => 'required',
            'kode_golongan' => 'required',
        ];

        $customMessages = [
            'no_akun.required' => 'No Akun wajib diisi!',
            'nm_akun.required' => 'Nama Akun wajib diisi!',
            'kode_golongan.required' => 'Tipe Akun wajib diisi!',
        ];

        $this->validate($request, $rules, $customMessages);

        akun::where('id', $request->id)->update([
        	'no_akun' => $request->no_akun,
            'nm_akun' => $request->nm_akun,
            'kode_golongan' => $request->kode_golongan,
            'saldo_normal' => $request->saldo_normal,
            'updated_at' => now()
        ]);

        return redirect('/dataAkun')->with('message_edit', 'Data Berhasil diubah!');
    }

    public function delete_akun($no_akun)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        akun::where('no_akun',$no_akun)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataAkun')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Golongan Akun
    public function index_gol_akun()
    {

        // get data
        $DataGolAkun = gol_akun::orderBy("created_at", "asc")->get();
 
    	// mengirim data jabatan ke view index
    	// return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataGolonganAkun.index', compact('DataGolAkun'));
 
    }

    public function add_gol_akun()
    {

        return view('akuntan.dataGolonganAkun.create');
 
    }

    public function create_gol_akun(Request $request)
    {

        $rules = [
            'nm_golongan' => 'required',
        ];

        $customMessages = [
            'nm_golongan.required' => 'Golongan Akun wajib diisi!',
         ];

        $this->validate($request, $rules, $customMessages);

        $prefix = 'GA';
        $get_last_kode = gol_akun::orderBy('kode_golongan','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->kode_golongan, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $kode_golongan = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        $DataGolAkun = new gol_akun;
        $DataGolAkun->kode_golongan = $kode_golongan;
        $DataGolAkun->nm_golongan = request('nm_golongan');
        $DataGolAkun->created_at = now();
        $DataGolAkun->save();

        return redirect('/dataGolAkun')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_gol_akun($kode_golongan)
    {
        $DataGolAkunEdit = gol_akun::where('kode_golongan', $kode_golongan)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('akuntan.dataGolonganAkun.edit', compact('DataGolAkunEdit'));
    }

    public function update_gol_akun(Request $request)
    {

        $rules = [
            'nm_golongan' => 'required',
        ];

        $customMessages = [
            'nm_golongan.required' => 'Golongan Akun wajib diisi!',
        ];

        $this->validate($request, $rules, $customMessages);

        gol_akun::where('kode_golongan', $request->kode_golongan)->update([
        	'nm_golongan' => $request->nm_golongan,
            'updated_at' => now()
        ]);

        return redirect('/dataGolAkun')->with('message_edit', 'Data Berhasil diubah!');
    }

    public function delete_gol_akun($kode_golongan)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        gol_akun::where('kode_golongan', $kode_golongan)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataGolAkun')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Transaksi
    public function index_transaksi()
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get()


 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataTransaksi.index');
 
    }

    // Data Jurnal Umum
    public function index_jurnal_umum()
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get()


 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataJurnalUmum.index');
 
    }

    public function add_jurnal_umum()
    {

        return view('akuntan.dataJurnalUmum.create');
 
    }

    // Data Jurnal Penyesuaian
    public function index_jurnal_penyesuaian()
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get()


 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataJurnalPenyesuaian.index');
 
    }

    public function add_jurnal_penyesuaian()
    {

        return view('akuntan.dataJurnalPenyesuaian.create');
 
    }
}
