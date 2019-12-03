<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class akun extends Model
{
    protected $table = 'akun';
    protected $primaryKey = 'no_akun';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'nm_akun',
        'saldo_normal',
        'gol_akun',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'nm_akun' => 'required|string|between:0,100',
        'saldo_normal' => 'required|integer',
        'gol_akun' => 'required|string|between:0,10',
    ];
}
