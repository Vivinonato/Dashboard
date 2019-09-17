<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Invoic;
use Faker\Generator as Faker;

$factory->define(Invoic::class, function (Faker $faker) {

    return [
        'code' => $faker->word,
        'id_customer' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
