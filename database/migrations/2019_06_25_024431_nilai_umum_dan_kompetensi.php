<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NilaiUmumDanKompetensi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_umum', function(Blueprint $table){
            $table->increments('id');
            $table->integer('siswa_id')->unsigned()->index();
            $table->foreign('siswa_id')->references('id')->on('siswa')->onDelete('Cascade');
            $table->integer('disiplin');
            $table->integer('kerjasama');
            $table->integer('kerajinan');
            $table->integer('tanggung_jawab');
            $table->integer('sikap');
            $table->integer('k3');
            $table->integer('kreatif_kl');
            $table->integer('persiapan');
            $table->integer('analisa');
            $table->integer('perawatan_p');
            $table->integer('metode_lk');
            $table->integer('ketetapan_h');
            
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
        Schema::dropIfExists('nilai_umum');
    }
}
