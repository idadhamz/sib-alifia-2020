<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Nssp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nssp', function (Blueprint $table) {
            $table->string('id_nssp', 5)->primary();
            $table->string('id_bb', 5);
            $table->integer('no_akun');
            $table->integer('total_neraca');
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
        Schema::dropIfExists('nssp');
    }
}
