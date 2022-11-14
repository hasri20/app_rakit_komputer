<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PowerSupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/raw/psu.json');

        $json_data = json_decode($json, true);

        foreach ($json_data as $value) {
            DB::table('power_supplies')->insert([
                'name'              => $value['name'],
                'rating'            => $value['rating'],
                'price'             => $value['price_usd'],
                'form_factor'       => $value['form_factor'],
                "efficiency_rating" => $value['efficiency_rating'],
                "wattage"           => $value['wattage'],
                "modular"           => $value['modular'],
            ]);
        }
    }
}