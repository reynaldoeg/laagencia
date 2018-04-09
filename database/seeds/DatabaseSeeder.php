<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CouriersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
