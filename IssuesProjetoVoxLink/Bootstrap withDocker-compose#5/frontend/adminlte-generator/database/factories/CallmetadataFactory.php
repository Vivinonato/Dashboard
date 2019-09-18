<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Callmetadata;
use Faker\Generator as Faker;

$factory->define(Callmetadata::class, function (Faker $faker) {

    return [
        'Nome' => $faker->word,
        'Starttime' => $faker->word,
        'Endtime' => $faker->date('Y-m-d H:i:s'),
        'Duration' => $faker->randomDigitNotNull,
        'Phone' => $faker->word
    ];
});
