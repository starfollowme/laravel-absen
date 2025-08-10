<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        $kelas = [
            ['KelasID' => 1, 'NamaKelas' => 'X RPL 1',   'Tingkat' => 'X',   'Jurusan' => 'RPL', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 2, 'NamaKelas' => 'X RPL 2',   'Tingkat' => 'X',   'Jurusan' => 'RPL', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 3, 'NamaKelas' => 'XI RPL 1',  'Tingkat' => 'XI',  'Jurusan' => 'RPL', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 4, 'NamaKelas' => 'XI RPL 2',  'Tingkat' => 'XI',  'Jurusan' => 'RPL', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 5, 'NamaKelas' => 'XII RPL 1', 'Tingkat' => 'XII', 'Jurusan' => 'RPL', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 6, 'NamaKelas' => 'XII RPL 2', 'Tingkat' => 'XII', 'Jurusan' => 'RPL', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 7, 'NamaKelas' => 'X TKJ 1',   'Tingkat' => 'X',   'Jurusan' => 'TKJ', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 8, 'NamaKelas' => 'X TKJ 2',   'Tingkat' => 'X',   'Jurusan' => 'TKJ', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 9, 'NamaKelas' => 'XI TKJ 1',  'Tingkat' => 'XI',  'Jurusan' => 'TKJ', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 10,'NamaKelas' => 'XI TKJ 2',  'Tingkat' => 'XI',  'Jurusan' => 'TKJ', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 11,'NamaKelas' => 'XII TKJ 1', 'Tingkat' => 'XII', 'Jurusan' => 'TKJ', 'created_at' => $now, 'updated_at' => $now],
            ['KelasID' => 12,'NamaKelas' => 'XII TKJ 2', 'Tingkat' => 'XII', 'Jurusan' => 'TKJ', 'created_at' => $now, 'updated_at' => $now],
        ];

        DB::table('kelas')->upsert(
            $kelas,
            ['KelasID'], // gunakan KelasID sebagai key unik
            ['NamaKelas', 'Tingkat', 'Jurusan', 'updated_at'] // kolom yang diupdate jika sudah ada
        );
    }
}
