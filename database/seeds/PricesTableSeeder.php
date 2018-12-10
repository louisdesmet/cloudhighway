<?php

use Illuminate\Database\Seeder;
use App\Price;
use Carbon\Carbon;

class PricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Price::insert(array(
            array('product_id' => 1, 'name' => 'Normal', 'price' => '20', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('product_id' => 1, 'name' => 'Bronze', 'price' => '18', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('product_id' => 1, 'name' => 'Silver', 'price' => '18', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
            array('product_id' => 1, 'name' => 'Gold', 'price' => '18', 'created_at' => Carbon::now()->format('Y-m-d H:i:s'), 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')),
        ));
    }
}
