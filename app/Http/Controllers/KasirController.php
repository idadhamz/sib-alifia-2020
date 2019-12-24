<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Models\transaksi;

class KasirController extends Controller
{
    // Data Transaksi
    public function index_transaksi_kasir()
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get()


 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);

        // $transaksiPemasukan = transaksi::where('nm_transaksi', 1)->orderBy("created_at", "asc")->get();
        // $transaksiPengeluaran = transaksi::where('nm_transaksi', 2)->orderBy("created_at", "asc")->get();

        $transaksiPemasukan = transaksi::where('nm_transaksi', 1)
                            ->leftJoin('users', 'transaksi.id_user', '=', 'users.id')
                            ->select('transaksi.*','users.nama')
                            ->orderBy("transaksi.created_at", "asc")
                            ->get();
        $transaksiPengeluaran = transaksi::where('nm_transaksi', 2)
                                ->leftJoin('users', 'transaksi.id_user', '=', 'users.id')
                                ->select('transaksi.*','users.nama')
                                ->orderBy("transaksi.created_at", "asc")
                                ->get();
        return view('kasir.dataTransaksiKasir.index', compact('transaksiPemasukan','transaksiPengeluaran'));
 
    }

    public function add_transaksi_kasir()
    {

        return view('kasir.dataTransaksiKasir.create');
 
    }

    public function create_transaksi_kasir(Request $request)
    {

        $rules = [
            'nominal_transaksi' => 'required',
            'deskripsi' => 'required',
        ];

        $customMessages = [
            'nominal_transaksi.required' => 'No Akun wajib diisi!',
            'deskripsi.required' => 'Nama Akun wajib diisi!',
        ];

        $this->validate($request, $rules, $customMessages);

        $DataTransaksi = new transaksi;
        $DataTransaksi->tgl_transaksi = now();
        $DataTransaksi->nm_transaksi = request('nm_transaksi');
        $DataTransaksi->nominal_transaksi = request('nominal_transaksi');
        $DataTransaksi->deskripsi = request('deskripsi');
        $DataTransaksi->jenis = request('jenis');
        $DataTransaksi->id_user = Auth::user()->id;
        $DataTransaksi->created_at = now();
        $DataTransaksi->save();

        return redirect('/dataTransaksiKasir')->with('message', 'Data Berhasil diinput!');
    }

    public function edit_transaksi_kasir($id)
    {
        $DataTransaksiEdit = transaksi::where('id_transaksi', $id)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('kasir.dataTransaksiKasir.edit', compact('DataTransaksiEdit'));
    }

    public function update_transaksi_kasir(Request $request)
    {

        $rules = [
            'nominal_transaksi' => 'required',
            'deskripsi' => 'required',
        ];

        $customMessages = [
            'nominal_transaksi.required' => 'No Akun wajib diisi!',
            'deskripsi.required' => 'Nama Akun wajib diisi!',
        ];

        $this->validate($request, $rules, $customMessages);

        transaksi::where('id_transaksi', $request->id_transaksi)->update([
        	'nm_transaksi' => $request->nm_transaksi,
            'nominal_transaksi' => $request->nominal_transaksi,
            'deskripsi' => $request->deskripsi,
            'jenis' => $request->jenis,
            'updated_at' => now()
        ]);

        return redirect('/dataTransaksiKasir')->with('message_edit', 'Data Berhasil diubah!');
    }

    public function delete_transaksi_kasir($id)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        transaksi::where('id_transaksi', $id)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataTransaksiKasir')->with('message_delete', 'Data Berhasil dihapus!');
    }   
}
