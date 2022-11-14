<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/raw/cpu.json');

        $json_data = json_decode($json, true);

        foreach ($json_data as $value) {
            DB::table('processors')->insert([
                'name'          => $value['name'],
                'rating'        => $value['rating'],
                'price'         => $value['price_usd'],
                'core_count'    => $value['core_count'],
                "core_clock"    => $value['core_clock'],
                "tdp"           => $value['tdp'],
            ]);
        }
    }
}