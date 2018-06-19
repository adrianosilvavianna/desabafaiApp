<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    $word = $faker->word;
    return [
        'name' => $faker->word,
        'slug' => str_slug($word)
    ];
});
