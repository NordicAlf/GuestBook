<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\GuestBook;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(GuestBook::class, function (Faker $faker) {

    $fullDateAndTime = new Carbon();
    $date =  $fullDateAndTime->format('d-m-Y');

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'text' => $faker->text(rand(20, 70)),
        'created_at' => $date
    ];
});
