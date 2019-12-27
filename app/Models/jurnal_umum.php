<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class jurnal_umum extends Model
{
    protected $table = 'jurnal_umum';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'kode_jurnal',
        'tanggal_pembuatan',
        'no_jurnal_umum',
        'nm_jurnal_umum',
        'nilai',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'tanggal_pembuatan' => 'required|date',
        'no_jurnal_umum' => 'required|string|between:0,20',
        'nm_jurnal_umum' => 'required|string|between:0,50',
        'nilai' => 'required|integer'
    ];
}
