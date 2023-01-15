<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\nilai_keahlian;
use App\nilai_umum_dan_kompeteni;

class siswa extends Model
{
    protected $table = 'siswa';

    public function nilai_keahlian()
    {
    	return $this->hasMany('App\nilai_keahlian');
    }

    public function nilai_umum()
    {
    	return $this->hasOne('App\nilai_umum');
    }
}
