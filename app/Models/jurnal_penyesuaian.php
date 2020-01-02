<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rule;


class jurnal_penyesuaian extends Model
{
    protected $table = 'jurnal_penyesuaian';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
        'kode_jurnal_penyesuaian',
        'tanggal_pembuatan',
        'no_jurnal_penyesuaian',
        'nm_jurnal_penyesuaian',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static $rules = [
        'tanggal_pembuatan' => 'required|date',
        'no_jurnal_penyesuaian' => 'required|string|between:0,20',
        'nm_jurnal_penyesuaian' => 'required|string|between:0,50',
    ];
}
