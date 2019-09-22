<?php

     $arr = array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables (website information)
    |--------------------------------------------------------------------------
    |
    | You can access these variable using either of these two functions:

        Config::get('constants.company_name')
        config('constants.company_name')
        For Blade as well:

        {{ config('constants.month_name') }}
    |
    */

    'company_name' => env('COMPANY_NAME','USA Visa'),
    'company_email' => env('COMPANY_email','info@visapress.com'),
    'company_url' => env('COMPANY_URL','https://visapress.com'),


    /*
    |--------------------------------------------------------------------------
    | User Defined Variables for categories
    |--------------------------------------------------------------------------
    
    */

    'month_name' => env('month_name', $arr),


];