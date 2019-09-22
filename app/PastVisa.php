<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PastVisa extends Model
{
    use Notifiable;

    public $table = "past_visa";
    
    protected $fillable = [        
        'past_visit',
        'past_visit_date',
        'past_visit_month',
        'past_visit_year',
        'past_visit_duration',
        'past_visit_duration_month',
        'past_visa_issue_date',
        'past_visa_issue_month',
        'past_visa_issue_year',
        'past_same_visa',
        'past_visa_printed',
        'past_visa_country',
        'past_visa_cancel',
        'past_visa_cancel_reason',
        'past_visa_refuse',
        'past_visa_refuse_reason',
        'past_visa_immigration',
        'past_visa_immigration_reason',
        'past_visa_esta',
        'past_visa_esta_reason',
        'past_visa_entry_refuse',
        'past_visa_entry_refuse_reason'
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
