<?php

use Illuminate\Database\Seeder;

class asn extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('asn')->insert([
        	'nama' => 'Prof. Dr. H. Dwi Nugroho Hidayanto, M.Pd',
        	'nip' => '19600216 198511 1 001',
        	'jabatan' => 'Kepala',
        	'ket1' => 'Badan Pengembangan Sumber Daya Manusia',
        	'ket2' => 'Provinsi Kalimantan Timur',
        	'sebagai' => 'Pembina Utama',
        	'page' => 'depan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('asn')->insert([
        	'nama' => 'Dr. Sudirman, M.Si',
        	'nip' => '19611231 199003 1 061',
        	'jabatan' => 'Sekertaris',
        	'sebagai' => 'Pembina Tk.I',
        	'page' => 'belakang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
