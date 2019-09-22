<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Session;
use Response;
use App\Contact;
use App\PersonalInfo;
use App\ParentsInfo;
use App\ContactInfo;
use App\AddInfo;
use App\PastVisa;
use App\UpcomingTrip;
use App\AddQues;

class adminEnquiryController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
        public function contactEnquiryList()
        {
        	$contact = Contact::all();	        
	 		if($contact) {                    
	            return view('dashboard/contact-enquiry')
	                        ->with('contact', $contact);	                        
	        }else{   
	            return false;      
	       	}
        }

        public function trashContactEnquiry($id)
        {
            $user = Contact::find($id);
        	$user->delete();
        	return back()->with('success_msg', 'Enquiry deleted successfully!');
        }

        public function updateStatus(Request $request)
        {
            $data = array(
	            'status' => Input::get('status'),	            
	            'updated_at' => date('Y-m-d H:i:s')
	        );
	        $result =  Contact::where(['id'=> Input::get('status_id')])->update($data);
	        if($result){
	            return back()->with('success_msg', 'Status Updated successfully!');
	        }else{
	            return false;
	        }
        }

        public function visaEnquiryList()
        {     
            $PersonalInfo = PersonalInfo::all();       

            return view('dashboard/visa-enquiry')
                            ->with('PersonalInfo', $PersonalInfo);  
        }

        public function applicationStepOneDetail($user_id)
        {
                $PersonalInfo = PersonalInfo::where(['user_id' => $user_id])->get();
                $ParentsInfo = ParentsInfo::where(['user_id' => $user_id])->get();
                $ContactInfo = ContactInfo::where(['user_id' => $user_id])->get();           

                return view('application-step-one-view')
                        ->with('PersonalInfo', $PersonalInfo)
                        ->with('ParentsInfo', $ParentsInfo)
                        ->with('ContactInfo', $ContactInfo);
              
        }
        public function applicationStepTwoDetail($userId)
        {
                $UpcomingTrip = UpcomingTrip::where(['user_id' => $userId])->get();
                $PastVisa = PastVisa::where(['user_id' => $userId])->get();
                $AddInfo = AddInfo::where(['user_id' => $userId])->get();          

                return view('application-step-two-view')
                        ->with('UpcomingTrip', $UpcomingTrip)
                        ->with('PastVisa', $PastVisa)
                        ->with('AddInfo', $AddInfo);
             
        }

        public function applicationStepThreeDetail($userId) 
        {
                $AddQues = AddQues::where(['user_id' => $userId])->get();          

                return view('application-step-three-view')
                        ->with('AddQues', $AddQues);
              
        }   
        public function deleteVisaEnquiry($user_id)
        {
            $user1 = PersonalInfo::where('user_id', '=', $user_id)->delete();
            $user2 = ParentsInfo::where('user_id', '=', $user_id)->delete();
            $user3 = ContactInfo::where('user_id', '=', $user_id)->delete();
            $user4 = UpcomingTrip::where('user_id', '=', $user_id)->delete();
            $user5 = PastVisa::where('user_id', '=', $user_id)->delete();
            $user6 = AddInfo::where('user_id', '=', $user_id)->delete();
            $user7 = AddQues::where('user_id', '=', $user_id)->delete();
            return back()->with('success_msg', 'Enquiry deleted successfully!');
        }      
        
        
}