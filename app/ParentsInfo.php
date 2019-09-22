<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ParentsInfo extends Model
{
    use Notifiable;

    public $table = "parents_info";
    
    protected $fillable = [        
        'user_id', 'father_first_name', 'father_middle_name', 'father_last_name', 'mother_first_name', 'mother_middle_name', 'mother_last_name', 'father_name_native', 'father_date_of_birth', 'mother_date_of_birth', 'citizen_status', 'nationality', 'other_relative'
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
