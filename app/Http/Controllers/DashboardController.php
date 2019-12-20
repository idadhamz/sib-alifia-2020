<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\akun;

class dashboardController extends Controller
{
 
    public function index()
    {

    	$DataAkun = akun::orderBy("created_at", "asc")->get();
        return view('dashboard.index', compact('DataAkun'));
 
    }
}
