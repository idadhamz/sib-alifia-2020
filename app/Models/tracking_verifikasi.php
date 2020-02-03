<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tracking_verifikasi extends Model
{
    protected $table = 'tracking_verifikasi';
    protected $primaryKey = 'id';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [ 
        'id_berkas',
    	'id_user',
        'id_status',
    ];
}
