<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => $faker->slug,
        'markdown' => $faker->text,
        'is_published' => now(),
        'posted_on_dev_to' => false
    ];
});
