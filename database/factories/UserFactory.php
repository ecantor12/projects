<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Project::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'alias' => $faker->unique()->slug,
        'initial_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'final_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'user_id' => function(){
        	return factory(App\User::class)->create()->id;
        },

    ];
});
