<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class nssp extends Model
{
    protected $table = 'nssp';
    protected $primaryKey = 'id_nssp';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_bb',
        'no_akun',
        'total_neraca',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_bb' => 'required|string|between:0,5',
        'no_akun' => 'required|integer',
        'total_neraca' => 'required|integer',
    ];
}
