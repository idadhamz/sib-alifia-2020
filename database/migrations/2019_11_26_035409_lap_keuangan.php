<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LapKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lap_keuangan', function (Blueprint $table) {
            $table->string('id_lap', 5)->primary();
            $table->string('id_bb', 5);
            $table->string('id_nssp', 5);
            $table->integer('no_akun');
            $table->integer('jumlah_labarugi');
            $table->integer('jumlah_perubahanmodal');
            $table->integer('jumlah_neraca');
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
        Schema::dropIfExists('lap_keuangan');
    }
}
