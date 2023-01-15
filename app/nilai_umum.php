<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Siswa;

class nilai_umum extends Model
{
    protected $table = 'nilai_umum';

    public function siswa()
    {
    	return $this->belongsTo('App\siswa');	
    }
}
