<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TenagaPendidikSeeder extends Seeder
{
    public function run(): void
    {
        $tenagaPendidik = [
            [
                'NIP' => '196501011990031001',
                'NamaTenagaPendidik' => 'Dr. Ahmad Suryadi, M.Pd',
                'Password' => Hash::make('admin123')
            ],
            [
                'NIP' => '197203051995122001',
                'NamaTenagaPendidik' => 'Siti Nurhalimah, S.Pd',
                'Password' => Hash::make('guru123')
            ],
            [
                'NIP' => '198005101998032002',
                'NamaTenagaPendidik' => 'Budi Santoso, S.Kom',
                'Password' => Hash::make('guru123')
            ],
            [
                'NIP' => '198712152010122003',
                'NamaTenagaPendidik' => 'Rina Wulandari, S.Pd',
                'Password' => Hash::make('wali123')
            ],
            [
                'NIP' => '199002201012122004',
                'NamaTenagaPendidik' => 'Muhammad Rizki, S.Kom',
                'Password' => Hash::make('wali123')
            ],
            [
                'NIP' => '198508181998032005',
                'NamaTenagaPendidik' => 'Dewi Kartika, S.Pd',
                'Password' => Hash::make('kesiswaan123')
            ],
            [
                'NIP' => '196808121992031006',
                'NamaTenagaPendidik' => 'H. Bambang Wijaya, M.Pd',
                'Password' => Hash::make('kepsek123')
            ],
            [
                'NIP' => '199105201015032007',
                'NamaTenagaPendidik' => 'Indah Permata Sari, S.Kom',
                'Password' => Hash::make('guru123')
            ],
            [
                'NIP' => '198903141998122008',
                'NamaTenagaPendidik' => 'Andi Setiawan, S.Pd',
                'Password' => Hash::make('guru123')
            ],
            [
                'NIP' => '199407252018032009',
                'NamaTenagaPendidik' => 'Fitria Rahayu, S.Kom',
                'Password' => Hash::make('guru123')
            ]
        ];

        DB::table('tenaga_pendidik')->insert($tenagaPendidik);
    }
}