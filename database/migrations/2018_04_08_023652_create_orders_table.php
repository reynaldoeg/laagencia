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
            $table->double('total', 15, 8);
            $table->boolean('can_be_accomplished');
            $table->integer('remainig_time_to_deliver');
            $table->double('likely_deliver_basedon_courier');
            $table->double('likely_deliver_basedon_date');
            $table->timestamps();
        });

        Schema::table('orders', function(Blueprint $table) {
           $table->foreign('item_id')->references('id')->on('items');
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
