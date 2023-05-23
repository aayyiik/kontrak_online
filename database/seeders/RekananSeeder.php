<?php

namespace Database\Seeders;

use App\Models\Rekanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RekananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rekanan::create([
            'kode_role' => 'R004',
            'nama_role' => 'Assistant Vice PresidentR006'
        ]);
    }
}
