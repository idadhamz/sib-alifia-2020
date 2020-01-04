<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\akun;
use App\Models\gol_akun;
use App\Models\transaksi;
use App\Models\jurnal_umum;
use App\Models\akun_jurnal_umum;
use App\Models\jurnal_penyesuaian;
use App\Models\akun_jurnal_penyesuaian;
use App\Models\buku_besar;
use App\Models\total_per_akun;
use App\Models\total_keseluruhan;
use App\User;

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

    public function delete_akun($id)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        akun::where('id', $id)->delete();
            
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
        $transaksiPemasukan = transaksi::where('nm_transaksi', 1)
                            ->leftJoin('users', 'transaksi.id_user', '=', 'users.id')
                            ->select('transaksi.*','users.nama')
                            ->orderBy("transaksi.tgl_transaksi", "desc")
                            ->get();
        $transaksiPengeluaran = transaksi::where('nm_transaksi', 2)
                                ->leftJoin('users', 'transaksi.id_user', '=', 'users.id')
                                ->select('transaksi.*','users.nama')
                                ->orderBy("transaksi.tgl_transaksi", "desc")
                                ->get();
        return view('akuntan.dataTransaksi.index', compact('transaksiPemasukan','transaksiPengeluaran'));
 
    }

    public function cari_akun($no_akun){

        $DataAkunCari = akun::where('no_akun', $no_akun)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        echo json_encode($DataAkunCari);

    }

    // Data Jurnal Umum
    public function index_jurnal_umum()
    {

        // get data
        $DataJurnalUmum = jurnal_umum::orderBy('kode_jurnal', 'DESC')->get();


 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataJurnalUmum.index', compact('DataJurnalUmum'));
 
    }

    public function add_jurnal_umum()
    {   
        $transaksiPemasukan = transaksi::where('nm_transaksi', 1)
                            ->leftJoin('users', 'transaksi.id_user', '=', 'users.id')
                            ->select('transaksi.*','users.nama')
                            ->orderBy("transaksi.tgl_transaksi", "desc")
                            ->get();
        $transaksiPengeluaran = transaksi::where('nm_transaksi', 2)
                                ->leftJoin('users', 'transaksi.id_user', '=', 'users.id')
                                ->select('transaksi.*','users.nama')
                                ->orderBy("transaksi.tgl_transaksi", "desc")
                                ->get();
        $DataAkun = akun::orderBy("no_akun", "asc")->get();
        $DataTransaksi = transaksi::orderBy("tgl_transaksi", "desc")->get();

        return view('akuntan.dataJurnalUmum.create', compact('DataAkun','transaksiPemasukan','transaksiPengeluaran','DataTransaksi'));
 
    }

    public function simpan_jurnal(Request $request){

        $no_jurnal_umum  = $request->no_jurnal_umum;
        $nm_jurnal_umum  = $request->nm_jurnal_umum;
        $nilai  = $request->nilai;
        $data  = json_decode($request->sendData);

        $prefix = 'JU';
        $get_last_kode = jurnal_umum::orderBy('kode_jurnal','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->kode_jurnal, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $kode_jurnal = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        foreach($data as $row) {
            akun_jurnal_umum::create([
                "kode_jurnal" => $kode_jurnal,
                "id_transaksi" => $row->id_transaksi,
                "no_akun" => $row->no_akun,
                "tgl_jurnal" => now(),
                "debit" => $row->nominal_debit,
                "kredit" => $row->nominal_kredit,
                "created_at" => now()
            ]);
        }

        jurnal_umum::create([
            "kode_jurnal" => $kode_jurnal,
            "tanggal_pembuatan" => now(),
            "no_jurnal_umum" => $no_jurnal_umum,
            "nm_jurnal_umum" => $nm_jurnal_umum,
            "nilai" => $nilai,
            "created_at" => now()
        ]);

        foreach($data as $row) {
            buku_besar::create([
                "id_jurnal" => $kode_jurnal,
                "id_transaksi" => $row->id_transaksi,
                "no_akun" => $row->no_akun,
                "debit" => $row->nominal_debit,
                "kredit" => $row->nominal_kredit,
                "total_bb" => 0,
                "tgl_posting" => now(),
                "created_at" => now()
            ]);
        }

        return redirect('/dataJurnalUmum')->with('message', 'Data Berhasil diinput!');
    }

    public function lihat_jurnal_umum($kode_jurnal){
        // get data
        // $DataJurnal = jurnal_umum::where("kode_jurnal", $kode_jurnal)->get();
        $DataAkunJurnal = akun_jurnal_umum::leftJoin('transaksi', 'akun_jurnal_umum.id_transaksi', '=', 'transaksi.id_transaksi')->leftJoin('akun', 'akun_jurnal_umum.no_akun', '=', 'akun.no_akun')
                ->select('akun_jurnal_umum.*','transaksi.tgl_transaksi', 'transaksi.deskripsi', 'akun.no_akun')
                ->where('akun_jurnal_umum.kode_jurnal', $kode_jurnal)
                ->orderBy('transaksi.tgl_transaksi', 'ASC')
                ->get();
        $DataJurnal = jurnal_umum::where("kode_jurnal", $kode_jurnal)->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataJurnalUmum.lihat', compact('DataAkunJurnal', 'DataJurnal'));
    }

    // public function filter_jurnal_umum(Request $request){
    public function filter_jurnal_umum($dari, $sampai){

        // $dari  = $request->dari;
        // $sampai  = $request->sampai;
        
        $DataJurnalUmumFilters = jurnal_umum::whereBetween('tanggal_pembuatan', [$dari, $sampai])
        ->orderBy("tanggal_pembuatan", "asc")->get();
        $dari = $dari;
        $sampai = $sampai;
        // $returnHTML = view('akuntan.dataJurnalUmum.filter')->with('DataJurnalUmumFilters', $DataJurnalUmumFilters)->render();
        // return response()->json(array('success' => true, 'html'=>$returnHTML));
        // dd($DataJurnalUmumFilters);

        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataJurnalUmum.filter', compact('DataJurnalUmumFilters', 'dari', 'sampai'));
    }

    public function delete_jurnal_umum(Request $request)
    {

        // if(isset($request->id)){
            // menghapus data jabatan berdasarkan id yang dipilih
            // jurnal_umum::where('kode_jurnal', $kode_jurnal)->delete();
            // akun_jurnal_umum::where('kode_jurnal', $kode_jurnal)->delete();

            // alihkan halaman ke halaman jabatan
            // return redirect('/dataJurnalUmum')->with('message_delete', 'Data Berhasil dihapus!');
        // }

        // jurnal_umum::find($request->id)->delete();
        // akun_jurnal_umum::find($request->id)->delete();
        jurnal_umum::where('kode_jurnal', $request->id)->delete();
        akun_jurnal_umum::where('kode_jurnal', $request->id)->delete();
        buku_besar::where('id_jurnal', $request->id)->delete();
        return redirect('/dataJurnalUmum')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Jurnal Penyesuaian
    public function index_jurnal_penyesuaian()
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get()
        $DataJurnalPenyesuaian = jurnal_penyesuaian::orderBy("kode_jurnal_penyesuaian", "DESC")->get();


 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataJurnalPenyesuaian.index', compact('DataJurnalPenyesuaian'));
 
    }

    public function add_jurnal_penyesuaian()
    {

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
        $DataAkun = akun::orderBy("no_akun", "asc")->get();
        $DataTransaksi = transaksi::orderBy("created_at", "asc")->get();
        
        return view('akuntan.dataJurnalPenyesuaian.create', compact('DataAkun','transaksiPemasukan','transaksiPengeluaran','DataTransaksi'));
 
    }

    public function simpan_jurnal_penyesuaian(Request $request){

        $no_jurnal_penyesuaian  = $request->no_jurnal_penyesuaian;
        $nm_jurnal_penyesuaian  = $request->nm_jurnal_penyesuaian;
        // $nilai  = $request->nilai;
        $data  = json_decode($request->sendData);

        $prefix = 'JP';
        $get_last_kode = jurnal_penyesuaian::orderBy('kode_jurnal_penyesuaian','desc')->first();
        $last_kode = ($get_last_kode) ? (int) substr($get_last_kode->kode_jurnal_penyesuaian, strlen($prefix), 2)+1 : 1;
        $digit = 1;
        $kode_jurnal_penyesuaian = $prefix.str_repeat("0", $digit-strlen($last_kode)).$last_kode;

        foreach($data as $row) {
            akun_jurnal_penyesuaian::create([
                "kode_jurnal_penyesuaian" => $kode_jurnal_penyesuaian,
                "id_transaksi" => $row->id_transaksi,
                "no_akun" => $row->no_akun,
                "tgl_jurnal" => now(),
                "debit" => $row->nominal_debit,
                "kredit" => $row->nominal_kredit,
                "created_at" => now()
            ]);
        }

        jurnal_penyesuaian::create([
            "kode_jurnal_penyesuaian" => $kode_jurnal_penyesuaian,
            "tanggal_pembuatan" => now(),
            "no_jurnal_penyesuaian" => $no_jurnal_penyesuaian,
            "nm_jurnal_penyesuaian" => $nm_jurnal_penyesuaian,
            "created_at" => now()
        ]);

        foreach($data as $row) {
            buku_besar::create([
                "id_jurnal" => $kode_jurnal_penyesuaian,
                "id_transaksi" => $row->id_transaksi,
                "no_akun" => $row->no_akun,
                "debit" => $row->nominal_debit,
                "kredit" => $row->nominal_kredit,
                "total_bb" => null,
                "tgl_posting" => now(),
                "created_at" => now()
            ]);
        }

        return redirect('/dataJurnalPenyesuaian')->with('message', 'Data Berhasil diinput!');
    }

    public function lihat_jurnal_penyesuaian($kode_jurnal_penyesuaian){
        // get data
        // $DataJurnal = jurnal_penyesuaian::where("kode_jurnal_penyesuaian", $kode_jurnal_penyesuaian)->get();
        $DataAkunJurnalPenyesuaian = akun_jurnal_penyesuaian::leftJoin('transaksi', 'akun_jurnal_penyesuaian.id_transaksi', '=', 'transaksi.id_transaksi')->leftJoin('akun', 'akun_jurnal_penyesuaian.no_akun', '=', 'akun.no_akun')
                ->select('akun_jurnal_penyesuaian.*','transaksi.tgl_transaksi', 'transaksi.deskripsi', 'akun.no_akun')
                ->where('akun_jurnal_penyesuaian.kode_jurnal_penyesuaian', $kode_jurnal_penyesuaian)
                ->orderBy('transaksi.tgl_transaksi', 'ASC')
                ->get();
        $DataJurnalPenyesuaian = jurnal_penyesuaian::where("kode_jurnal_penyesuaian", $kode_jurnal_penyesuaian)->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataJurnalPenyesuaian.lihat', compact('DataAkunJurnalPenyesuaian', 'DataJurnalPenyesuaian'));
    }
    public function delete_jurnal_penyesuaian(Request $request)
    {

        // if(isset($request->id)){
            // menghapus data jabatan berdasarkan id yang dipilih
            // jurnal_umum::where('kode_jurnal', $kode_jurnal)->delete();
            // akun_jurnal_umum::where('kode_jurnal', $kode_jurnal)->delete();

            // alihkan halaman ke halaman jabatan
            // return redirect('/dataJurnalUmum')->with('message_delete', 'Data Berhasil dihapus!');
        // }

        // jurnal_umum::find($request->id)->delete();
        // akun_jurnal_umum::find($request->id)->delete();
        jurnal_penyesuaian::where('kode_jurnal_penyesuaian', $request->id)->delete();
        akun_jurnal_penyesuaian::where('kode_jurnal_penyesuaian', $request->id)->delete();
        buku_besar::where('id_jurnal', $request->id)->delete();
        return redirect('/dataJurnalPenyesuaian')->with('message_delete', 'Data Berhasil dihapus!');
    }

    // Data Jurnal Penyesuaian
    public function index_buku_besar()
    {

        // get data
        $DataAkun = akun::orderBy("no_akun", "asc")->get();

        // dd($DataAkun[1]->no_akun);

        // $NoAkun = ['111', '112', '113', '114'];

        // for($i = 0; $i < count($NoAkun); $i++){
        //     ${"DataBukuBesar" . $NoAkun[$i]} = buku_besar::where('buku_besar.no_akun', $NoAkun[$i])
        //     ->leftJoin('transaksi', 'buku_besar.id_transaksi', '=', 'transaksi.id_transaksi')
        //     ->select('buku_besar.*','transaksi.deskripsi')
        //     ->get();
        // }

        // $dataBukuBesar = array();

        foreach($DataAkun as $index => $akun){
            ${"DataBukuBesar" . $akun->no_akun} = buku_besar::where('buku_besar.no_akun', $akun->no_akun)
            ->leftJoin('transaksi', 'buku_besar.id_transaksi', '=', 'transaksi.id_transaksi')
            ->leftJoin('total_per_akun', 'buku_besar.no_akun', '=', 'total_per_akun.no_akun')
            ->select('buku_besar.*','transaksi.deskripsi', 'total_per_akun.total_debit', 'total_per_akun.total_kredit')
            ->get();   

            // dd(${"DataBukuBesar" . $akun->no_akun});

            // $totalBukuBesar = total_per_akun::where('no_akun', $akun->no_akun)->first();

            // $dataBukuBesar['buku_besar'] = ${"DataBukuBesar" . $akun->no_akun};
        };


        // dd($DataBukuBesar111);

        // $DataBukuBesar = buku_besar::where('no_akun', $DataAkun->no_akun)->get();
        $DataBukuBesarKas = buku_besar::where('buku_besar.no_akun', 111)
            ->leftJoin('transaksi', 'buku_besar.id_transaksi', '=', 'transaksi.id_transaksi')
            ->select('buku_besar.*','transaksi.deskripsi')
            ->get();

        $DataBukuBesarModal = buku_besar::where('buku_besar.no_akun', 311)
            ->leftJoin('transaksi', 'buku_besar.id_transaksi', '=', 'transaksi.id_transaksi')
            ->select('buku_besar.*','transaksi.deskripsi')
            ->get();

            // $DataBukuBesarKas = akun_jurnal_umum::leftJoin('transaksi', 'akun_jurnal_umum.id_transaksi', '=', 'transaksi.id_transaksi')
            // ->select('akun_jurnal_umum.*','transaksi.deskripsi')
            // ->where('no_akun', 111)
            // ->get();

 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        // return view('akuntan.dataBukuBesar.index', 
        //     compact(
        //         'DataAkun', 
        //         'DataBukuBesar111',
        //         'DataBukuBesar112', 
        //         'DataBukuBesar113',
        //         'DataBukuBesar114',
        //         'DataBukuBesar211',
        //         'DataBukuBesar212',
        //         'DataBukuBesar311'
        //     )
        // );

        return view('akuntan.dataBukuBesar.index', 
            compact(
                'DataAkun', 
                'DataBukuBesar111',
                'DataBukuBesar112', 
                'DataBukuBesar113',
                'DataBukuBesar114',
                'DataBukuBesar115',
                'DataBukuBesar116',
                'DataBukuBesar117',
                'DataBukuBesar118',
                'DataBukuBesar119',
                'DataBukuBesar120',
                'DataBukuBesar211',
                'DataBukuBesar212',
                'DataBukuBesar213',
                'DataBukuBesar214',
                'DataBukuBesar215',
                'DataBukuBesar311',
                'DataBukuBesar312',
                'DataBukuBesar411',
                'DataBukuBesar412',
                'DataBukuBesar511',
                'DataBukuBesar512',
                'DataBukuBesar513',
                'DataBukuBesar514',
                'DataBukuBesar515',
                'DataBukuBesar516',
                'DataBukuBesar517',
                'DataBukuBesar518',
                'DataBukuBesar519',
                'DataBukuBesar520',
                'DataBukuBesar521',
            )
        );

        // return view('akuntan.dataBukuBesar.index', 
        //     compact('DataAkun',
        //         foreach($DataAkun as $index => $akun){
        //             if($index != $index){
        //                 'DataBukuBesar'.$akun->no_akun.',';
        //             }
        //         }
        //     )
        // );
 
    }

    public function detail_buku_besar($no_akun){
        // get data
        // $DataJurnal = jurnal_umum::where("kode_jurnal", $kode_jurnal)->get();
        $DataBukuBesarDetail = buku_besar::where('buku_besar.no_akun', $no_akun)
            ->leftJoin('transaksi', 'buku_besar.id_transaksi', '=', 'transaksi.id_transaksi')
            ->leftJoin('total_per_akun', 'buku_besar.no_akun', '=', 'total_per_akun.no_akun')
            ->select('buku_besar.*','transaksi.deskripsi', 'transaksi.tgl_transaksi', 'total_per_akun.total_debit', 'total_per_akun.total_kredit')
            ->orderBy('buku_besar.tgl_posting', 'DESC')
            ->get(); 

        $DataAkunDetail = akun::where('no_akun', $no_akun)->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataBukuBesar.lihat', compact('DataBukuBesarDetail', 'DataAkunDetail'));
    }

    // Data Neraca Saldo
    public function hasil_neraca_saldo($dari, $sampai)
    {

        // get data
        // $DataAkun = akun::orderBy("no_akun", "asc")->get()

        $dataNeracaSaldo = total_per_akun::leftJoin('akun', 'total_per_akun.no_akun', '=', 'akun.no_akun')
            ->select('total_per_akun.total_debit', 'total_per_akun.total_kredit', 'total_per_akun.tgl_posting', 'akun.*')
            ->where('total_per_akun.tgl_posting', '>=', \Carbon\Carbon::now()->startOfMonth())
            ->get();

        // $dataTotalNeracaSaldo = total_keseluruhan::where('bulan', '=', Carbon::today()->month)->get();
            
        // $tanggal_dari = Carbon::parse($dari)->format('Y-m');
        // $tanggal_sampai = Carbon::parse($sampai)->format('Y-m');
        // $dataTotalNeracaSaldo = total_keseluruhan::whereBetween('waktu', [$tanggal_dari, $tanggal_sampai])->get();

        // $total_debit = total_keseluruhan::whereBetween('waktu', [$tanggal_dari, $tanggal_sampai])->sum('total_debit_all');
        // $total_kredit = total_keseluruhan::whereBetween('waktu', [$tanggal_dari, $tanggal_sampai])->sum('total_kredit_all');

        $total_debit = buku_besar::whereBetween('tgl_posting', [$dari, $sampai])->sum('debit');
        $total_kredit = buku_besar::whereBetween('tgl_posting', [$dari, $sampai])->sum('kredit');

        // dd(Carbon::parse($dari)->format('Y-m'));

        // dd(Carbon::today()->month);

        // $DataAkun = akun::orderBy("no_akun", "asc")->get();


        // foreach($DataAkun as $index => $akun){
        //     $dataNeracaSaldoSum = buku_besar::leftJoin('akun', 'buku_besar.no_akun', '=', 'akun.no_akun')
        //     ->select('buku_besar.debit', 'buku_besar.kredit', 'buku_besar.tgl_posting', 'akun.*')
        //     ->whereBetween('tgl_posting', [$dari, $sampai])
        //     ->where('buku_besar.no_akun', $akun->no_akun)
        //     // ->groupBy('akun.no_akun')
        //     ->sum('buku_besar.debit');
        // };

        // dd($dataNeracaSaldoSum);

        $dataNeracaSaldoHasil = buku_besar::leftJoin('akun', 'buku_besar.no_akun', '=', 'akun.no_akun')
            // ->select(SUM('buku_besar.debit'), 'buku_besar.kredit', 'buku_besar.tgl_posting', 'akun.*')
            ->select(DB::raw('SUM(buku_besar.debit) as debit'), DB::raw('SUM(buku_besar.kredit) as kredit'), 'buku_besar.tgl_posting', 'akun.*')
            ->whereBetween('tgl_posting', [$dari, $sampai])
            ->groupBy('akun.no_akun')
            ->get();

        $dari = $dari;
        $sampai = $sampai;



 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataNeracaSaldo.hasil', compact('dataNeracaSaldoHasil', 'total_debit', 'total_kredit', 'dari', 'sampai'));
 
    }

    // Data Neraca Saldo
    public function hasil_all_neraca_saldo()
    {

        $total_debit = buku_besar::sum('debit');
        $total_kredit = buku_besar::sum('kredit');

        $dataNeracaSaldoHasil = buku_besar::leftJoin('akun', 'buku_besar.no_akun', '=', 'akun.no_akun')
            // ->select(SUM('buku_besar.debit'), 'buku_besar.kredit', 'buku_besar.tgl_posting', 'akun.*')
            ->select(DB::raw('SUM(buku_besar.debit) as debit'), DB::raw('SUM(buku_besar.kredit) as kredit'), 'buku_besar.tgl_posting', 'akun.*')
            ->groupBy('akun.no_akun')
            ->get();



 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataNeracaSaldo.hasil_all', compact('dataNeracaSaldoHasil', 'total_debit', 'total_kredit'));
 
    }

    public function cari_neraca_saldo()
    {

 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('akuntan.dataNeracaSaldo.cari');
 
    }
}
