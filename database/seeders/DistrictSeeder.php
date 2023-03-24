<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //District untuk bandung
        District::create(['name' => 'Cibeunying Kidul', 'city_id' => 1]);
        District::create(['name' => 'Cibeunying Kaler', 'city_id' => 1]);
        District::create(['name' => 'Cibiru', 'city_id' => 1]);

        //District untuk surabaya
        District::create(['name' => 'Bubutan', 'city_id' => 2]);
        District::create(['name' => 'Tandes', 'city_id' => 2]);
        District::create(['name' => 'Tegalsari', 'city_id' => 2]);

        //District untuk malang
        District::create(['name' => 'Klojen', 'city_id' => 3]);
        District::create(['name' => 'Lowokwaru', 'city_id' => 3]);
        District::create(['name' => 'Sukun', 'city_id' => 3]);
    }
}
