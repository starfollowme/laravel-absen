<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['RoleName' => 'Super Admin', 'RoleDescription' => 'Administrator with full system access'],
            ['RoleName' => 'Guru Matapelajaran', 'RoleDescription' => 'Subject teacher with attendance rights'],
            ['RoleName' => 'Walikelas', 'RoleDescription' => 'Class teacher with student management rights'],
            ['RoleName' => 'Kesiswaan', 'RoleDescription' => 'Student affairs officer'],
            ['RoleName' => 'Kepala Sekolah', 'RoleDescription' => 'Principal with report viewing access']
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['RoleName' => $role['RoleName']],
                ['RoleDescription' => $role['RoleDescription']]
            );
        }
    }
}
