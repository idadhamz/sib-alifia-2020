<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class data_diri_pemohon extends Model
{
    protected $table = 'data_pemohon';
    protected $primaryKey = 'id';
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
