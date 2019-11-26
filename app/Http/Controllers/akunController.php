<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class akunController extends Controller
{
 
    public function index_akun()
    {

        return view('akun.index');
 
    }
}
