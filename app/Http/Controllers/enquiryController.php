<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Session;
use Response;
use Cookie;
use App\Contact;
use App\PersonalInfo;
use App\ParentsInfo;
use App\ContactInfo;
use App\AddInfo;
use App\CrewInfo;
use App\PastVisa;
use App\UpcomingTrip;
use App\PassportInfo;
use App\AddQues;
use App\Uidesign;

class enquiryController extends Controller
{
    public function contactEnquiry(Request $request)
    {
        if (Contact::create($request->all())) {     
            return back()->with('message', 'Success! you have submitted successfully.');
        }else{
            return back()->with('message', 'Failed! some error occured.');
        }            
    }
    public function contactUsPage()
    {
       $contactBanner = Uidesign::where(['page' => 'contact', 'section' => 'banner'])->get();
       $contactSection2 = Uidesign::where(['page' => 'contact', 'section' => 'section_2'])->get();   
       return view('contact')
                ->with('contactBanner', $contactBanner)
                ->with('contactSection2', $contactSection2);
    }
    public function aboutUsPage()
    {
        $aboutBanner = Uidesign::where(['page' => 'about', 'section' => 'banner'])->get();
        $aboutSection2 = Uidesign::where(['page' => 'about', 'section' => 'section_2_edit'])->get();   
        $aboutSection3 = Uidesign::where(['page' => 'about', 'section' => 'section_3_edit'])->get();   
        return view('about')
                ->with('aboutBanner', $aboutBanner)
                ->with('aboutSection2', $aboutSection2)
                ->with('aboutSection3', $aboutSection3);
    }
    public function homePage()
    {
        $banner = Uidesign::where(['page' => 'home', 'section' => 'banner'])->get();
        $section_2 = Uidesign::where(['page' => 'home', 'section' => 'section_2'])->get();  
        $section_3_text = Uidesign::where(['page' => 'home', 'section' => 'section_3_text'])->get();  
        $section_3_image = Uidesign::where(['page' => 'home', 'section' => 'section_3_image'])->get();   
        $section_4 = Uidesign::where(['page' => 'home', 'section' => 'section_4'])->get();   
        return view('home')
                ->with('banner', $banner)
                ->with('section_2', $section_2)
                ->with('section_3_text', $section_3_text)
                ->with('section_3_image', $section_3_image)
                ->with('section_4', $section_4);
    }
    public function estaPage()
    {
        $estaBanner = Uidesign::where(['page' => 'esta', 'section' => 'banner'])->get();
        $estaSection2 = Uidesign::where(['page' => 'esta', 'section' => 'section_2'])->get();  
        return view('esta')
                ->with('estaPage', $estaBanner)
                ->with('estaPageSection2', $estaSection2);
    }
    public function embassyInfoPage()
    {
        $embassyInfoBanner = Uidesign::where(['page' => 'embassyInfo', 'section' => 'banner'])->get();
        $embassyInfoSection2 = Uidesign::where(['page' => 'embassyInfo', 'section' => 'section_2'])->get();  
        return view('embassy-info')
                ->with('embassyInfoPage', $embassyInfoBanner)
                ->with('embassyInfoSection2', $embassyInfoSection2);
    }
    public function personalInformationUpdate(Request $request)
    {
        $fname = Input::get('first_name');
        $mname = Input::get('middle_name');
        $lname = Input::get('last_name');
        $native_name = Input::get('native_name');
        $DOBDay = Input::get('DOB_Day');
        $DOBMonth = Input::get('DOB_Month');
        $DOBYear = Input::get('DOB_Year');
        $gender = Input::get('user_gender');
        $email = Input::get('user_email');
        $confirm_email = Input::get('user_confirm_email');
        $country_name = Input::get('country_name');
        $state_name = Input::get('state_name');
        $city_name = Input::get('city_name');
        $nationality_name = Input::get('nationality_name');
        $marital_status = Input::get('marital_status');
        $temp_user_id = Input::get('temp_user_id');
        
        $date_of_birth = $DOBDay.'-'.$DOBMonth.'-'.$DOBYear;
            $values = array(                
                'user_id' => $temp_user_id,
                'first_name' => $fname,
                'middle_name' => $mname,
                'last_name' => $lname,
                'name_native' => $native_name,
                'date_of_birth' => $date_of_birth,
                'gender' => $gender,
                'email' => $email,
                'birth_country' => $country_name,
                'birth_state' => $state_name,
                'birth_city' => $city_name,
                'nationality' => $nationality_name,
                'marital_status' => $marital_status,
            );
        $memberExist = PersonalInfo::insert($values);
            

        $father_first_name = Input::get('father_first_name');
        $father_middle_name = Input::get('father_middle_name');
        $father_last_name = Input::get('father_last_name');
        $father_name_native = Input::get('father_name_native');
        $father_DOB_Day = Input::get('father_DOB_Day');
        $father_DOB_Month = Input::get('father_DOB_Month');
        $father_DOB_Year = Input::get('father_DOB_Year');
        $father_citizen_status = Input::get('father_citizen_status');
        $mother_first_name = Input::get('mother_first_name');
        $mother_middle_name = Input::get('mother_middle_name');
        $mother_last_name = Input::get('mother_last_name');
        $mother_DOB_Day = Input::get('mother_DOB_Day');
        $mother_DOB_Month = Input::get('mother_DOB_Month');
        $mother_DOB_Year = Input::get('mother_DOB_Year');
        $other_relative = Input::get('other_relative');
        $parents_nationality = Input::get('parents_nationality');

        $father_date_of_birth = $father_DOB_Day.'-'.$father_DOB_Month.'-'.$father_DOB_Year;
        $mother_date_of_birth = $mother_DOB_Day.'-'.$mother_DOB_Month.'-'.$mother_DOB_Year;
            $values2 = array(               
                'user_id' => $temp_user_id,
                'father_first_name' => $father_first_name,
                'father_middle_name' => $father_middle_name,
                'father_last_name' => $father_last_name,
                'mother_first_name' => $mother_first_name,
                'mother_middle_name' => $mother_middle_name,
                'mother_last_name' => $mother_last_name,
                'father_name_native' => $father_name_native,
                'father_date_of_birth' => $father_date_of_birth,
                'mother_date_of_birth' => $mother_date_of_birth,
                'citizen_status' => $father_citizen_status,
                'nationality' => $parents_nationality,
                'other_relative' => $other_relative,
            );
            
        $memberExist2 = ParentsInfo::insert($values2);

        $phone_number = Input::get('phone_number');
        $other_number = Input::get('other_number');
        $home_address = Input::get('home_address');
        $apartment = Input::get('apartment');
        $city_add = Input::get('city_add');
        $country_add = Input::get('country_add');

        $values3 = array(     
                'user_id' => $temp_user_id,         
                'phone_no' => $phone_number,
                'secondary_no' => $other_number,
                'address' => $home_address,
                'appartment_no' => $apartment,
                'city' => $city_add,
                'country' => $country_add,                
            );
        $memberExist3 = ContactInfo::insert($values3);

        $aircraft_job_title = Input::get('aircraft_job_title');
        $company_that_owns_the_aircraft = Input::get('company_that_owns_the_aircraft');
        $position_using_arecruiting = Input::get('position_using_arecruiting');
        $crew_agency_name = Input::get('crew_agency_name');
        $crew_contact_name = Input::get('crew_contact_name');
        $crew_street = Input::get('crew_street');
        $crew_city = Input::get('crew_city');
        $crew_state = Input::get('crew_state');
        $crew_postal = Input::get('crew_postal');
        $crew_country = Input::get('crew_country');
        $crew_telephone_number = Input::get('crew_telephone_number');
        $are_you_serving_aboard = Input::get('are_you_serving_aboard');
        $vessel_name = Input::get('vessel_name');
        $vessel_identification_number = Input::get('vessel_identification_number');

        $values4 = array( 
                'user_id' => $temp_user_id,
                'aircraft_job_title' => $aircraft_job_title,
                'company_that_owns_the_aircraft' => $company_that_owns_the_aircraft,
                'position_using_arecruiting' => $position_using_arecruiting,
                'crew_agency_name' => $crew_agency_name,
                'crew_contact_name' => $crew_contact_name,
                'crew_street' => $crew_street,
                'crew_city' => $crew_city,
                'crew_state' => $crew_state,
                'crew_postal' => $crew_postal,
                'crew_country' => $crew_country,
                'crew_telephone_number' => $crew_telephone_number,
                'are_you_serving_aboard' => $are_you_serving_aboard,
                'vessel_name' => $vessel_name,
                'vessel_identification_number' => $vessel_identification_number,
            );
        $memberExist4 = CrewInfo::insert($values4);

        $passport_number = Input::get('passport_number');
        $passport_expiry_date = Input::get('passport_expiry_date');
        $passport_issue_date = Input::get('passport_issue_date');
        $place_of_birth = Input::get('place_of_birth');
        $place_of_issue = Input::get('place_of_issue');
        $issuing_authority =  Input::get('issuing_authority');

        $values5 = array( 
                'user_id' => $temp_user_id,
                'passport_number' => $passport_number,
                'passport_expiry_date' => $passport_expiry_date,
                'passport_issue_date' => $passport_issue_date,
                'place_of_birth' => $place_of_birth,
                'place_of_issue' => $place_of_issue,
                'issuing_authority' => $issuing_authority,
            );
        $memberExist5 = PassportInfo::insert($values5);
        
         return view('application-step-two')
                            ->with('success_msg', 'success');
    }
    public function additionalInformationUpdate(Request $request)
    {
        $temp_user_id = Input::get('temp_user_id');

        $add_country_name = Input::get('add_country_name');
        $add_passport_number = Input::get('add_passport_number');
        $add_residence_country = Input::get('add_residence_country');

        $values = array(                
            'user_id' => $temp_user_id,
            'add_country_name' => $add_country_name,
            'add_passport_number' => $add_passport_number,
            'add_residence_country' => $add_residence_country,
        );

        AddInfo::insert($values);

        $past_visit = Input::get('past_visit');
        $past_visit_date = Input::get('past_visit_date');
        $past_visit_month = Input::get('past_visit_month');
        $past_visit_year = Input::get('past_visit_year');
        $past_visit_duration = Input::get('past_visit_duration');
        $past_visit_duration_month = Input::get('past_visit_duration_month');
        $past_visa_issue_date = Input::get('past_visa_issue_date');
        $past_visa_issue_month = Input::get('past_visa_issue_month');
        $past_visa_issue_year = Input::get('past_visa_issue_year');
        $past_same_visa = Input::get('past_same_visa');
        $past_visa_printed = Input::get('past_visa_printed');
        $past_visa_country = Input::get('past_visa_country');
        $past_visa_cancel = Input::get('past_visa_cancel');
        $past_visa_cancel_reason = Input::get('past_visa_cancel_reason');
        $past_visa_refuse = Input::get('past_visa_refuse');
        $past_visa_refuse_reason = Input::get('past_visa_refuse_reason');
        $past_visa_immigration = Input::get('past_visa_immigration');
        $past_visa_immigration_reason = Input::get('past_visa_immigration_reason');
        $past_visa_esta = Input::get('past_visa_esta');
        $past_visa_esta_reason = Input::get('past_visa_esta_reason');
        $past_visa_entry_refuse = Input::get('past_visa_entry_refuse');
        $past_visa_entry_refuse_reason = Input::get('past_visa_entry_refuse_reason');

        $values = array(                
            'user_id' => $temp_user_id,
            'past_visit' => $past_visit,
            'past_visit_date' => $past_visit_date,
            'past_visit_month' => $past_visit_month,
            'past_visit_year' => $past_visit_year,
            'past_visit_duration' => $past_visit_duration,
            'past_visit_duration_month' => $past_visit_duration_month,
            'past_visa_issue_date' => $past_visa_issue_date,
            'past_visa_issue_month' => $past_visa_issue_month,
            'past_visa_issue_year' => $past_visa_issue_year,
            'past_same_visa' => $past_same_visa,
            'past_visa_printed' => $past_visa_printed,
            'past_visa_country' => $past_visa_country,
            'past_visa_cancel' => $past_visa_cancel,
            'past_visa_cancel_reason' => $past_visa_cancel_reason,
            'past_visa_refuse' => $past_visa_refuse,
            'past_visa_refuse_reason' => $past_visa_refuse_reason,
            'past_visa_immigration' => $past_visa_immigration,
            'past_visa_immigration_reason' => $past_visa_immigration_reason,
            'past_visa_esta' => $past_visa_esta,
            'past_visa_esta_reason' => $past_visa_esta_reason,
            'past_visa_entry_refuse' => $past_visa_entry_refuse,
            'past_visa_entry_refuse_reason' => $past_visa_entry_refuse_reason,
        );

        PastVisa::insert($values);

        $upcoming_specify = Input::get('upcoming_specify');
        $upcoming_phone_one = Input::get('upcoming_phone_one');
        $upcoming_phone_two = Input::get('upcoming_phone_two');
        $upcoming_contact_surname = Input::get('upcoming_contact_surname');
        $upcoming_contact_name = Input::get('upcoming_contact_name');
        $upcoming_relation_specify = Input::get('upcoming_relation_specify');
        $upcoming_email = Input::get('upcoming_email');
        $upcoming_mobile = Input::get('upcoming_mobile');
        $upcoming_street_address = Input::get('upcoming_street_address');
        $upcoming_apart = Input::get('upcoming_apart');
        $upcoming_city = Input::get('upcoming_city');
        $upcoming_country = Input::get('upcoming_country');

        $values = array(
            'user_id' => $temp_user_id,
            'upcoming_specify'=> $upcoming_specify,
            'upcoming_phone_one'=> $upcoming_phone_one,
            'upcoming_phone_two'=> $upcoming_phone_two,
            'upcoming_contact_surname'=> $upcoming_contact_surname,
            'upcoming_contact_name'=> $upcoming_contact_name,
            'upcoming_relation_specify'=> $upcoming_relation_specify,
            'upcoming_email'=> $upcoming_email,
            'upcoming_mobile'=> $upcoming_mobile,
            'upcoming_street_address'=> $upcoming_street_address,
            'upcoming_apart'=> $upcoming_apart,
            'upcoming_city'=> $upcoming_city,
            'upcoming_country'=> $upcoming_country,
        );

        UpcomingTrip::insert($values);
        
        return back()->with('success_msg', 'Enquiry inserted successfully!');
    }
    public function additionalQuestionUpdate(Request $request)
    {
        $temp_user_id = Input::get('temp_user_id');
        
        $addn_embassy = Input::get('addn_embassy');
        $addn_student = Input::get('addn_student');
        $addn_school = Input::get('addn_school');
        $addn_street_address = Input::get('addn_street_address');
        $addn_city = Input::get('addn_city');
        $addn_state = Input::get('addn_state');
        $addn_country = Input::get('addn_country');
        $addn_major = Input::get('addn_major');
        $addn_duties = Input::get('addn_duties');
        $addn_working = Input::get('addn_working');
        $addn_working_desc = Input::get('addn_working_desc');
        $addn_occupation = Input::get('addn_occupation');
        $addn_employer = Input::get('addn_employer');
        $addn_employer_address = Input::get('addn_employer_address');
        $addn_employer_unit_number = Input::get('addn_employer_unit_number');
        $addn_emp_city = Input::get('addn_emp_city');
        $addn_emp_state = Input::get('addn_emp_state');
        $addn_emp_zip = Input::get('addn_emp_zip');
        $addn_emp_country = Input::get('addn_emp_country');
        $addn_duties_desc = Input::get('addn_duties_desc');
        $addn_income = Input::get('addn_income');
        $addn_prev_emp = Input::get('addn_prev_emp');
        $addn_prev_emp_name = Input::get('addn_prev_emp_name');
        $addn_prev_emp_title = Input::get('addn_prev_emp_title');
        $addn_prev_emp_duties = Input::get('addn_prev_emp_duties');
        $addn_prev_emp_supervisor = Input::get('addn_prev_emp_supervisor');
        $addn_prev_emp_city = Input::get('addn_prev_emp_city');
        $addn_prev_emp_super_name = Input::get('addn_prev_emp_super_name');
        $addn_prev_emp_address = Input::get('addn_prev_emp_address');
        $addn_apartment = Input::get('addn_apartment');
        $addn_apartment_city = Input::get('addn_apartment_city');
        $addn_apartment_state = Input::get('addn_apartment_state');
        $addn_academic = Input::get('addn_academic');
        $addn_academic_name = Input::get('addn_academic_name');
        $addn_academic_address = Input::get('addn_academic_address');
        $addn_academic_city = Input::get('addn_academic_city');
        $addn_academic_state = Input::get('addn_academic_state');
        $addn_academic_country = Input::get('addn_academic_country');
        $addn_academic_major = Input::get('addn_academic_major');
        $addn_academic_duties = Input::get('addn_academic_duties');

        $values = array(                
            'user_id' => $temp_user_id,
            'addn_embassy' => $temp_user_id,
            'addn_student' => $addn_student,
            'addn_school' => $addn_school,
            'addn_street_address' => $addn_street_address,
            'addn_city' => $addn_city,
            'addn_state' => $addn_state,
            'addn_country' => $addn_country,
            'addn_major' => $addn_major,
            'addn_duties' => $addn_duties,
            'addn_working' => $addn_working,
            'addn_working_desc' => $addn_working_desc,
            'addn_occupation' => $addn_occupation,
            'addn_employer' => $addn_employer,
            'addn_employer_address' => $addn_employer_address,
            'addn_employer_unit_number' => $addn_employer_unit_number,
            'addn_emp_city' => $addn_emp_city,
            'addn_emp_state' => $addn_emp_state,
            'addn_emp_zip' => $addn_emp_zip,
            'addn_emp_country' => $addn_emp_country,
            'addn_duties_desc' => $addn_duties_desc,
            'addn_income' => $addn_income,
            'addn_prev_emp' => $addn_prev_emp,
            'addn_prev_emp_name' => $addn_prev_emp_name,
            'addn_prev_emp_title' => $addn_prev_emp_title,
            'addn_prev_emp_duties' => $addn_prev_emp_duties,
            'addn_prev_emp_supervisor' => $addn_prev_emp_supervisor,
            'addn_prev_emp_city' => $addn_prev_emp_city,
            'addn_prev_emp_super_name' => $addn_prev_emp_super_name,
            'addn_prev_emp_address' => $addn_prev_emp_address,
            'addn_apartment' => $addn_apartment,
            'addn_apartment_city' => $addn_apartment_city,
            'addn_apartment_state' => $addn_apartment_state,
            'addn_academic' => $addn_academic,
            'addn_academic_name' => $addn_academic_name,
            'addn_academic_address' => $addn_academic_address,
            'addn_academic_city' => $addn_academic_city,
            'addn_academic_state' => $addn_academic_state,
            'addn_academic_country' => $addn_academic_country,
            'addn_academic_major' => $addn_academic_major,
            'addn_academic_duties' => $addn_academic_duties,
        );

        AddQues::insert($values);
        
        return back()->with('success_msg', 'Enquiry inserted successfully!');
    }
    public function applicationStepOne($type = 'application_step_one')
    {
        $PersonalInfo = array();
        $ParentsInfo = array();
        $ContactInfo = array();
        $PassportInfo = array();
        $pageData     = array();

        if(isset($_COOKIE['temp_user_id'])){
            $userId         = $_COOKIE['temp_user_id'];
            $PersonalInfo   = PersonalInfo::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();
            $ParentsInfo    = ParentsInfo::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();
            $ContactInfo    = ContactInfo::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();
            $PassportInfo   = PassportInfo::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();            
        }
        if($type != ''){
            $pageData     = Uidesign::where(['page' => $type, 'section' => 'section_1'])->get();
        }
            return view('application-step-one')
                    ->with('PersonalInfo', $PersonalInfo)
                    ->with('ParentsInfo', $ParentsInfo)
                    ->with('ContactInfo', $ContactInfo)
                    ->with('PassportInfo', $PassportInfo)
                    ->with('PageData', $pageData);             
    }
    public function applicationStepTwo()
    {
        $UpcomingTrip = array();
        $PastVisa = array();
        $AddInfo = array();

        if(isset($_COOKIE['temp_user_id'])){
            $userId = $_COOKIE['temp_user_id'];
            $UpcomingTrip = UpcomingTrip::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();
            $PastVisa     = PastVisa::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();
            $AddInfo      = AddInfo::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();   
        }
        $pageData     = Uidesign::where(['page' => 'application_step_two', 'section' => 'section_1'])->get(); 
        return view('application-step-two')
                    ->with('UpcomingTrip', $UpcomingTrip)
                    ->with('PastVisa', $PastVisa)
                    ->with('AddInfo', $AddInfo)
                    ->with('PageData', $pageData);     
    }

    public function applicationStepThree() 
    {
        $AddQues = array();

        if(isset($_COOKIE['temp_user_id'])){
            $userId = $_COOKIE['temp_user_id'];
            $AddQues = AddQues::where(['user_id' => $userId])->orderBy('id', 'DESC')->take(1)->get();
        }
        $pageData     = Uidesign::where(['page' => 'application_step_three', 'section' => 'section_1'])->get();
        return view('application-step-three')
                    ->with('AddQues', $AddQues)
                    ->with('PageData', $pageData);      
    } 
      
        
}