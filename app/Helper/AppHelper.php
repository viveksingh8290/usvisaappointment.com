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

     public function get_cookie_value()
    {
        if(!isset($_COOKIE['temp_user_id'])) {
	        $cookie_name = "temp_user_id";
	        $cookie_value = rand();
	        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	    }
	    return $_COOKIE['temp_user_id'];
    }
    public function get_url() {
      $url_value=array("application-step-1"=>"apply-for-visa","application-step-2"=>"apply-for-visa-2","application-step-3"=>"apply-for-visa-3");
      return $url_value;
    }
}