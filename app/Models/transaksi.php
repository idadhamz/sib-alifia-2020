<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'nm_transaksi',
        'tgl_transaksi',
        'nominal_transaksi',
        'deskripsi',
        'jenis',
        'id_user',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'nm_transaksi' => 'required|string|between:0,100',
        'tgl_transaksi' => 'required|date',
        'nominal_transaksi' => 'required|integer',
        'deskripsi' => 'required|text',
        'jenis' => 'required|string|between:0,30',
        'id_user' => 'required|integer',
    ];
}
