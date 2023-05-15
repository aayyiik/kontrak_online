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
            'id_negara' => 'AD',
            'nama_negara' => 'Andorran'
        ]);

        Negara::create([
            'id_negara' => 'AE',
            'nama_negara' => 'Utd,Arab Emir'
        ]);

        Negara::create([
            'id_negara' => 'AF',
            'nama_negara' => 'Afganistan'
        ]);

        Negara::create([
            'id_negara' => 'AG',
            'nama_negara' => 'Antigua/Barbuda'
        ]);

        Negara::create([
            'id_negara' => 'AI',
            'nama_negara' => 'Anguilla'
        ]);

        Negara::create([
            'id_negara' => 'AL',
            'nama_negara' => 'Albania'
        ]);

         Negara::create([
            'id_negara' => 'AM',
            'nama_negara' => 'Armenia'
        ]);

        Negara::create([
            'id_negara' => 'AO',
            'nama_negara' => 'Angola'
        ]);

        Negara::create([
            'id_negara' => 'AQ',
            'nama_negara' => 'Antartica'
        ]);

        Negara::create([
            'id_negara' => 'AR',
            'nama_negara' => 'Argentina'
        ]);

        Negara::create([
            'id_negara' => 'AS',
            'nama_negara' => 'Samoa America'
        ]);

        Negara::create([
            'id_negara' => 'AT',
            'nama_negara' => 'Austria'
        ]);

        Negara::create([
            'id_negara' => 'AU',
            'nama_negara' => 'Australia'
        ]);

        Negara::create([
            'id_negara' => 'AW',
            'nama_negara' => 'Aruba'
        ]);

        Negara::create([
            'id_negara' => 'AZ',
            'nama_negara' => 'Azerbaijan'
        ]);

        Negara::create([
            'id_negara' => 'ID',
            'nama_negara' => 'Indonesia'
        ]);
    }
}
