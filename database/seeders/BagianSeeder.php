<?php

namespace Database\Seeders;

use App\Models\Bagian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BagianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bagian::create([
            'kode_bagian' => 'BG01',
            'nama_bagian'=> 'Jasa Pabrik'
        ]);

        Bagian::create([
            'kode_bagian' => 'BG02',
            'nama_bagian'=> 'Jasa Non Pabrik'
        ]);

        Bagian::create([
            'kode_bagian' => 'BG03',
            'nama_bagian'=> 'Jasa Distribusi dan Pemasaran'
        ]);

        Bagian::create([
            'kode_bagian' => 'BG04',
            'nama_bagian'=> 'Jasa Investasi EPC'
        ]);
    }
}
