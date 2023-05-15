<?php

namespace Database\Seeders;

use App\Models\Kota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kota::create([
            'id_kota' => 'BDG',
            'id_negara' => 'ID',
            'nama_kota' => 'Bandung'
        ]);

        Kota::create([
            'id_kota' => 'BGR',
            'id_negara' => 'ID',
            'nama_kota' => 'Bogor'
        ]);

        Kota::create([
            'id_kota' => 'SUB',
            'id_negara' => 'ID',
            'nama_kota' => 'Surabaya'
        ]);

        Kota::create([
            'id_kota' => 'JKT',
            'id_negara' => 'ID',
            'nama_kota' => 'Jakarta'
        ]);

        Kota::create([
            'id_kota' => 'GRS',
            'id_negara' => 'ID',
            'nama_kota' => 'Gresik'
        ]);

        Kota::create([
            'id_kota' => 'MJK',
            'id_negara' => 'ID',
            'nama_kota' => 'Mojokerto'
        ]);
    }
}
