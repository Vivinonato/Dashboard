<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CustomerCPF;
use Faker\Generator as Faker;

$factory->define(CustomerCPF::class, function (Faker $faker) {

    return [
        'search_client_code' => $faker->word,
        'CPF' => $faker->word,
        'Name' => $faker->word,
        'Email' => $faker->word,
        'Phone' => $faker->word,
        'Address' => $faker->word
    ];
});
