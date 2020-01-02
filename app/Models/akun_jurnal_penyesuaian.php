<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class akun_jurnal_penyesuaian extends Model
{
    protected $table = 'akun_jurnal_penyesuaian';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'kode_jurnal_penyesuaian',
        'id_transaksi',
        'no_akun',
        'tgl_jurnal',
        'debit',
        'kredit',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_transaksi' => 'required|string|between:0,5',
        'no_akun' => 'required|integer',
        'tgl_jurnal' => 'required|date',
        'debit' => 'required|integer',
        'kredit' => 'required|integer',
    ];
}
