<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Masterfile;
use Faker\Generator as Faker;

$factory->define(Masterfile::class, function (Faker $faker) {
    return [
        'npwp' => $faker->numberBetween($min = 100000000000000, $max = 999999999999999) ,
        'name' => $faker->name,
        'kelurahan' => $faker->state,
        'nip_ar' => '060092160', // password
        'nama_ar' => 'Revita Kemala Batari',
    ];
});
