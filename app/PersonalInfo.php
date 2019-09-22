<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PersonalInfo extends Model
{
    use Notifiable;

    public $table = "personal_info";
    
    protected $fillable = [        
        'user_id', 'first_name', 'middle_name', 'last_name', 'first_name2', 'middle_name2', 'last_name2', 'name_native', 'date_of_birth', 'gender', 'email', 'birth_country', 'birth_state', 'birth_city',
        'nationality', 'alias_name', 'other_surname', 'other_given_name', 'telecode_name',  'telecode_fname', 'telecode_lname', 'marital_status'
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
