<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AsetSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        $jenisAset = ['Laptop', 'Tablet', 'PC', 'Hardisk', 'Lainnya'];
        
        foreach (range(1, 50) as $index) {
            $jenis = $faker->randomElement($jenisAset);
            $merek = $this->generateMerek($jenis, $faker);
            $tipe = $this->generateTipe($jenis, $faker);
            
            DB::table('aset')->insert([
                'nama' => $this->generateNamaAset($merek, $tipe),
                'kategori' => $faker->randomElement(['aset-ti', 'aset-non-ti']),
                'jenis' => $jenis,
                'merek' => $merek,
                'tipe' => $tipe,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    private function generateNamaAset($merek, $tipe)
    {
        return $merek . ' ' . $tipe;
    }

    private function generateMerek($jenis, $faker)
    {
        $merek = [
            'Laptop' => ['Asus', 'Dell', 'Lenovo', 'Acer', 'HP', 'Apple'],
            'Tablet' => ['Samsung', 'iPad', 'Xiaomi', 'Huawei', 'Lenovo'],
            'PC' => ['Dell', 'HP', 'Zyrex', 'Axioo', 'Custom'],
            'Hardisk' => ['Seagate', 'WD', 'Toshiba', 'Samsung', 'SanDisk'],
            'Lainnya' => $faker->company
        ];

        return $jenis === 'Lainnya' 
            ? $merek['Lainnya']
            : $faker->randomElement($merek[$jenis]);
    }

    private function generateTipe($jenis, $faker)
    {
        $prefix = [
            'Laptop' => ['Vivobook', 'ThinkPad', 'Inspiron', 'Spectre', 'MacBook'],
            'Tablet' => ['Galaxy Tab', 'Mi Pad', 'MediaPad', 'Yoga Tab', 'Tab'],
            'PC' => ['OptiPlex', 'EliteDesk', 'ProDesk', 'Workstation', 'Mini PC'],
            'Hardisk' => ['Barracuda', 'Blue', 'Black', 'Portable', 'SSD'],
            'Lainnya' => ['Series', 'Edition', 'Pro', 'Lite', 'Max']
        ];

        $kode = $faker->numerify('####');
        $huruf = $faker->randomElement(['A', 'B', 'C', 'U', 'X', 'Z']);

        return $jenis === 'Lainnya'
            ? $faker->word . ' ' . $kode
            : $faker->randomElement($prefix[$jenis]) . ' ' . $huruf . $kode;
    }
}