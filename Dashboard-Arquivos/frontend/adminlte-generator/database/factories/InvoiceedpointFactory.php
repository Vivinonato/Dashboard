<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Invoiceedpoint;
use Faker\Generator as Faker;

$factory->define(Invoiceedpoint::class, function (Faker $faker) {

    return [
        'shouldquery' => $faker->word,
        'customercode' => $faker->word,
        'allinvoicescustomer' => $faker->word
    ];
});
