<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $kelas = [
            ['NamaKelas' => 'X RPL 1', 'Tingkat' => 'X', 'Jurusan' => 'RPL'],
            ['NamaKelas' => 'X RPL 2', 'Tingkat' => 'X', 'Jurusan' => 'RPL'],
            ['NamaKelas' => 'XI RPL 1', 'Tingkat' => 'XI', 'Jurusan' => 'RPL'],
            ['NamaKelas' => 'XI RPL 2', 'Tingkat' => 'XI', 'Jurusan' => 'RPL'],
            ['NamaKelas' => 'XII RPL 1', 'Tingkat' => 'XII', 'Jurusan' => 'RPL'],
            ['NamaKelas' => 'XII RPL 2', 'Tingkat' => 'XII', 'Jurusan' => 'RPL'],
            ['NamaKelas' => 'X TKJ 1', 'Tingkat' => 'X', 'Jurusan' => 'TKJ'],
            ['NamaKelas' => 'X TKJ 2', 'Tingkat' => 'X', 'Jurusan' => 'TKJ'],
            ['NamaKelas' => 'XI TKJ 1', 'Tingkat' => 'XI', 'Jurusan' => 'TKJ'],
            ['NamaKelas' => 'XI TKJ 2', 'Tingkat' => 'XI', 'Jurusan' => 'TKJ'],
            ['NamaKelas' => 'XII TKJ 1', 'Tingkat' => 'XII', 'Jurusan' => 'TKJ'],
            ['NamaKelas' => 'XII TKJ 2', 'Tingkat' => 'XII', 'Jurusan' => 'TKJ']
        ];

        DB::table('kelas')->insert($kelas);
    }
}