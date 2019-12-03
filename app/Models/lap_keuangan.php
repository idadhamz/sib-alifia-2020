<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class lap_keuangan extends Model
{
    protected $table = 'lap_keuangan';
    protected $primaryKey = 'id_lap';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_bb',
        'id_nssp',
        'no_akun',
        'jumlah_labarugi',
        'jumlah_perubahanmodal',
        'jumlah_neraca',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_bb' => 'required|string|between:0,5',
        'id_nssp' => 'required|string|between:0,5',
        'no_akun' => 'required|integer',
        'jumlah_labarugi' => 'required|integer',
        'jumlah_perubahanmodal' => 'required|integer',
        'jumlah_neraca' => 'required|integer',
    ];
}
