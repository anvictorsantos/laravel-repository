<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'details' => $this->faker->sentences(4, true),
        'client' => $this->faker->name(),
        'is_fulfilled' => $this->faker->boolean(),
    ];
});
