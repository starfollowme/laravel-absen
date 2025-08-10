<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        $guruData = [
            [
                'nip' => '197812312022011001',
                'nama' => 'Budi Santoso',
                'email' => 'budi@guru.com',
                'no_telp' => '081234567890',
                'alamat' => 'Jl. Pendidikan No. 1',
            ],
            [
                'nip' => '198504152022011002',
                'nama' => 'Siti Aminah',
                'email' => 'siti@guru.com',
                'no_telp' => '081234567891',
                'alamat' => 'Jl. Pendidikan No. 2',
            ],
        ];

        foreach ($guruData as $guru) {
            DB::table('guru')->updateOrInsert(
                ['nip' => $guru['nip']], // Cek berdasarkan nip unik
                array_merge($guru, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}
