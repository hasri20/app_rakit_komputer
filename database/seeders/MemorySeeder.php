<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/raw/ram.json');

        $json_data = json_decode($json, true);

        foreach ($json_data as $value) {
            DB::table('memories')->insert([
                'name'      => $value['name'],
                'rating'    => $value['rating'],
                'price'     => $value['price_usd'],
                'speed'     => $value['speed'],
                "modules"   => $value['modules'],
            ]);
        }
    }
}