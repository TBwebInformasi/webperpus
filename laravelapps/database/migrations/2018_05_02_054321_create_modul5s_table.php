<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModul5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modul5s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nama_mahasiswa');
            $table->string('Nim_mahasiswa');
            $table->string('Jk_mahasiswa');
            $table->string('Nohp_mahasiswa');
            $table->string('gmbar_mahasiswa');
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
        Schema::dropIfExists('modul5s');
    }
}
