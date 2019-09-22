<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UpcomingTrip extends Model
{
    use Notifiable;

    public $table = "upcoming_trip";
    
    protected $fillable = [        
        'user_id', 'upcoming_specify', 'upcoming_phone_one', 'upcoming_phone_two', 'upcoming_contact_surname', 'upcoming_contact_name', 'upcoming_relation_specify', 'upcoming_email', 'upcoming_mobile', 'upcoming_street_address', 'upcoming_apart', 'upcoming_city', 'upcoming_country'
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
