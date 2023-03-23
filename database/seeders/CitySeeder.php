<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create(['name' => 'Bandung', 'province_id' => '1']);
        City::create(['name' => 'Surabaya', 'province_id' => '2']);
        City::create(['name' => 'Malang', 'province_id' => '2']);
    }
}
