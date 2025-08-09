<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TenagaPendidikRoleMappingSeeder extends Seeder
{
    public function run(): void
    {
        $mappings = [
            // Super Admin
            ['NIP' => '196501011990031001', 'RoleID' => 1],

            // Guru Matapelajaran
            ['NIP' => '197203051995122001', 'RoleID' => 2],
            ['NIP' => '198005101998032002', 'RoleID' => 2],
            ['NIP' => '199105201015032007', 'RoleID' => 2],
            ['NIP' => '198903141998122008', 'RoleID' => 2],
            ['NIP' => '199407252018032009', 'RoleID' => 2],

            // Walikelas (juga bisa jadi guru)
            ['NIP' => '198712152010122003', 'RoleID' => 3],
            ['NIP' => '198712152010122003', 'RoleID' => 2], // Dual role
            ['NIP' => '199002201012122004', 'RoleID' => 3],
            ['NIP' => '199002201012122004', 'RoleID' => 2], // Dual role

            // Kesiswaan
            ['NIP' => '198508181998032005', 'RoleID' => 4],

            // Kepala Sekolah
            ['NIP' => '196808121992031006', 'RoleID' => 5]
        ];

        DB::table('tenaga_pendidik_role_mapping')->insert($mappings);
    }
}