<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function(Blueprint $table){
            $table->increments('id');
            $table->string('sertifikat');
            $table->string('no_sertifikat');
            $table->string('status');
            $table->string('no_induk');
            $table->string('nama');
            $table->string('kelamin');
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir');
            $table->string('asal_sklh');
            $table->string('program_keahlian');
            $table->date('tgl_masuk');
            $table->date('tgl_selesai');
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
        Schema::dropIfExits('siswa');
    }
}
