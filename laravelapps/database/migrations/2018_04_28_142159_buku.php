<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Buku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kode_buku')->unsigned();
            $table->string('judul_buku');
            $table->string('namapenerbit_buku');
            $table->string('tahunpenerbit_buku');
            $table->string('halaman_buku');
            $table->string('kategori');
            $table->string('status');
            $table->date('tanggalpinjam_buku');
            $table->date('tanggalkembali_buku');
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
        Schema::dropIfExists('buku');
    }
}
