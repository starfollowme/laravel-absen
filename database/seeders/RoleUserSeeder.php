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
            ['nip' => '196501011990031001', 'role_id' => 1],
            ['nip' => '197203051995122001', 'role_id' => 2],
            ['nip' => '198712152010122003', 'role_id' => 3],
            ['nip' => '198712152010122003', 'role_id' => 2],
        ];

        foreach ($mappings as $map) {
            $user = User::where('nip', $map['nip'])->first();

            if ($user) {
                DB::table('role_user')->insert([
                    'nip' => $user->nip,
                    'role_id' => $map['role_id'],
                ]);
            }
        }
    }
}
