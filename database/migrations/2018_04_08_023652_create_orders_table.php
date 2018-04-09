<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_id')->unsigned();
            $table->integer('courier_id')->unsigned();
            $table->string('name');
            $table->string('address');
            $table->double('total', 15, 8)->nullable();
            $table->integer('status')->unsigned();
            $table->boolean('can_be_accomplished')->nullable();
            $table->integer('remainig_time_to_deliver')->nullable();
            $table->double('likely_deliver_basedon_courier')->nullable();
            $table->double('likely_deliver_basedon_date')->nullable();
            $table->timestamps();
        });

        Schema::table('orders', function(Blueprint $table) {
           $table->foreign('courier_id')->references('id')->on('couriers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
