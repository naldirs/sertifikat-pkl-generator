<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Asn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asn', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama');
            $table->string('nip');
            $table->string('jabatan');
            $table->string('ket1')->nullable();
            $table->string('ket2')->nullable();
            $table->string('sebagai')->nullable();
            $table->string('page');
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
        Schema::dropIfExists('asn');
    }
}
