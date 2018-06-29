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
        'nano_address' => 'xrb_3digoftyozr5dtwq4wops7dsmnbisbuaahuwc479p9mhcc8rdshs4c1j1djq',
        'status' => $faker->randomKey(\App\Options\ProjectStatus::get()),
    ];
});
