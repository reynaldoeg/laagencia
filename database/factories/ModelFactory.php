<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

use App\Product;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;

	return [
		'name' => $faker->name,
		'email' => $faker->unique()->safeEmail,
		'password' => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];
});

$factory->define(App\Courier::class, function (Faker\Generator $faker) {
	return [
		'name' => $faker->name
	];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
	return [
		'name' 	=> $faker->word,
		'price' => $faker->randomFloat(2, 50, 500)
	];
});

$factory->define(App\Item::class, function (Faker\Generator $faker) {

	$prod_id = rand(1, 20);
	$price = Product::find($prod_id)->price;
	$qty = rand(1, 10);
	

	return [
		'product_id' => $prod_id,
		'quantity' 	=> $qty,
		'total' => $price * $qty	
	];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
	
	$courier_id = rand(1, 8);
	$status = rand(1,2);

	return [
		'name' 	=> $faker->word,
		'address' => $faker->address,
		'courier_id' => $courier_id,
		'item_id' => '1',
		'status' => $status
	];
});