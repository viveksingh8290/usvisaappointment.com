<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PassportInfo extends Model
{
    use Notifiable;

    public $table = "passport_info";
    
     protected $fillable = [        
         'passport_number',
         'passport_expiry_date',
         'passport_issue_date',
         'place_of_birth',
         'place_of_issue',
         'issuing_authority'
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
