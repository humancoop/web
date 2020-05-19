<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\NewMemberInfo;
use App\NewVolunteerInfo;
use App\NewDonationInfo;
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

$factory->define(NewDonationInfo::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'birthdate' => $faker->date,
        'nif' => $faker->dni,
        'address' => $faker->address,
        'postal_code' => $faker->numerify('28###'),
        'city' => $faker->city,
        'province' => $faker->name,
        'phone_number' => $faker->mobileNumber,
        'secondary_phone_number' => $faker->tollFreeNumber,
        'email' => $faker->email,
        'account_number' => $faker->iban('ES'),
        'account_owner_name' => $faker->name,
        'amount' => $faker->numberBetween(10, 100),
    ];
});

$factory->define(NewMemberInfo::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'birthdate' => $faker->date,
        'nif' => $faker->dni,
        'address' => $faker->address,
        'postal_code' => $faker->numerify('28###'),
        'city' => $faker->city,
        'province' => $faker->name,
        'phone_number' => $faker->mobileNumber,
        'secondary_phone_number' => $faker->tollFreeNumber,
        'email' => $faker->email,
        'amount' => $faker->numberBetween(10, 100),
        'period' => $faker->numberBetween(1, 4),
        'account_number' => $faker->iban('ES'),
        'account_owner_name' => $faker->name,
        'where_did_you_know' => $faker->text,
    ];
});

$factory->define(NewVolunteerInfo::class, function (Faker $faker) {
    return [
        'full_name' => $faker->name,
        'birthplace' => $faker->city,
        'birthdate' => $faker->date,
        'birthprovince' => $faker->name,
        'province' => $faker->name,
        'postal_code' => $faker->numerify('28###'),
        'address' => $faker->address,
        'email' => $faker->email,
        'city' => $faker->city,
        'phone_number' => $faker->mobileNumber,
        'secondary_phone_number' => $faker->tollFreeNumber,
        'nif' => $faker->dni,
        'passport_number' =>  $faker->numerify('ERT######'),
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
