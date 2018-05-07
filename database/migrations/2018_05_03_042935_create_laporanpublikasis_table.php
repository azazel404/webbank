<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporanpublikasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporanpublikasis', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama_laporanpertama');
          $table->string('laporanpertama');
          $table->string('nama_laporankedua');
          $table->string('laporankedua');
          $table->string('nama_laporanketiga');
          $table->string('laporanketiga');
          $table->string('nama_laporankeempat');
          $table->string('laporankeempat');
          $table->string('tipe_laporan');
          $table->date('tanggal');
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
        Schema::dropIfExists('laporanpublikasis');
    }
}
