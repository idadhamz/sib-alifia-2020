<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\User;

class AdminController extends Controller
{
    // Data User
    public function index_user()
    {

        // get data
        $DataUser = User::orderBy("id_role", "asc")->get();
 
    	// mengirim data jabatan ke view index
    	// return view('admin.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('admin.dataUser.index', compact('DataUser'));
 
    }

    public function create()
    {

        return view('admin.dataUser.create');
 
    }

    public function create_user(Request $request)
    {

        $rules = [
            'username' => 'required',
            'nama_depan' => 'required',
            'nama_belakang' => 'required',
        ];

        $customMessages = [
            'username.required' => 'Username wajib diisi!',
            'nama_depan.required' => 'Nama Depan wajib diisi!',
            'nama_belakang.required' => 'Nama Belakang wajib diisi!',
         ];

        $this->validate($request, $rules, $customMessages);

        $DataUser = new User;
        $DataUser->id_role = request('id_role');
        $DataUser->username = request('username');
        $DataUser->password = bcrypt('123456');
        $DataUser->nama = request('nama_depan')." ".request('nama_belakang');
        $DataUser->remember_token = Str::random(60);
        $DataUser->created_at = now();
        $DataUser->save();

        return redirect('/dataUser')->with('message', 'Data Berhasil diinput!');
    }   

    public function edit_user($id_user)
    {
        $DataUserEdit = User::where('id', $id_user)->get();
        // passing data jabatan yang didapat ke view edit.blade.php
        return view('admin.dataUser.edit', compact('DataUserEdit'));
    }

    public function update_user(Request $request)
    {

        $rules = [
            'username' => 'required',
            'nama' => 'required',
        ];

        $customMessages = [
            'username.required' => 'Username wajib diisi!',
            'nama.required' => 'Nama wajib diisi!',
         ];

        $this->validate($request, $rules, $customMessages);

        User::where('id', $request->id_user)->update([
            'id_role' => $request->id_role,
            'username' => $request->username,
            'password' => bcrypt('123456'),
            'nama' => $request->nama,
            'updated_at' => now()
        ]);

        return redirect('/dataUser')->with('message_edit', 'Data Berhasil diubah!');
    }

    public function delete_user($id_user)
    {
        // menghapus data jabatan berdasarkan id yang dipilih
        User::where('id',$id_user)->delete();
            
        // alihkan halaman ke halaman jabatan
        return redirect('/dataUser')->with('message_delete', 'Data Berhasil dihapus!');
    }
}
