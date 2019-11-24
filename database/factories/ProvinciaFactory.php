<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Provincia;
use Faker\Generator as Faker;

$factory->define(Provincia::class, function (Faker $faker) {
    return [
        "prov_nome" =>$faker-> city,
    ];
});
