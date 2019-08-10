<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {

    $title = rtrim($faker->sentence(rand(5, 10)), ".");
    return [
       'title'=> $title,
       'slug'=>str_slug($title),
       'body'=> $faker->paragraphs(rand(4, 8), true),
       'views'=> rand(0, 8),
       'answers'=> rand(0, 8),
       'votes'=> rand(-3, 8)

    ];
});
