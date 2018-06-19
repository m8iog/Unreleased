<?php

use Faker\Generator as Faker;

$factory->define(\App\Track::class, function (Faker $faker) {
    return [
        "genre_id" => function () {
            return factory(\App\Genre::class)->create()->id;
        },
        "artist_id" => function () {
            return factory(\App\Artist ::class)->create()->id;
        }
    ];
});
