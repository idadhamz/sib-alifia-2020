<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JurnalUmum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akun_jurnal_umum', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('kode_jurnal', 5);
            $table->string('id_transaksi', 5);
            $table->integer('no_akun');
            $table->date('tgl_jurnal');
            $table->integer('debit');
            $table->integer('kredit');
            $table->timestamps();
        });

        Schema::create('jurnal_umum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_jurnal', 5);
            $table->date('tanggal_pembuatan');
            $table->integer('no_jurnal_umum');
            $table->string('nm_jurnal_umum', 50);
            $table->integer('nilai');
            $table->timestamps();
        });

        Schema::create('akun_jurnal_penyesuaian', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('kode_jurnal_penyesuaian', 5);
            $table->string('id_transaksi', 5);
            $table->integer('no_akun');
            $table->date('tgl_jurnal');
            $table->integer('debit');
            $table->integer('kredit');
            $table->timestamps();
        });

        Schema::create('jurnal_penyesuaian', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_jurnal_penyesuaian', 5);
            $table->date('tanggal_pembuatan');
            $table->integer('no_jurnal_penyesuaian');
            $table->string('nm_jurnal_penyesuaian', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurnal_umum');
    }
}
