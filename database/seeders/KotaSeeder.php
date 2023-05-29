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
            'kode_kota' => 'BDG',
            'kode_negara' => 'ID',
            'nama_kota' => 'Bandung'
        ]);

        Kota::create([
            'kode_kota' => 'BGR',
            'kode_negara' => 'ID',
            'nama_kota' => 'Bogor'
        ]);

        Kota::create([
            'kode_kota' => 'SUB',
            'kode_negara' => 'ID',
            'nama_kota' => 'Surabaya'
        ]);

        Kota::create([
            'kode_kota' => 'JKT',
            'kode_negara' => 'ID',
            'nama_kota' => 'Jakarta'
        ]);

        Kota::create([
            'kode_kota' => 'GRS',
            'kode_negara' => 'ID',
            'nama_kota' => 'Gresik'
        ]);

        Kota::create([
            'kode_kota' => 'MJK',
            'kode_negara' => 'ID',
            'nama_kota' => 'Mojokerto'
        ]);
    }
}
