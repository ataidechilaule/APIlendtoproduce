<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Distrito;
use Faker\Generator as Faker;

$factory->define(Distrito::class, function (Faker $faker) {
    return [
        "dis_nome" =>$faker-> city,
        "provincia_id" => factory(App\Provincia::class),
    ];
});
