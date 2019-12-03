<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class buku_besar extends Model
{
    protected $table = 'buku_besar';
    protected $primaryKey = 'id_bb';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_jurnal',
        'no_akun',
        'total_bb',
        'tgl_posting',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_jurnal' => 'required|string|between:0,5',
        'no_akun' => 'required|integer',
        'total_bb' => 'required|integer',
        'tgl_posting' => 'required|date',
    ];
}
