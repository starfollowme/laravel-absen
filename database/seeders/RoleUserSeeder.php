<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User; // Pastikan model User ada dan benar

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        // Mapping antara NIP dan ID Role
        $mappings = [
            ['nip' => '196501011990031001', 'role_id' => 1], // Super Admin
            ['nip' => '197203051995122001', 'role_id' => 2], // Guru A sebagai Guru Matapelajaran
            ['nip' => '198712152010122003', 'role_id' => 3], // Guru B sebagai Walikelas
            ['nip' => '198712152010122003', 'role_id' => 2], // Guru B juga sebagai Guru Matapelajaran
        ];

        foreach ($mappings as $map) {
            // Cari user berdasarkan NIP untuk mendapatkan ID-nya
            $user = User::where('nip', $map['nip'])->first();

            if ($user) {
                // Gunakan updateOrInsert untuk mencegah duplikasi relasi
                DB::table('role_user')->updateOrInsert(
                    [
                        'user_id' => $user->id,
                        'role_id' => $map['role_id']
                    ],
                    [
                        'created_at' => now(),
                        'updated_at' => now()
                    ]
                );
            }
        }
    }
}