<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {

    return [
        'id_person' => $faker->word,
        'id_company' => $faker->word,
        'code' => $faker->word
    ];
});
