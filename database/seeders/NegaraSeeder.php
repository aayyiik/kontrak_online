<?php

namespace Database\Seeders;

use App\Models\Negara;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Negara::create([
            'kode_negara' => 'AD',
            'nama_negara' => 'Andorran'
        ]);

        Negara::create([
            'kode_negara' => 'AE',
            'nama_negara' => 'Utd,Arab Emir'
        ]);

        Negara::create([
            'kode_negara' => 'AF',
            'nama_negara' => 'Afganistan'
        ]);

        Negara::create([
            'kode_negara' => 'AG',
            'nama_negara' => 'Antigua/Barbuda'
        ]);

        Negara::create([
            'kode_negara' => 'AI',
            'nama_negara' => 'Anguilla'
        ]);

        Negara::create([
            'kode_negara' => 'AL',
            'nama_negara' => 'Albania'
        ]);

         Negara::create([
            'kode_negara' => 'AM',
            'nama_negara' => 'Armenia'
        ]);

        Negara::create([
            'kode_negara' => 'AO',
            'nama_negara' => 'Angola'
        ]);

        Negara::create([
            'kode_negara' => 'AQ',
            'nama_negara' => 'Antartica'
        ]);

        Negara::create([
            'kode_negara' => 'AR',
            'nama_negara' => 'Argentina'
        ]);

        Negara::create([
            'kode_negara' => 'AS',
            'nama_negara' => 'Samoa America'
        ]);

        Negara::create([
            'kode_negara' => 'AT',
            'nama_negara' => 'Austria'
        ]);

        Negara::create([
            'kode_negara' => 'AU',
            'nama_negara' => 'Australia'
        ]);

        Negara::create([
            'kode_negara' => 'AW',
            'nama_negara' => 'Aruba'
        ]);

        Negara::create([
            'kode_negara' => 'AZ',
            'nama_negara' => 'Azerbaijan'
        ]);

        Negara::create([
            'kode_negara' => 'ID',
            'nama_negara' => 'Indonesia'
        ]);
    }
}
