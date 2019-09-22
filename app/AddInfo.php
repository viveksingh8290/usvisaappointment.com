<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AddInfo extends Model
{
    use Notifiable;

    public $table = "add_info";
    
    protected $fillable = [        
        'add_country_name',
        'add_passport_number',
        'add_residence_country',
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
