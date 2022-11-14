<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents(__DIR__ . '/raw/storage.json');

        $json_data = json_decode($json, true);

        foreach ($json_data as $value) {
            DB::table('storages')->insert([
                'name'      => $value['name'],
                'rating'    => $value['rating'],
                'price'     => $value['price_usd'],
                "capacity"  => $value['capacity'],
                "type"      => $value['type'],
                "interface" => $value['interface'],
            ]);
        }
    }
}