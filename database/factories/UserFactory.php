<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\User;

$factory->define(User::class, function (Faker $faker) {
    return [

             "ut_nome" => $faker->name,
             "ut_tipo_doc" =>'Bi',
             "ut_numero"=>$faker->numberBetween(1101005350,1102005350),
             "ut_contacto"=>$faker-> phoneNumber,
             "ut_morada" =>$faker-> address,
             "email" =>$faker-> safeEmail,
             "password" => '$2y$10$ltFL0aTxUgVU.YCcuEcOFOOBXdu/AvWE5DUskftjaBqSrzdJeXTeu',

    ];
});
