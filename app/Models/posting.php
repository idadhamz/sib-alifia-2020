<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class posting extends Model
{
    protected $table = 'posting';
    protected $primaryKey = 'id_posting';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'id_jurnal',
        'id_bb',
        'tgl_posting',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'id_jurnal' => 'required|string|between:0,5',
        'id_bb' => 'required|string|between:0,5',
        'tgl_posting' => 'required|date',
    ];
}
