<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

use App\Models\data_diri_pemohon;
use App\Models\berkas_pemohon;
use App\User;

use File;
use Auth;

class PemohonController extends Controller
{
    // Data Pemohon
    public function view_input_data_diri($id)
    {

        // get data
        $data_diri_pemohon_view = data_diri_pemohon::where('id_pemohon', $id)->get();
 
        // mengirim data jabatan ke view index
        // return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('pemohon.dataDiriPemohon.view', compact('data_diri_pemohon_view'));
 
    }

    public function index_input_data_diri()
    {

        // get data
        $data_diri_pemohon = data_diri_pemohon::where('kd_user', Auth::user()->kd_user)->get();
 
        // mengirim data jabatan ke view index
        // return view('pemohon.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('pemohon.dataDiriPemohon.index', compact('data_diri_pemohon'));
 
    }

    public function create_input_data_diri()
    {

        return view('pemohon.dataDiriPemohon.create');
 
    }

    public function store_input_data_diri(Request $request)
    {

        $rules = [
            'nip' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'unit_kerja' => 'required',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'jenjang_pend' => 'required',
            'jurusan' => 'required',
            'univ' => 'required',
            'tgl_mulai_studi' => 'required',
            'tgl_berakhir_studi' => 'required',
            'beasiswa' => 'required',
            'alasan_perp' => 'required',
            'jml_wkt_perp' => 'required'
        ];

        $customMessages = [
            'nip' => 'Data Wajib Diisi!',
            'nama_depan' => 'Data Wajib Diisi!',
            'nama_belakang' => 'Data Wajib Diisi!',
            'jk' => 'Data Wajib Diisi!',
            'tempat_lahir' => 'Data Wajib Diisi!',
            'tgl_lahir' => 'Data Wajib Diisi!',
            'agama' => 'Data Wajib Diisi!',
            'status' => 'Data Wajib Diisi!',
            'alamat' => 'Data Wajib Diisi!',
            'unit_kerja' => 'Data Wajib Diisi!',
            'jabatan' => 'Data Wajib Diisi!',
            'pangkat' => 'Data Wajib Diisi!',
            'jenjang_pend' => 'Data Wajib Diisi!',
            'jurusan' => 'Data Wajib Diisi!',
            'univ' => 'Data Wajib Diisi!',
            'tgl_mulai_studi' => 'Data Wajib Diisi!',
            'tgl_berakhir_studi' => 'Data Wajib Diisi!',
            'beasiswa' => 'Data Wajib Diisi!',
            'alasan_perp' => 'Data Wajib Diisi!',
            'jml_wkt_perp' => 'Data Wajib Diisi!'
         ];

        $this->validate($request, $rules, $customMessages);

        $DataDiriPemohon = new data_diri_pemohon;
        $DataDiriPemohon->nip = request('nip');
        $DataDiriPemohon->nama = request('nama_depan') . ' ' . request('nama_belakang');
        $DataDiriPemohon->jk = request('jk');
        $DataDiriPemohon->tempat_lahir = request('tempat_lahir');
        $DataDiriPemohon->tgl_lahir = request('tgl_lahir');
        $DataDiriPemohon->agama = request('agama');
        $DataDiriPemohon->status = request('status');
        $DataDiriPemohon->alamat = request('alamat');
        $DataDiriPemohon->unit_kerja = request('unit_kerja');
        $DataDiriPemohon->jabatan = request('jabatan');
        $DataDiriPemohon->pangkat = request('pangkat');
        $DataDiriPemohon->jenjang_pend = request('jenjang_pend');
        $DataDiriPemohon->jurusan = request('jurusan');
        $DataDiriPemohon->univ = request('univ');
        $DataDiriPemohon->tgl_mulai = request('tgl_mulai_studi');
        $DataDiriPemohon->tgl_selesai = request('tgl_berakhir_studi');
        $DataDiriPemohon->beasiswa = request('beasiswa');
        $DataDiriPemohon->alasan_perp = request('alasan_perp');
        $DataDiriPemohon->jml_wkt_perp = request('jml_wkt_perp');
        $DataDiriPemohon->tgl_perp = null;
        $DataDiriPemohon->created_at = now();
        $DataDiriPemohon->save();

        return redirect('/InputDataDiri/index')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_input_data_diri($id)
    {
        $DataPemohonEdit = data_diri_pemohon::where('id_pemohon', $id)->get();

        return view('pemohon.dataDiriPemohon.edit', compact('DataPemohonEdit'));
    }

    public function update_input_data_diri(Request $request)
    {

        $rules = [
            'nip' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'unit_kerja' => 'required',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'jenjang_pend' => 'required',
            'jurusan' => 'required',
            'univ' => 'required',
            'tgl_mulai_studi' => 'required',
            'tgl_berakhir_studi' => 'required',
            'beasiswa' => 'required',
            'alasan_perp' => 'required',
            'jml_wkt_perp' => 'required'
        ];

        $customMessages = [
            'nip' => 'Data Wajib Diisi!',
            'nama' => 'Data Wajib Diisi!',
            'jk' => 'Data Wajib Diisi!',
            'tempat_lahir' => 'Data Wajib Diisi!',
            'tgl_lahir' => 'Data Wajib Diisi!',
            'agama' => 'Data Wajib Diisi!',
            'status' => 'Data Wajib Diisi!',
            'alamat' => 'Data Wajib Diisi!',
            'unit_kerja' => 'Data Wajib Diisi!',
            'jabatan' => 'Data Wajib Diisi!',
            'pangkat' => 'Data Wajib Diisi!',
            'jenjang_pend' => 'Data Wajib Diisi!',
            'jurusan' => 'Data Wajib Diisi!',
            'univ' => 'Data Wajib Diisi!',
            'tgl_mulai_studi' => 'Data Wajib Diisi!',
            'tgl_berakhir_studi' => 'Data Wajib Diisi!',
            'beasiswa' => 'Data Wajib Diisi!',
            'alasan_perp' => 'Data Wajib Diisi!',
            'jml_wkt_perp' => 'Data Wajib Diisi!'
         ];

        $this->validate($request, $rules, $customMessages);

        data_diri_pemohon::where('id_pemohon', $request->id)->update([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'status' => $request->status,
            'alamat' => $request->alamat,
            'unit_kerja' => $request->unit_kerja,
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'jenjang_pend' => $request->jenjang_pend,
            'jurusan' => $request->jurusan,
            'univ' => $request->univ,
            'tgl_mulai' => $request->tgl_mulai_studi,
            'tgl_selesai' => $request->tgl_berakhir_studi,
            'beasiswa' => $request->beasiswa,
            'alasan_perp' => $request->alasan_perp,
            'jml_wkt_perp' => $request->jml_wkt_perp,
            'tgl_perp' => null,
            'updated_at' => now()
        ]);

        return redirect('/InputDataDiri/index')->with('message_edit', 'Data Berhasil diubah!');
    }

    public function delete_input_data_diri($id)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        data_diri_pemohon::where('id_pemohon',$id)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/InputDataDiri/index')->with('message_delete', 'Data Berhasil dihapus!');
    }

    public function index_input_berkas()
    {

        $data_diri_pemohon = data_diri_pemohon::where('kd_user', Auth::user()->kd_user)->get();
 
        return view('pemohon.uploadBerkas.index', compact('data_diri_pemohon'));
 
    }

    public function input_input_berkas($id)
    {

        $data_diri_pemohon_upload = data_diri_pemohon::leftJoin('berkas_pemohon', 'pemohon.id_pemohon', '=', 'berkas_pemohon.id_pemohon')->select('pemohon.id_pemohon', 'pemohon.nip', 'berkas_pemohon.surat_alasan_perpanjangan', 'berkas_pemohon.surat_keterangan_sehat')->where('pemohon.id_pemohon', $id)->get();
 
        return view('pemohon.uploadBerkas.upload', compact('data_diri_pemohon_upload'));
 
    }

    public function save_input_berkas(Request $request)
    {
        
        // $this->validate($request, [
        //     'surat_alasan_perpanjangan' => 'required|mimes:pdf',
        //     'surat_keterangan_sehat' => 'required|mimes:pdf',
        //     'sk_cpns_pns' => 'required|mimes:pdf',
        //     'sk_jabatan_terakhir' => 'required|mimes:pdf',
        //     'sk_lulus' => 'required|mimes:pdf',
        //     'jam_pem_belajar' => 'required|mimes:pdf',
        //     'rek_per_studi' => 'required|mimes:pdf',
        //     'surat_set_per_pen_studi' => 'required|mimes:pdf'
        // ]);

        $cekData = berkas_pemohon::where('id_pemohon', request('id_pemohon'))->first();

        $nip = request('nip');

        $pathTujuan = public_path('assets/file/'. $nip);
        if (!file_exists($pathTujuan)) {
            File::makeDirectory($pathTujuan, $mode = 0777, true, true);
        }

        // Surat Alasan Perpanjangan
        if($request->file('surat_alasan_perpanjangan') != null){
            $surat_alasan_perpanjangan = $request->file('surat_alasan_perpanjangan');
            $nm_surat_alasan_perpanjangan = "surat_alasan_perpanjangan.".$surat_alasan_perpanjangan->getClientOriginalExtension();
            $surat_alasan_perpanjangan->move($pathTujuan, $nm_surat_alasan_perpanjangan);
            $data_surat_alasan_perpanjangan = 'assets/file/'.$nip.'/'.$nm_surat_alasan_perpanjangan;
        }

        // surat_keterangan_sehat
        if($request->file('surat_keterangan_sehat') != null){
            $surat_keterangan_sehat = $request->file('surat_keterangan_sehat');
            $nm_surat_keterangan_sehat = "surat_keterangan_sehat.".$surat_keterangan_sehat->getClientOriginalExtension();
            $surat_keterangan_sehat->move($pathTujuan, $nm_surat_keterangan_sehat);
            $data_surat_keterangan_sehat = 'assets/file/'.$nip.'/'.$nm_surat_keterangan_sehat;
        }

        if($request->file('sk_cpns_pns') != null){
            $sk_cpns_pns = $request->file('sk_cpns_pns');
            $nm_sk_cpns_pns = "sk_cpns_pns.".$sk_cpns_pns->getClientOriginalExtension();
            $sk_cpns_pns->move($pathTujuan, $nm_sk_cpns_pns);
            $data_sk_cpns_pns = 'assets/file/'.$nip.'/'.$nm_sk_cpns_pns;
        }

        if($request->file('sk_jabatan_terakhir') != null){
            $sk_jabatan_terakhir = $request->file('sk_jabatan_terakhir');
            $nm_sk_jabatan_terakhir = "sk_jabatan_terakhir.".$sk_jabatan_terakhir->getClientOriginalExtension();
            $sk_jabatan_terakhir->move($pathTujuan, $nm_sk_jabatan_terakhir);
            $data_sk_jabatan_terakhir = 'assets/file/'.$nip.'/'.$nm_sk_jabatan_terakhir;
        }

        if($request->file('sk_lulus') != null){
            $sk_lulus = $request->file('sk_lulus');
            $nm_sk_lulus = "sk_lulus.".$sk_lulus->getClientOriginalExtension();
            $sk_lulus->move($pathTujuan, $nm_sk_lulus);
            $data_sk_lulus = 'assets/file/'.$nip.'/'.$nm_sk_lulus;
        }

        if($request->file('jam_pem_belajar') != null){
            $jam_pem_belajar = $request->file('jam_pem_belajar');
            $nm_jam_pem_belajar = "jam_pem_belajar.".$jam_pem_belajar->getClientOriginalExtension();
            $jam_pem_belajar->move($pathTujuan, $nm_jam_pem_belajar);
            $data_jam_pem_belajar = 'assets/file/'.$nip.'/'.$nm_jam_pem_belajar;
        }

        if($request->file('rek_per_studi') != null){
            $rek_per_studi = $request->file('rek_per_studi');
            $nm_rek_per_studi = "rek_per_studi.".$rek_per_studi->getClientOriginalExtension();
            $rek_per_studi->move($pathTujuan, $nm_rek_per_studi);
            $data_rek_per_studi = 'assets/file/'.$nip.'/'.$nm_rek_per_studi;
        }

        if($request->file('surat_set_per_pen_studi') != null){
            $surat_set_per_pen_studi = $request->file('surat_set_per_pen_studi');
            $nm_surat_set_per_pen_studi = "surat_set_per_pen_studi.".$surat_set_per_pen_studi->getClientOriginalExtension();
            $surat_set_per_pen_studi->move($pathTujuan, $nm_surat_set_per_pen_studi);
            $data_surat_set_per_pen_studi = 'assets/file/'.$nip.'/'.$nm_surat_set_per_pen_studi;
        }

        // $berkas_pemohon = new berkas_pemohon();
        // $berkas_pemohon->id_user = $id_user;
        // $berkas_pemohon->surat_alasan_perpanjangan = json_encode($data_surat_alasan_perpanjangan);
        // $berkas_pemohon->created_at = now();
        // $berkas_pemohon->save();

        // dd(request('id_pemohon'));

        if($cekData['surat_alasan_perpanjangan'] != null || $cekData['surat_keterangan_sehat'] != null){
            berkas_pemohon::where('id_pemohon', $request->id_pemohon)->update([
                'surat_alasan_perpanjangan' => $request->file('surat_alasan_perpanjangan') == null ? $cekData['surat_alasan_perpanjangan'] : $data_surat_alasan_perpanjangan,
                'surat_keterangan_sehat' => $request->file('surat_keterangan_sehat') == null ? $cekData['surat_keterangan_sehat'] : $data_surat_keterangan_sehat,
                'sk_cpns_pns' => $request->file('sk_cpns_pns') == null ? $cekData['sk_cpns_pns'] : $data_sk_cpns_pns,
                'sk_jabatan_terakhir' => $request->file('sk_jabatan_terakhir') == null ? $cekData['sk_jabatan_terakhir'] : $data_sk_jabatan_terakhir,
                'sk_lulus' => $request->file('sk_lulus') == null ? $cekData['sk_lulus'] : $data_sk_lulus,
                'jam_pem_belajar' => $request->file('jam_pem_belajar') == null ? $cekData['jam_pem_belajar'] : $data_jam_pem_belajar,
                'rek_per_studi' => $request->file('rek_per_studi') == null ? $cekData['rek_per_studi'] : $data_rek_per_studi,
                'surat_set_per_pen_studi' => $request->file('surat_set_per_pen_studi') == null ? $cekData['surat_set_per_pen_studi'] : $data_surat_set_per_pen_studi,
                'updated_at' => now()
            ]);
        }else{
            berkas_pemohon::create([
                'id_pemohon' => request('id_pemohon'),
                'surat_alasan_perpanjangan' => $request->file('surat_alasan_perpanjangan') == null ? null : $data_surat_alasan_perpanjangan,
                'surat_keterangan_sehat' => $request->file('surat_keterangan_sehat') == null ? null : $data_surat_keterangan_sehat,
                'sk_cpns_pns' => $request->file('sk_cpns_pns') == null ? null : $data_sk_cpns_pns,
                'sk_jabatan_terakhir' => $request->file('sk_jabatan_terakhir') == null ? null : $data_sk_jabatan_terakhir,
                'sk_lulus' => $request->file('sk_lulus') == null ? null : $data_sk_lulus,
                'jam_pem_belajar' => $request->file('jam_pem_belajar') == null ? null : $data_jam_pem_belajar,
                'rek_per_studi' => $request->file('rek_per_studi') == null ? null : $data_rek_per_studi,
                'surat_set_per_pen_studi' => $request->file('surat_set_per_pen_studi') == null ? null : $data_surat_set_per_pen_studi,
                'created_at' => now(),
            ]);
        }

        return redirect('/InputBerkas/index')->with('message', 'Berkas berhasil diupload!');
    }

    public function view_input_berkas($id)
    {

        $berkas_pemohon_view = berkas_pemohon::where('id_pemohon', $id)->get();
 
        return view('pemohon.uploadBerkas.view', compact('berkas_pemohon_view'));
 
    }
}
