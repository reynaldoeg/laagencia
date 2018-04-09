<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CouriersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Courier::class, 8)->create();
    }
}
