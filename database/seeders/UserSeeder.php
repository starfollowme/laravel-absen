<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'nip' => '196501011990031001', // Kolom diubah ke snake_case
                'name' => 'Super Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'no_telp' => '081000000001',
                'alamat' => 'Kantor Pusat',
            ],
            [
                'nip' => '197203051995122001',
                'name' => 'Guru A',
                'email' => 'guru.a@example.com',
                'password' => Hash::make('password'),
                'no_telp' => '081000000002',
                'alamat' => 'Ruang Guru',
            ],
            [
                'nip' => '198712152010122003',
                'name' => 'Guru B (Walikelas)',
                'email' => 'guru.b@example.com',
                'password' => Hash::make('password'),
                'no_telp' => '081000000003',
                'alamat' => 'Ruang Walikelas',
            ],
             [
                'nip' => '197812312022011001',
                'name' => 'Budi Santoso',
                'email' => 'budi@guru.com',
                'password' => Hash::make('password'),
                'no_telp' => '081234567890',
                'alamat' => 'Jl. Pendidikan No. 1',
            ],
            [
                'nip' => '198504152022011002',
                'name' => 'Siti Aminah',
                'email' => 'siti@guru.com',
                'password' => Hash::make('password'),
                'no_telp' => '081234567891',
                'alamat' => 'Jl. Pendidikan No. 2',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['nip' => $user['nip']], // Kunci unik untuk pengecekan
                array_merge($user, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ])
            );
        }
    }
}