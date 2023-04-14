<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'nik' => 'M001066',
                'name' => ' Ari Lathifatul Chusna',
                'status' => '1',
                'id_role' => '1',
                'id_unit' => '1',
                'password' => bcrypt('Petrokimia1'),
            ],
            [
                'nik' => '123123',
                'name' => ' Yanik Nopian',
                'status' => '1',
                'id_role' => '2',
                'id_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
            [
                'nik' => '456456',
                'name' => 'Kurnia Sari',
                'status' => '1',
                'id_role' => '2',
                'id_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
            [
                'nik' => '123123',
                'name' => ' Yanik Nopian',
                'status' => '1',
                'id_role' => '2',
                'id_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
            [
                'nik' => '123123',
                'name' => ' Yanik Nopian',
                'status' => '1',
                'id_role' => '2',
                'id_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
            [
                'nik' => '123123',
                'name' => ' Yanik Nopian',
                'status' => '1',
                'id_role' => '2',
                'id_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
            [
                'nik' => '123123',
                'name' => ' Yanik Nopian',
                'status' => '1',
                'id_role' => '2',
                'id_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
            [
                'nik' => '123123',
                'name' => ' Yanik Nopian',
                'status' => '1',
                'id_role' => '2',
                'id_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
        ];
    }
}
