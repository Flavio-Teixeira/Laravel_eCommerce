<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Store;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* $stores = Store::all();

        foreach ($stores as $store) {
            $store->products()->save(factory(\App\Models\Product::class)->make());
        } */

        Store::factory(3)->create();
    }
}
