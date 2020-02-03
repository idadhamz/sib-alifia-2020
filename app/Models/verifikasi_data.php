<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class verifikasi_data extends Model
{
    use SoftDeletes;
    
    protected $table = 'verifikasi_data';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $fillable = [ 
        'id_berkas',
    	'id_user',
        'id_status',
        'keterangan',
    ];
}
