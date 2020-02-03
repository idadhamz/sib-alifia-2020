<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class berkas_pemohon extends Model
{
    use SoftDeletes;
    
    protected $table = 'berkas_pemohon';
    protected $primaryKey = 'id_berkas';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $fillable = [ 
        'id_pemohon',
    	'surat_alasan_perpanjangan',
        'surat_keterangan_sehat',
        'sk_cpns_pns',
        'sk_jabatan_terakhir',
        'sk_lulus',
        'jam_pem_belajar',
        'rek_per_studi',
        'surat_set_per_pen_studi'
    ];
}
