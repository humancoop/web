<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewDonationInfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'birthdate',
        'nif',
        'address',
        'postal_code',
        'city',
        'province',
        'phone_number',
        'secondary_phone_number',
        'email',
        'account_number',
        'account_owner_name',
        'amount',
    ];
}
