<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unit = [
            [
                'id_unit' => 'U001',
                'nama_unit' => 'Pengadaan Jasa'
            ],
            [
                'id_unit'=> 'U002',
                'nama_unit' => 'PPBJ'
            ],
            [
                'id_unit' => 'U003',
                'nama_unit' => 'Keuangan dan Sekretariat'
            ],
            [
                'id_unit' => 'U004',
                'nama_unit' => 'Hukum'
            ]
            ];
    }
}
