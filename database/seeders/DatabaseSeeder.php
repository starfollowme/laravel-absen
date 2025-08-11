<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Urutan pemanggilan disesuaikan untuk memastikan data master (role, user, kelas)
     * ada sebelum data transaksional (relasi role, murid, absensi) dibuat.
     */
    public function run(): void
    {
        $this->call([
            // 1. Data Master
            RoleSeeder::class,
            UserSeeder::class,      // Menggantikan GuruSeeder dan UserSeeder lama
            KelasSeeder::class,

            // 2. Data Relasional dan Turunan
            RoleUserSeeder::class,  // Membutuhkan UserSeeder dan RoleSeeder
            MuridSeeder::class,     // Membutuhkan KelasSeeder
            AbsensiSeeder::class,   // Membutuhkan MuridSeeder dan UserSeeder
        ]);
    }
}