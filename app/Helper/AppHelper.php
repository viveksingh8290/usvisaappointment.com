<?php
namespace App\Helper;

class AppHelper
{
      public function bladeHelper()
      {
             return "hello";
      }

     public static function instance()
     {
         return new AppHelper();
     }

     public function getCookieValue()
    {
        if(!isset($_COOKIE['temp_user_id'])) {
	        $cookie_name = "temp_user_id";
	        $cookie_value = rand();
	        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	    }
	    return $_COOKIE['temp_user_id'];
    }
}