<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class RoleUserSeeder extends Seeder
{
    public function run(): void
    {
        $mappings = [
            // Super Admin
            ['nip' => '196501011990031001', 'role_id' => 1],

            // Guru A (hanya Guru Matapelajaran)
            ['nip' => '197203051995122001', 'role_id' => 2],

            // Guru B (Walikelas dan juga Guru Matapelajaran)
            ['nip' => '198712152010122003', 'role_id' => 3],
            ['nip' => '198712152010122003', 'role_id' => 2],

            // Budi Santoso (Guru Matapelajaran)
            ['nip' => '197812312022011001', 'role_id' => 2],

            // Siti Aminah (Guru Matapelajaran)
            ['nip' => '198504152022011002', 'role_id' => 2],
        ];

        foreach ($mappings as $map) {
            // Cari user berdasarkan NIP untuk mendapatkan ID-nya
            $user = User::where('nip', $map['nip'])->first();

            if ($user) {
                // PERBAIKAN: Gunakan 'user_id' => $user->id, bukan 'nip'
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
