<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\siswa;

class nilai_keahlian extends Model
{
    protected $table = 'nilai_keahlian';

    public function siswa()
    {
    	return $this->belongsTo('App\siswa');	
    }
}
