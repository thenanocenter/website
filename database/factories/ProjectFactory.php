<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'slug' => $faker->slug,
        'name' => $faker->company,
        'image_path' => 'projects/fake.png',
        'description_short' => $faker->sentence,
        'description' => $faker->paragraph,
        'goal' => $faker->numberBetween(100,10000).' Nano',
        'progress_percentage' => $faker->numberBetween(0,100),
        'nano_goal' => null,
        'nano_address' => 'xrb_1centergyjzuw39oieac5gi3smyfj841k5cq9f861op8x9tto3m9cqobwfbd',
        'status' => $faker->randomKey(\App\Options\ProjectStatus::get()),
    ];
});
