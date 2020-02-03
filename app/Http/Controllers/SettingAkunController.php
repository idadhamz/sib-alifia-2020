<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

use App\User;

use Auth;

class SettingAkunController extends Controller
{

    public function index_akun()
    {

        // get data
        $data_akun = User::where('kd_user', Auth::user()->kd_user)->get();
 
        // mengirim data jabatan ke view index
        // return view('pemohon.dataJabatan.index',['jabatan' => $DataJabatan]);
        return view('setting_akun.index', compact('data_akun'));
 
    }

}
