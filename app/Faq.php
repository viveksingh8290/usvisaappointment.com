<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Faq extends Model
{
    use Notifiable;

    public $table = "faq";
    
    protected $fillable = [        
        'ques', 'ans'
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
