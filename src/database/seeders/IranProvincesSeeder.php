<?php

namespace Ab01faz101\IranProvinces\Database\Seeders;

use Ab01faz101\IranProvinces\Models\City;     
use Ab01faz101\IranProvinces\Models\Province; 
use Illuminate\Database\Seeder;

class IranProvincesSeeder extends Seeder
{
    public function run(): void
    {
        $json = file_get_contents(__DIR__ . '/../datasets/IranProvinces.json');
        $provinceCity = json_decode($json, true);

        foreach ($provinceCity as $item) {
            $province = Province::firstOrCreate([
                'name' => $item['provinceName'],
            ]);

            City::firstOrCreate([
                'province_id' => $province->id,
                'name' => $item['cityName'],
            ]);
        }
    }
}