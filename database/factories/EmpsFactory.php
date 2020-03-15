<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Emps;
use Faker\Generator as Faker;

$factory->define(Emps::class, function (Faker $faker) {
	static $user_id = 1;
    return [
        	'e_nombre' => $faker->name,
        	'e_descripcion' => $faker->word,
        	'user_id' => $user_id++,
            ];
});
