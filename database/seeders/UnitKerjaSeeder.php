<?php

namespace Database\Seeders;

use App\Models\UnitKerja;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        UnitKerja::create([
            'id_unit' => 'U001',
            'nama_unit' => 'Pengadaan Jasa'
        ]);

        UnitKerja::create([
            'id_unit'=> 'U002',
            'nama_unit' => 'PPBJ'
        ]);

        UnitKerja::create([
            'id_unit' => 'U003',
                'nama_unit' => 'Keuangan dan Sekretariat'
        ]);

        UnitKerja::create([
            'id_unit' => 'U004',
            'nama_unit' => 'Hukum'
        ]);

        UnitKerja::create([
            'id_unit' => 'U005',
                'nama_unit' => 'Teknik'
        ]);
    }
}
