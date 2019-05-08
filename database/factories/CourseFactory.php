<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Course::class, function (Faker $faker) {
    return [
        'entity_id' => App\Models\Entity::all()->random()->id,
        'accounting_period_id' => App\Models\AccountingPeriod::all()->random()->id,
        'semester_id' =>App\Models\Semester::all()->random()->id,
        'term_id' => App\Models\Term::all()->random()->id,
        'language_id' => App\Models\Language::all()->random()->id,
        'name_of_subject' => $faker->text,
        'number_of_hours_planned' => '60',
        'number_of_hours_real_conducted' => '57',
        'other_information' => $faker->text,
        'student_semester' => '7',
        'day' => '5',
        'dates' => '7',
        'hours_of_conducted_lessons' => '52',
        'rooms' => 'a101',
    ];
});
