<?php

use Illuminate\Database\Seeder;

class nilai_umum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nilai_keahlian')->insert([
            'siswa_id' => '',
            'nama_komponen' => '',
            'nilai' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
