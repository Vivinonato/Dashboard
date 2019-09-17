<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CustomerCNPJ;
use Faker\Generator as Faker;

$factory->define(CustomerCNPJ::class, function (Faker $faker) {

    return [
        'CNPJ' => $faker->word,
        'Social_reason' => $faker->word,
        'Municipal_registration' => $faker->word,
        'State_registration' => $faker->word,
        'Email_cnpj' => $faker->word,
        'Phone_cnpj' => $faker->word,
        'Address_cnpj' => $faker->word
    ];
});
