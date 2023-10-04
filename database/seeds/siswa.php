<?php

use Illuminate\Database\Seeder;
use Faker\factory as Faker;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
        	'no_induk' => '1111',
        	'nama' => 'Budi',
        	'kelamin' => 'Laki-laki',
        	'tgl_lahir' => '1998-09-09',
        	'tmpt_lahir' => 'Samarinda',
        	'asal_sklh' => 'SMK Negeri 1 Samarinda',
        	'tgl_masuk' => '2019-01-21',
        	'tgl_selesai' => '2019-03-21',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);

        // $faker = Faker::create('id_ID');
 
        // for($i = 1; $i <= 20; $i++){
 
              
        //     DB::table('pegawai')->insert([
        //         'no_induk' => $faker->randomNumber,
        //         'nama' => $faker->name,
        //         'kelamin' => $faker->gender,
        //         'tgl_lahir' => $faker->dateTimeThisCentury,
        //         'tmpt_lahir' => $faker->city,
        //         'asal_sklh' => $faker->company,
        //         'tgl_masuk' => $faker->dateTimeThisCentury,
        //         'tgl_selesai' => $faker->dateTimeThisCentury,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // ]);
    }
}
