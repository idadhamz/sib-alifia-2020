<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class gol_akun extends Model
{
    protected $table = 'gol_akun';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'kode_golongan',
        'nm_golongan',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'kode_golongan' => 'required|string|between:0,5',
        'nm_golongan' => 'required|string|between:0,100',
    ];
}
