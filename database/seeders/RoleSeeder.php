<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        // Nama kolom disesuaikan dengan migrasi (snake_case)
        $roles = [
            ['role_name' => 'Super Admin', 'role_description' => 'Administrator with full system access'],
            ['role_name' => 'Guru Matapelajaran', 'role_description' => 'Subject teacher with attendance rights'],
            ['role_name' => 'Walikelas', 'role_description' => 'Class teacher with student management rights'],
            ['role_name' => 'Kesiswaan', 'role_description' => 'Student affairs officer'],
            ['role_name' => 'Kepala Sekolah', 'role_description' => 'Principal with report viewing access']
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['role_name' => $role['role_name']],
                ['role_description' => $role['role_description'], 'updated_at' => now()]
            );
        }
    }
}