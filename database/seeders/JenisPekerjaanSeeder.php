<?php

namespace Database\Seeders;

use App\Models\JenisPekerjaan as ModelsJenisPekerjaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J001',
            'jenis_pekerjaan' => 'Jasa Sewa Gudang Nabire & Koya Barat Jayapura'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J002',
            'jenis_pekerjaan' => 'Jasa Angkutan Darat Alih Stok Banjarmasin - Ampah
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J003',
            'jenis_pekerjaan' => 'Jasa TKBM Gudang Jeneponto'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J004',
            'jenis_pekerjaan' => 'Jasa Forwading & PPJK Reaktor Urea'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J005',
            'jenis_pekerjaan' => 'Jasa Angkutan Darat Franco Kalteng & Maluku'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J006',
            'jenis_pekerjaan' => 'Jasa Angkutan Laut Container Rute Gresik - Maumere'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J007',
            'jenis_pekerjaan' => 'Jasa Pengiriman Knife Gate Valve'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J008',
            'jenis_pekerjaan' => 'Jasa JP3 Inbag Lhokseumawe'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J009',
            'jenis_pekerjaan' => 'Jasa Angkutan Laut KLM PTDS NTT'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J010',
            'jenis_pekerjaan' => 'Jasa Angkutan Darat PemindahanMaterial Ex NPK Cluster'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J011',
            'jenis_pekerjaan' => 'Jasa Bongkar Muat & Stapel Gudang GBB'
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J012',
            'jenis_pekerjaan' => 'Jasa Angkutan Laut Container DTDS Singkawang - DC Medan
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J013',
            'jenis_pekerjaan' => 'Jasa Bongkar Muat Copper Slag di TUKS Pelabuhan
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J014',
            'jenis_pekerjaan' => 'Jasa Time Charter Kapal AB VIII
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J015',
            'jenis_pekerjaan' => 'Jasa Sewa Gudang Wajo
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J016',
            'jenis_pekerjaan' => 'Jasa Emergency Angkutan Darat Alih Stok Sulamapa
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J017',
            'jenis_pekerjaan' => 'Jasa Sewa & Pengelolaan Gudang KIG Q1 dan Q2
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J018',
            'jenis_pekerjaan' => 'Jasa TKBM dan Sewa Gudang Bima
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J019',
            'jenis_pekerjaan' => 'Jasa TKBM dan Sewa Gudang Barito Kuala
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J020',
            'jenis_pekerjaan' => 'Jasa Alihstock Pandeglang
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J021',
            'jenis_pekerjaan' => 'Jasa Sewa Gudang dan Stokholder Wil. Kalimantan
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J022',
            'jenis_pekerjaan' => 'Jasa Bongkar Muat Gudang Penyangga Bolmong Utara
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J023',
            'jenis_pekerjaan' => 'Jasa Pengantongan & Stapel Produk Kaptan
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J024',
            'jenis_pekerjaan' => 'Jasa Pengangkutan O2 Liquid
            '
        ]);

        ModelsJenisPekerjaan::create([
            'kode_jepe' => 'J025',
            'jenis_pekerjaan' => 'Jasa Angkutan Darat Pupuk Organik 164 Rute (Retender)
            '
        ]);


    }
}
