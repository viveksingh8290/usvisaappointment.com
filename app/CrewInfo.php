<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CrewInfo extends Model
{
    use Notifiable;

    public $table = "crew_visa_info";
    
    protected $fillable = [        
        'aircraft_job_title',
        'company_that_owns_the_aircraft',
        'position_using_arecruiting',
        'crew_agency_name',
        'crew_contact_name',
        'crew_street',
        'crew_city',
        'crew_state',
        'crew_postal',
        'crew_country',
        'crew_telephone_number',
        'are_you_serving_aboard',
        'vessel_name',
        'vessel_identification_number'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    
}
