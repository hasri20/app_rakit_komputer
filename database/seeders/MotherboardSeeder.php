<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotherboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/raw/motherboard.json');

        $json_data = json_decode($json, true);

        foreach ($json_data as $value) {
            DB::table('motherboards')->insert([
                'name'          => $value['name'],
                'rating'        => $value['rating'],
                'price'         => $value['price_usd'],
                'socket'        => $value['socket_/_cpu'],
                "form_factor"   => $value['form_factor'],
                "memory_max"    => $value['memory_max'],
                "memory_slots"  => $value['memory_slots'],
            ]);
        }
    }
}