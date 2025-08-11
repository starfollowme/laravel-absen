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

        // Kolom disesuaikan ke snake_case dan KelasID dihapus karena auto-increment
        $kelas = [
            ['nama_kelas' => 'X RPL 1',   'tingkat' => 'X',   'jurusan' => 'RPL'],
            ['nama_kelas' => 'X RPL 2',   'tingkat' => 'X',   'jurusan' => 'RPL'],
            ['nama_kelas' => 'XI RPL 1',  'tingkat' => 'XI',  'jurusan' => 'RPL'],
            ['nama_kelas' => 'XI RPL 2',  'tingkat' => 'XI',  'jurusan' => 'RPL'],
            ['nama_kelas' => 'XII RPL 1', 'tingkat' => 'XII', 'jurusan' => 'RPL'],
            ['nama_kelas' => 'XII RPL 2', 'tingkat' => 'XII', 'jurusan' => 'RPL'],
            ['nama_kelas' => 'X TKJ 1',   'tingkat' => 'X',   'jurusan' => 'TKJ'],
            ['nama_kelas' => 'X TKJ 2',   'tingkat' => 'X',   'jurusan' => 'TKJ'],
            ['nama_kelas' => 'XI TKJ 1',  'tingkat' => 'XI',  'jurusan' => 'TKJ'],
            ['nama_kelas' => 'XI TKJ 2',  'tingkat' => 'XI',  'jurusan' => 'TKJ'],
            ['nama_kelas' => 'XII TKJ 1', 'tingkat' => 'XII', 'jurusan' => 'TKJ'],
            ['nama_kelas' => 'XII TKJ 2', 'tingkat' => 'XII', 'jurusan' => 'TKJ'],
        ];

        foreach ($kelas as $k) {
             DB::table('kelas')->updateOrInsert(
                ['nama_kelas' => $k['nama_kelas']], // Kunci unik alami
                [
                    'tingkat' => $k['tingkat'],
                    'jurusan' => $k['jurusan'],
                    'created_at' => $now,
                    'updated_at' => $now
                ]
            );
        }
    }
}