<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->words(3, true)
    ];
});
