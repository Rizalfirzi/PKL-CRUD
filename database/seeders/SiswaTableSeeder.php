<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['nis' => '1001', 'nama_siswa' => 'Yohana', 'alamat_siswa' => 'Bandung', 'tanggal_lahir' => '2004-08-13'],
        ];

        DB::table('Siswa')->insert($sampel);
    }
}
