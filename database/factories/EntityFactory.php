<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Entity::class, function (Faker $faker) {
    return [
      'user_id'=>App\Models\User::all()->random()->id,
      'created_at'=>$faker->dateTime(),
      'updated_at'=>$faker->dateTime(),
      'entity_form_id'=>App\Models\EntityForm::all()->random()->id,
      'draft'=>'0'
    ];
});
