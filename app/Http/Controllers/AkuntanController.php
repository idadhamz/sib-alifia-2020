<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\akun;

class AkuntanController extends Controller
{
    // Data User
    public function index_akun()
    {

        // get data
        $DataAkun = akun::orderBy("no_akun", "asc")->get();
 
    	// mengirim data jabatan ke view index
    	// return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataAkun.index', compact('DataAkun'));
 
    }

    public function create_akun()
    {

        return view('akuntan.dataAkun.create');
 
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

        $DataUser = new akun;
        $DataUser->no_akun = request('no_akun');
        $DataUser->nm_akun = request('nm_akun');
        $DataUser->kode_golongan = request('kode_golongan');
        $DataUser->saldo_normal = request('saldo_normal');
        $DataUser->created_at = now();
        $DataUser->save();

        return redirect('/dataAkun')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_akun($id)
    {
        $DataAkunEdit = akun::where('id', $id)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('akuntan.dataAkun.edit', compact('DataAkunEdit'));
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
}
