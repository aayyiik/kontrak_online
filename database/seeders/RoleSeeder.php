<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id_role' => 'R001',
            'nama_role' => 'Buyer Pengadaan Jasa'
        ]);

        Role::create([
            'id_role' => 'R002',
            'nama_role' => 'Rekanan Vendor'
        ]);

        Role::create([
            'id_role' => 'R003',
            'nama_role' => 'Departemen Hukum'
        ]);

        Role::create([
            'id_role' => 'R004',
            'nama_role' => 'Assistant Vice PresidentR006'
        ]);

        Role::create([
            'id_role' => 'R005',
            'nama_role' => 'Vice President'
        ]);

        Role::create([
            'id_role' => 'R006',
            'nama_role' => 'Senior Vice President'
        ]);

        Role::create([
            'id_role' => 'R007',
            'nama_role' => 'Direktorat Keuangan dan Sekretariat'
        ]);

        Role::create([
            'id_role' => 'R008',
            'nama_role' => 'Super Admin'
        ]);
    }
}
