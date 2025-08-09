<?php



use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            [
                'RoleID' => 1,
                'RoleName' => 'Super Admin',
                'RoleDescription' => 'Administrator with full system access'
            ],
            [
                'RoleID' => 2,
                'RoleName' => 'Guru Matapelajaran',
                'RoleDescription' => 'Subject teacher with attendance recording rights'
            ],
            [
                'RoleID' => 3,
                'RoleName' => 'Walikelas',
                'RoleDescription' => 'Class teacher with student management rights'
            ],
            [
                'RoleID' => 4,
                'RoleName' => 'Kesiswaan',
                'RoleDescription' => 'Student affairs officer with attendance management rights'
            ],
            [
                'RoleID' => 5,
                'RoleName' => 'Kepala Sekolah',
                'RoleDescription' => 'Principal with read-only access to reports'
            ]
        ];

        DB::table('role')->insert($roles);
    }
}
