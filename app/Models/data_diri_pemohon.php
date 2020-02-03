<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class data_diri_pemohon extends Model
{
    use SoftDeletes;
    
    protected $table = 'pemohon';
    protected $primaryKey = 'id_pemohon';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $fillable = [ 
    	'nama',
    	'ava',
    	'nip',
    	'jk',
    	'unit_kerja',
    	'tempat_lahir',
    	'tgl_lahir',
    	'alamat',
    	'jabatan',
    	'pangkat',
    	'jenjang_pend',
    	'jurusan',
    	'univ',
    	'tgl_mulai',
    	'tgl_akhir',
    	'beasiswa',
    	'alasan_perp',
    	'jml_wkt_perp'
    ];
}
