<?php

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'paymentable_id' => null,
        'paymentable_type' => \App\Project::class,
        'name' => $faker->name,
        'email' => $faker->email,
        'selected_amount' => $faker->numberBetween(10,100),
        'selected_currency' => 'nano',
        'amount_rai' => $faker->numberBetween(10000,1000000),
        'brainblocks_token' => $faker->uuid,
        'send_block' => '80679418E9DA1DFA06E6BA6BAB9D8DED0AB1EACB67C4E59575BA2A343A296B9A',
        'sender' => 'xrb_3digoftyozr5dtwq4wops7dsmnbisbuaahuwc479p9mhcc8rdshs4c1j1djq',
        'success' => $faker->boolean,
    ];
});
