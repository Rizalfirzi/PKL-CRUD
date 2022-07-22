<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class JurusanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['kode_mata_pelajaran' => '123', 'nama_mata_pelajaran' => 'Matematika', 'semester' => '2', 'jurusan' => 'RPL'],
        ];

        DB::table('jurusan')->insert($sampel);
    }
}
