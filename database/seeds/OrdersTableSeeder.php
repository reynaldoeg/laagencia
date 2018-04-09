<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Faker\Generator as Faker;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Order::class, 40)
            ->create()
            ->each(function ($o) {
                $o->items()->save(factory(App\Item::class)->make());
            });
    }
}
