<?php

namespace App\Helper;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AppHelper extends Model
{
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
        $url_value = array(
            "home" => "home",
            "about" => "about",
            "contact-us" => "contact-us",
            "esta" => "esta",
            "embassy-info" => "embassy-info",
            "application-step-one" => "apply-for-visa",
            "application-step-two" => "apply-for-visa-step2",
            "application-step-three" => "apply-for-visa-step3",
            "B1" => "visa-category/B1/apply-for-visa",
            "B2" => "visa-category/B2/apply-for-visa",
            "B1-B2" => "visa-category/B1-B2/apply-for-visa",
            "J1" => "visa-category/J1/apply-for-visa",
            "F1" => "visa-category/F1/apply-for-visa",
            "C1-D" => "visa-category/C1-D/apply-for-visa",
            "terms-and-condition" => "terms-and-condition",
            "privacy-policy" => "privacy-policy",
            "faq" => "faq",
            "talk-to-our-expert" => "talk-to-our-expert"
        );
        return $url_value;
    }
    public function get_site_config() {
        $url_value = array(
            "site_url" => "http://localhost:8000/",
        );
        return $url_value;
    }
    public static function validateDataString($str){
        $validArray = array('', ' ', null, 'null', 'undefined');
        if(in_array($str, $validArray) || ctype_space($str)){
            return false;
        }else{
            return true;
        }
    }
    public static function dataReady($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
     public static function instance()
     {
         return new AppHelper();
     }
    
}
