<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                'id_role' => 'R001',
                'nama_role' => 'Buyer Pengadaan Jasa'
            ],
            [
                'id_role' => 'R002',
                'nama_role' => 'Rekanan Vendor'
            ],
            [
                'id_role' => 'R003',
                'nama_role' => 'Departemen Hukum'
            ],
            [
                'id_role' => 'R004',
                'nama_role' => 'AVP'
            ],
            [
                'id_role' => 'R005',
                'nama_role' => 'Vice President'
            ],
            [
                'id_role' => 'R006',
                'nama_role' => 'Senior Vice President'
            ],
            [
                'id_role' => 'R007',
                'nama_role' => 'Direktorat Keuangan dan Sekretariat'
            ],
            [
                'id_role' => 'R008',
                'nama_role' => 'Super Admin'
            ]
            ];
    }
}
