<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\NewMemberInfo;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(NewMemberInfo::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'birthplace' => $faker->city,
        'birthdate' => $faker->date,
        'province' => $faker->name,
        'postal_code' => '28' . strval($faker->randomNumber(3)),
        'address' => $faker->address,
        'email' => $faker->email,
        'city' => $faker->city,
        'phone_number' => $faker->mobileNumber,
        'secondary_phone_number' => $faker->tollFreeNumber,
        'nif' => $faker->dni,
        'passport_number' =>  'ERT'. strval($faker->randomNumber(6)),
        'father_name' => $faker->name,
        'mother_name' => $faker->name,
        'issue_date' => $faker->date,
        'issue_location' => $faker->city,
        'validity_date' => $faker->date,
        'already_a_member' => $faker->boolean,
        'account_number' => $faker->iban('ES'),
        'is_sanitary' => $faker->boolean,
        'training' => $faker->jobTitle,
        'professional_experience' => $faker->jobTitle,
        'years_of_experience' => $faker->randomDigit,
        'speciality' => $faker->jobTitle,
        'motivations' => $faker->text,
        'has_volunteering_experience' => $faker->boolean,
        'volunteering_experience_info' => $faker->text,
        'first_time_in_humancoop' => $faker->boolean,
        'where_did_you_know' => $faker->text,
    ];
});
