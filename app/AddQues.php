<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AddQues extends Model
{
    use Notifiable;

    public $table = "add_ques";
    
    protected $fillable = [        
        'addn_embassy',
        'addn_student',
        'addn_school',
        'addn_street_address',
        'addn_city',
        'addn_state',
        'addn_country',
        'addn_major',
        'addn_duties',
        'addn_working',
        'addn_working_desc',
        'addn_occupation',
        'addn_employer',
        'addn_employer_address',
        'addn_employer_unit_number',
        'addn_emp_city',
        'addn_emp_state',
        'addn_emp_zip',
        'addn_emp_country',
        'addn_duties_desc',
        'addn_income',
        'addn_prev_emp',
        'addn_prev_emp_name',
        'addn_prev_emp_title',
        'addn_prev_emp_duties',
        'addn_prev_emp_supervisor',
        'addn_prev_emp_city',
        'addn_prev_emp_super_name',
        'addn_prev_emp_address',
        'addn_apartment',
        'addn_apartment_city',
        'addn_apartment_state',
        'addn_academic',
        'addn_academic_name',
        'addn_academic_address',
        'addn_academic_city',
        'addn_academic_state',
        'addn_academic_country',
        'addn_academic_major',
        'addn_academic_duties'
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
