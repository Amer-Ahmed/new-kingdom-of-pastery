<?php

use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Area;

class CitiesAreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first_city = City::create([
            'name_ar' => 'city1',
            'name_en' => 'city1',
        ]);

        $first_city1_area = Area::create([
            'city_id' => $first_city->id,
            'name_ar' => 'area1',
        	'name_en' => 'area1',
        ]);

        $second_city1_area = Area::create([
            'city_id' => $first_city->id,
            'name_ar' => 'area2',
        	'name_en' => 'area2',
        ]);

        $second_city = City::create([
            'name_ar' => 'city2',
            'name_en' => 'city2',
        ]);

        $first_city2_area = Area::create([
            'city_id' => $second_city->id,
            'name_ar' => 'area3',
        	'name_en' => 'area3'
        ]);

        $second_city2_area = Area::create([
            'city_id' => $second_city->id,
            'name_ar' => 'area4',
        	'name_en' => 'area4',
        ]);
    }
}
