<?php

use Faker\Generator as Faker;

$factory->define(App\ProjectProposal::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'title' => $faker->company,
        'email' => $faker->email,
        'description_short' => $faker->sentence,
        'description' => $faker->paragraph,
        'links' => $faker->sentence,
        'written_proposal_url' => $faker->url,
        'goal' => $faker->numberBetween(100,10000).' Nano',
        'nano_goal' => null,
        'nano_address' => 'xrb_1centergyjzuw39oieac5gi3smyfj841k5cq9f861op8x9tto3m9cqobwfbd',
    ];
});
