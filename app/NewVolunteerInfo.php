<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewVolunteerInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'birthplace',
        'birthdate',
        'province',
        'postal_code',
        'address',
        'email',
        'city',
        'phone_number',
        'secondary_phone_number',
        'nif',
        'passport_number',
        'father_name',
        'mother_name',
        'marital_status',
        'children_number',
        'issue_date',
        'issue_location',
        'validity_date',
        'already_a_member',
        'account_number',
        'is_sanitary',
        'allergies',
        'intolerances',
        'previous_illnesses',
        'medication',
        'training',
        'professional_experience',
        'years_of_experience',
        'speciality',
        'motivations',
        'has_volunteering_experience',
        'volunteering_experience_info',
        'first_time_in_humancoop',
        'where_did_you_know',
    ];
}
