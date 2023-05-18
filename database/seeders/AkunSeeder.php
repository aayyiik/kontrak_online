<?php

namespace Database\Seeders;

use App\Models\User;
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
            //pic pengadaan jasa
            [
                'nik' => '2325736',
                'nama' => ' Ari Lathifatul Chusna',
                'status' => '1',
                'kode_role' => 'R001',
                'kode_unit' => 'U001',
                'password' => bcrypt('Petrokimia1'),
            ],
            //rekanan
            [
                'nik' => '123123',
                'nama' => ' Yanik Nopian',
                'status' => '1',
                'kode_role' => 'R002',
                'kode_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
            //hukum
            [
                'nik' => '456456',
                'nama' => 'Kurnia Sari',
                'status' => '1',
                'kode_role' => 'R003',
                'kode_unit' => 'U004',
                'password' => bcrypt('Petrokimia1'),
            ],
            //avp
            [
                'nik' => '789789',
                'nama' => 'Nadya Lovita Sari',
                'status' => '1',
                'kode_role' => 'R004',
                'kode_unit' => 'U001',
                'password' => bcrypt('Petrokimia1'),
            ],
            //vp
            [
                'nik' => '321321',
                'nama' => 'Rafi Rizki Setiawan',
                'status' => '1',
                'kode_role' => 'R005',
                'kode_unit' => 'U001',
                'password' => bcrypt('Petrokimia1'),
            ],
            //svp
            [
                'nik' => '654654',
                'nama' => 'Ahmat Badrun Niam',
                'status' => '1',
                'kode_role' => 'R006',
                'kode_unit' => 'U005',
                'password' => bcrypt('Petrokimia1'),
            ],
            //dku
            [
                'nik' => '987987',
                'nama' => 'Budi Soesilo',
                'status' => '1',
                'kode_role' => 'R007',
                'kode_unit' => 'U003',
                'password' => bcrypt('Petrokimia1'),
            ],
            //super admin
            [
                'nik' => '2326738',
                'nama' => 'Chusna Ari',
                'status' => '1',
                'kode_role' => 'R008',
                'kode_unit' => null,
                'password' => bcrypt('Petrokimia1'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
