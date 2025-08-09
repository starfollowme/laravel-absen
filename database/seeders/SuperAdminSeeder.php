<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TenagaPendidik;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // --- AKUN SUPER ADMIN ---
        // 1. Mencari role 'Super Admin'
        $superAdminRole = Role::where('RoleName', 'Super Admin')->first();

        // 2. Membuat user TenagaPendidik baru untuk Super Admin
        if ($superAdminRole) {
            $superAdmin = TenagaPendidik::create([
                'NIP' => 'SUPERADMIN01', // Username Super Admin
                'NamaTenagaPendidik' => 'Super Administrator',
                'Password' => Hash::make('password') // Password Super Admin
            ]);

            // 3. Menghubungkan user dengan role 'Super Admin'
            $superAdmin->roles()->attach($superAdminRole->RoleID);
        }


        // --- CONTOH INSERT AKUN GURU ---
        // 1. Mencari role 'Guru Matapelajaran'
        $guruRole = Role::where('RoleName', 'Guru Matapelajaran')->first();

        // 2. Membuat user TenagaPendidik baru untuk Guru
        if ($guruRole) {
            $guruUser = TenagaPendidik::create([
                'NIP' => 'GURU01', // Username Guru
                'NamaTenagaPendidik' => 'Budi Guru',
                'Password' => Hash::make('guru123') // Password Guru
            ]);

            // 3. Menghubungkan user dengan role 'Guru Matapelajaran'
            $guruUser->roles()->attach($guruRole->RoleID);
        }
    }
}
