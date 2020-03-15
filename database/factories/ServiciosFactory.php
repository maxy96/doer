<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servicios;
use Faker\Generator as Faker;

$factory->define(Servicios::class, function (Faker $faker) {
	static $emp_id = 1;
    return [
        's_descripcion' => $faker->text,
        'creado_en' =>  now(),
        'emp_id' => $emp_id++,
        'tipoServicio_id' => rand(1,3),
    ];
});
