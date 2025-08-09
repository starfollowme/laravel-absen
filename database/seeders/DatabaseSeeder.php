<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// IMPORT SEMUA CLASS SEEDER YANG AKAN DIPANGGIL
use Database\Seeders\RoleSeeder;
use Database\Seeders\KelasSeeder;
use Database\Seeders\TenagaPendidikSeeder;
use Database\Seeders\TenagaPendidikRoleMappingSeeder;
use Database\Seeders\MuridSeeder;
use Database\Seeders\AbsensiSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            KelasSeeder::class,
            TenagaPendidikSeeder::class,
            TenagaPendidikRoleMappingSeeder::class,
            MuridSeeder::class,
            AbsensiSeeder::class,
        ]);
    }
}
