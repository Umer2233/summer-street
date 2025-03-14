<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Manufacturer::class, function (Faker $faker) {
    $name = $faker->unique->company;
    return [
        'shop_id' => $faker->randomElement(\DB::table('shops')->pluck('id')->toArray()),
        'name' => $name,
        'slug' => Str::slug($name, '-'),
        'email' => $faker->unique->email,
        'url' => $faker->unique->url,
        'phone' => $faker->phoneNumber,
        'country_id' => $faker->randomElement(\DB::table('countries')->pluck('id')->toArray()),
        'description' => $faker->text(500),
        'active' => 1,
    ];
});
