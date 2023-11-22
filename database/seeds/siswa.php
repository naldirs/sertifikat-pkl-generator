<?php

use Illuminate\Database\Seeder;
// use Faker\factory as Faker;

class siswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = Faker::create('id_ID');
        // $gender = $faker->randomElement(['Laki-laki', 'Perempuan']);

        DB::table('siswa')->insert(
            // Siswa PKL/PKI
            [
                'id' => 1,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '001',
                'status' => 'Siswa',
                'no_induk' => '6563515902060717',
                'nama' => 'Reza Prayoga',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2002-02-02',
                'tmpt_lahir' =>  'Jakarta Pusat',
                'asal_sklh' => 'SMK Negeri 1 Samarinda',
                'program_keahlian' => 'Multimedia',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        );

        DB::table('siswa')->insert(
            [
                'id' => 2,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '002',
                'status' => 'Siswa',
                'no_induk' => '1888915405197148',
                'nama' => 'Juli Pertiwi',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2005-08-30',
                'tmpt_lahir' =>  'Lampung',
                'asal_sklh' => 'SMK Negeri 3 Samarinda',
                'program_keahlian' => 'Akuntansi',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 3,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '003',
                'status' => 'Siswa',
                'no_induk' => '3474332704054160',
                'nama' => 'Mulyono Marbun',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2001-03-08',
                'tmpt_lahir' =>  'Samarinda',
                'asal_sklh' => 'SMK Negeri 4 Samarinda',
                'program_keahlian' => 'Pengarsipan',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 4,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '004',
                'status' => 'Siswa',
                'no_induk' => '4992390312934267',
                'nama' => 'Himawan Dongoran',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2001-11-18',
                'tmpt_lahir' =>  'Samarinda',
                'asal_sklh' => 'SMK Negeri 4 Samarinda',
                'program_keahlian' => 'Perhotelan',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 5,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '005',
                'status' => 'Siswa',
                'no_induk' => '0267472109064254',
                'nama' => 'Teguh Sirait',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2002-11-18',
                'tmpt_lahir' =>  'Samarinda',
                'asal_sklh' => 'SMK Negeri 1 Samarinda',
                'program_keahlian' => 'TKJ',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 6,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '006',
                'status' => 'Siswa',
                'no_induk' => '1620754606233516',
                'nama' => 'Usyi Yulianti ',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2001-08-07',
                'tmpt_lahir' =>  'Samarinda',
                'asal_sklh' => 'SMK Negeri 1 Samarinda',
                'program_keahlian' => 'TKJ',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 7,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '007',
                'status' => 'Siswa',
                'no_induk' => '3397850308142392',
                'nama' => 'Ira Namaga',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2001-03-20',
                'tmpt_lahir' =>  'Samarinda',
                'asal_sklh' => 'SMK Negeri 2 Samarinda',
                'program_keahlian' => 'Multimedia',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 8,
                'sertifikat' => 'Praktek Kerja Industri',
                'no_sertifikat' => '008',
                'status' => 'Siswa',
                'no_induk' => '8406405402153714',
                'nama' => 'Winda Yuniar',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2002-04-05',
                'tmpt_lahir' =>  'Samarinda',
                'asal_sklh' => 'SMK Negeri 9 Samarinda',
                'program_keahlian' => 'Teknik Mesin',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 9,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '009',
                'status' => 'Siswa',
                'no_induk' => '6094731506988933',
                'nama' => 'Tugiman Salahudin',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2004-02-05',
                'tmpt_lahir' =>  'Samarinda',
                'asal_sklh' => 'SMK Negeri 1 Samarinda',
                'program_keahlian' => 'Multimedia',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('siswa')->insert(
            [
                'id' => 10,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '010',
                'status' => 'Siswa',
                'no_induk' => '0860585411144464',
                'nama' => 'Wadi Salahudin',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2001-01-20',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'SMK Negeri 1 Samarinda',
                'program_keahlian' => 'TKJ',
                'tgl_masuk' => '2019-01-20',
                'tgl_selesai' => '2019-06-20',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // mahasiswa
        DB::table('siswa')->insert(
            [
                'id' => 11,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '011',
                'status' => 'Mahasiswa',
                'no_induk' => '5459994811991113',
                'nama' => 'Marsudi Prabowo',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2001-09-20',
                'tmpt_lahir' =>  'Panajam Paser Utara',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Ekonomi Syariah',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 12,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '012',
                'status' => 'Mahasiswa',
                'no_induk' => '6785442307012656',
                'nama' => 'Samiah Kuswandari',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2001-02-14',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Teknik Informatika',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 13,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '013',
                'status' => 'Mahasiswa',
                'no_induk' => '6529956704020790',
                'nama' => 'Pia Padmasari',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2001-05-24',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Teknik Informatika',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 14,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '014',
                'status' => 'Mahasiswa',
                'no_induk' => '0914942610975487',
                'nama' => 'Maida Hariyah',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2001-11-11',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Sistem Informasi',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 15,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '015',
                'status' => 'Mahasiswa',
                'no_induk' => '4620841908162113',
                'nama' => 'Prabawa Lazuardi',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2001-12-01',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Sistem Informasi',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 16,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '016',
                'status' => 'Mahasiswa',
                'no_induk' => '4368850806973868',
                'nama' => 'Carla Wastuti',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2002-01-20',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Ilmu Politik',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 17,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '017',
                'status' => 'Mahasiswa',
                'no_induk' => '6726974712019861',
                'nama' => 'Yessi Safitri',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2000-10-02',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Hukum',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 18,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '018',
                'status' => 'Mahasiswa',
                'no_induk' => '9299372606076164',
                'nama' => 'Humaira Zulaika',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2001-11-20',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Hukum',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 19,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '019',
                'status' => 'Mahasiswa',
                'no_induk' => '6663441804126485',
                'nama' => 'Karya Anggriawan',
                'kelamin' => 'Laki-laki',
                'tgl_lahir' => '2001-07-14',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Hukum',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
        DB::table('siswa')->insert(
            [
                'id' => 20,
                'sertifikat' => 'Praktek Kerja Lapangan',
                'no_sertifikat' => '020',
                'status' => 'Mahasiswa',
                'no_induk' => '5461065303188428',
                'nama' => 'Mila Hassanah',
                'kelamin' => 'Perempuan',
                'tgl_lahir' => '2001-08-12',
                'tmpt_lahir' =>  'Balikpapan',
                'asal_sklh' => 'Universitas Mulawarman',
                'program_keahlian' => 'Pertanian',
                'tgl_masuk' => '2019-05-01',
                'tgl_selesai' => '2019-09-01',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

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
