<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(\App\Campaign::class, function (Faker $faker) {
    return [

        'name'=>$faker->name,
        'description' => $faker->paragraph,

        'image' => 'images/campaign/campaignPhoto.jpg',
        'created_at' => now(),
    ];
});
