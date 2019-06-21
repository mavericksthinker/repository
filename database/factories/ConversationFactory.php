<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {
    return [
        'user_id'=> factory(App\User::class)->create()->id,
        'messages'=> $faker->sentence
    ];
});
