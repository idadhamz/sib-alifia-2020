<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class petugas extends Model
{
    use SoftDeletes;
    
    protected $table = 'petugas';
    protected $primaryKey = 'id_petugas';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $fillable = [ 
    	'id_user',
    	'nip',
    	'nama',
    	'jk',
    	'no_telp',
    	'jabatan',
    ];

    protected $dates = ['created_at', 'updated_at'];
}
