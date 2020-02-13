<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class validasi_verifikasi extends Model
{
    use SoftDeletes;
    
    protected $table = 'validasi_verifikasi';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $fillable = [ 
        'tgl_surat',
    	'tgl_validasi',
        'id_verifikasi',
        'id_user',
        'keterangan',
        'status',
    ];
}
