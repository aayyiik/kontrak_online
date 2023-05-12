<?php

namespace Database\Seeders;

use App\Models\Status_Approve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status_Approve::create([
            'id_status' => '1',
            'nama_status' => 'Kontrak Masuk'
        ]);
        Status_Approve::create([
            'id_status' => '2',
            'nama_status' => 'Review Hukum'
        ]);
        Status_Approve::create([
            'id_status' => '3',
            'nama_status' => 'Review DKU'
        ]);

        Status_Approve::create([
            'id_status' => '4',
            'nama_status' => 'Review SVP'
        ]);

        Status_Approve::create([
            'id_status' => '5',
            'nama_status' => 'Review VP'
        ]);
        Status_Approve::create([
            'id_status' => '6',
            'nama_status' => 'Review AVP'
        ]);
        Status_Approve::create([
            'id_status' => '7',
            'nama_status' => 'TTD Rekanan'
        ]);
        Status_Approve::create([
            'id_status' => '8',
            'nama_status' => 'Closed'
        ]);
    
    }
}
