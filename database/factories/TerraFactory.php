<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Terra;
use App\User;
use Faker\Generator as Faker;

$factory->define(Terra::class, function (Faker $faker) {
    return [
        "ter_dimensao" => $faker->numberBetween(20,100),
        "ter_duat" =>$faker->numberBetween(125234,5426658),
        "ter_rio"=>$faker->boolean,
        "ter_culturas"=>$faker-> realText(10,1),
        "ter_motivo" =>$faker-> realText(20,1),
        "user_id" => factory(App\User::class),
        "distrito_id" => factory(App\Distrito::class),
    ];
});
