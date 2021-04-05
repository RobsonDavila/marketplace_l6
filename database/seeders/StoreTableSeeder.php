<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $stores = \App\Models\Store::all();

      foreach ($stores as $store)
      {
         $store->products()->save(factory(\App\Models\Product::class)->make());

        // $store->products()
        //       ->factory(\App\Models\Product::class)->make());
        //
        // $store->has(\App\Models\Product::factory(1))
        //       ->create();

              // \App\Models\Store::all()
              //                 ->has(\App\Models\Product::factory(1))
              //                 ->create();

      }
    }
}
