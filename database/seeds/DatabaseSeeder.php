<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call('asn');
        $this->call('siswa');
        $this->call('users');
        $this->call('nilai_kompetensi');


        $this->command->info('Happy seeding!');
    }
}
