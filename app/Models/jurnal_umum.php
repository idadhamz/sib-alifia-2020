<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class jurnal_umum extends Model
{
    protected $table = 'jurnal_umum';
    protected $primaryKey = 'id_jurnal';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
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
