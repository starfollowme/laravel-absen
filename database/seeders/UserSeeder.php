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
                'NIP' => '196501011990031001',
                'name' => 'Super Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'NIP' => '197203051995122001',
                'name' => 'Guru A',
                'email' => 'guru1@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'NIP' => '198712152010122003',
                'name' => 'Guru B',
                'email' => 'guru2@example.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $user) {

            DB::table('users')->updateOrInsert(
                ['NIP' => $user['NIP']],
                $user
            );
        }
    }
}
