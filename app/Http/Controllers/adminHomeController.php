<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Session;
use Response;
use App\Uidesign;
use App\Helper\AppHelper;

class adminHomeController extends Controller
{

	 /**
     * Create a new controller instance.
     *
     * @return void
     */
        public function __construct()
        {
            $this->middleware('auth');
        }
     
        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Http\Response
         */
       public function index()
        {
            return view('dashboard/index');
        } 
        public function bannerSectionHomeList(){
            $uidesign = Uidesign::where(['page' => 'home', 'section' => 'banner'])->get();           

            return view('dashboard/banner-section-home')
                ->with('banner', $uidesign);
        }
        public function bannerAddHome(Request $request)
        {
            $main_heading   =   Input::get('main_heading');
            $sub_heading    =   Input::get('sub_heading');
            $button_name    =   Input::get('button_name');
            $button_action  =   Input::get('button_action');

            $filePath = '';      
            if ($request->hasFile('banner_image')) {
                $imageName = rand().''.$request->file('banner_image')->getClientOriginalName();
                $request->file('banner_image')->move(
                    base_path() . '/images/banner/', $imageName
                );
                $filePath = 'images/banner/'.$imageName;
            }else{
                return false;
            } 
            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading, 'button_name' => $button_name, 'button_action' => $button_action);
            $contentjson = json_encode($content);

            $values = array(
                'page' => 'home',
                'section' => 'banner',
                'content' => $contentjson,
                'image' => $filePath,
            );
            Uidesign::insert($values);
            return back()->with('success_msg', 'Banner inserted successfully!');
        }
        public function deleteBanner($id)
        {
            $user = Uidesign::find($id);
            $user->delete();
            return back()->with('success_msg', 'Banner deleted successfully!');
        }
        public function editBanner($id){        
            $product = Uidesign::where(['id' => $id])->get();            
            if($product) {                    
                return view('dashboard/edit-banner-home')
                ->with('bannerData', $product);
            }else{   
                return false;      
            }
        }
        public function bannerUpdateHome(Request $request)
        {
           if ($request->hasFile('image')) {
                $imageName = rand().''.$request->file('image')->getClientOriginalName();
                $request->file('image')->move(
                    base_path() . '/images/banner/', $imageName
                );
                $filePath = 'images/banner/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');
            } 
            $main_heading   =   Input::get('main_heading');
            $sub_heading    =   Input::get('sub_heading');
            $button_name    =   Input::get('button_name');
            $button_action  =   Input::get('button_action');
            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading, 'button_name' => $button_name, 'button_action' => $button_action);
            $contentjson = json_encode($content);

            $data = array(
                'content' => $contentjson,
                'image' => $filePath,
                'active' => Input::get('active'),
                'updated_at' => date('Y-m-d H:i:s')
            );
            $id = Input::get('id');
               $result =  Uidesign::where(['id'=>$id])->update($data);
               if($result){
                    return back()->with('success_msg', 'Banner updated successfully!');
               }else{
                    return false;
               }
        }
        public function section2Update()
        {
            $product = Uidesign::where(['section' => 'section_2'])->get();
            if($product) {                    
                return view('dashboard/edit-section2-banner')
                ->with('section2', $product);
            }else{   
                return false;      
            }
        }
        public function section2UpdateHome(Request $request)
        {           
            $main_heading   =   Input::get('main_heading');
            $sub_heading    =   Input::get('sub_heading');
            $button_name    =   Input::get('button_name');
            $button_action  =   Input::get('button_action');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading, 'button_name' => $button_name, 'button_action' => $button_action);
            $contentjson = json_encode($content);

            $data = array(
                'content' => $contentjson,
                'active' => Input::get('active'),
                'updated_at' => date('Y-m-d H:i:s')
            );
            $id = Input::get('id');
               $result =  Uidesign::where(['id'=>$id])->update($data);
               if($result){
                    return back()->with('success_msg', 'Section 2 updated successfully!');
               }else{
                    return false;
               }
        }
        public function section3TextUpdate()
        {
            $product = Uidesign::where(['section' => 'section_3_text'])->get();
            if($product) {                    
                return view('dashboard/edit-section3-text')
                ->with('section3', $product);
            }else{   
                return false;      
            }
        }
        public function section3UpdateText(Request $request)
        {           
            $main_heading   =   Input::get('main_heading');
            $sub_heading    =   Input::get('sub_heading');            

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading);
            $contentjson = json_encode($content);

            $data = array(
                'content' => $contentjson,
                'active' => Input::get('active'),
                'updated_at' => date('Y-m-d H:i:s')
            );
               $id = Input::get('id');
               $result =  Uidesign::where(['id'=>$id])->update($data);
               if($result){
                    return back()->with('success_msg', 'Section 3 updated successfully!');
               }else{
                    return false;
               }
        }
        public function section3ImageUpdate(){
            $uidesign = Uidesign::where(['page' => 'home', 'section' => 'section_3_image'])->get();         

            return view('dashboard/edit-section3-image')
                ->with('section3', $uidesign);
        }
        public function deleteSection3Image($id)
        {
            $user = Uidesign::find($id);
            $user->delete();
            return back()->with('success_msg', 'Image deleted successfully!');
        }
        public function section3AddImage(Request $request)
        {
            $other_name   =   Input::get('other_name');         

            $filePath = '';      
            if ($request->hasFile('banner_image')) {
                $imageName = rand().''.$request->file('banner_image')->getClientOriginalName();
                $request->file('banner_image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                return false;
            }           

            $values = array(
                'page' => 'home',
                'section' => 'section_3_image',
                'content' => '',
                'other_name' => $other_name,
                'image' => $filePath,
            );
            Uidesign::insert($values);
            return back()->with('success_msg', 'Image inserted successfully!');
        }
        public function section3UpdateImage(Request $request)
        {
            $other_name   =   Input::get('other_name');         

            $filePath = '';      
            if ($request->hasFile('banner_image')) {
                $imageName = rand().''.$request->file('banner_image')->getClientOriginalName();
                $request->file('banner_image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');   
            }           

            $data = array(
                'other_name' => $other_name,
                'image' => $filePath,
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Image updated successfully!');
        }
        public function section4Update()
        {
            $uidesign = Uidesign::where(['page' => 'home', 'section' => 'section_4'])->get();         

            return view('dashboard/section4')
                ->with('section4', $uidesign);
        }
        public function section4UpdateData(Request $request)
        {
            $content      =   Input::get('content');
            $other_name   =   Input::get('other_name');
            $active   =   Input::get('active');

            $filePath = '';      
            if ($request->hasFile('image')) {
                $imageName = rand().''.$request->file('image')->getClientOriginalName();
                $request->file('image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');   
            }           

            $data = array(
                'content'   => $content,
                'other_name' => $other_name,
                'image' => $filePath,
                'active'   => $active
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Data updated successfully!');
        }
        public function bannerSectionAbout()
        {
            $uidesign = Uidesign::where(['page' => 'about', 'section' => 'banner'])->get();         

            return view('dashboard/banner-section-about')
                ->with('section1', $uidesign);
        }
        public function section1AboutUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading);
            $contentjson = json_encode($content);


            $filePath = '';      
            if ($request->hasFile('image')) {
                $imageName = rand().''.$request->file('image')->getClientOriginalName();
                $request->file('image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');   
            }           

            $data = array(
                'content'   => $contentjson,
                'image' => $filePath,
                'active'   => $active
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'About us page data updated successfully!');
        }
        public function Section2AboutEdit()
        {
            $uidesign = Uidesign::where(['page' => 'about', 'section' => 'section_2_edit'])->get();         

            return view('dashboard/section-2-about')
                ->with('section2', $uidesign);
        }
        public function section2AboutUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');
            $detail_text      =   Input::get('detail_text');
            $extra_text   =   Input::get('extra_text');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading, 'detail_text' => $detail_text, 'extra_text' => $extra_text);
            $contentjson = json_encode($content);


            $filePath = '';      
            if ($request->hasFile('image')) {
                $imageName = rand().''.$request->file('image')->getClientOriginalName();
                $request->file('image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');   
            }           

            $data = array(
                'content'   => $contentjson,
                'image' => $filePath,
                'active'   => $active 
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'About us page data updated successfully!');
        }
        public function Section3AboutEdit()
        {
            $uidesign = Uidesign::where(['page' => 'about', 'section' => 'section_3_edit'])->get();         

            return view('dashboard/section3-about-edit')
                ->with('section3', $uidesign);
        }
        public function section3AboutUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading       =   Input::get('sub_heading');
            $figure1           =   Input::get('figure1');
            $figure1_text      =   Input::get('figure1_text');
            $figure2           =   Input::get('figure2');
            $figure2_text      =   Input::get('figure2_text');
            $figure3           =   Input::get('figure3');
            $figure3_text      =   Input::get('figure3_text');
            $figure4           =   Input::get('figure4');
            $figure4_text      =   Input::get('figure4_text');

            $active            =   Input::get('active');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading, 
                'figure1' => $figure1, 'figure1_text' => $figure1_text, 'figure2' => $figure2, 'figure2_text' => $figure2_text, 'figure3' => $figure3, 'figure3_text' => $figure3_text, 'figure4' => $figure4, 'figure4_text' => $figure4_text);
            $contentjson = json_encode($content);

            $data = array(
                'content'   => $contentjson,
                'active'   => $active
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'About us page data updated successfully!');
        }
        public function bannerSectionContact()
        {
            $uidesign = Uidesign::where(['page' => 'contact', 'section' => 'banner'])->get();         

            return view('dashboard/banner-section-contact')
                ->with('section1', $uidesign);
        }
        public function section1ContactUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading);
            $contentjson = json_encode($content);


            $filePath = '';      
            if ($request->hasFile('image')) {
                $imageName = rand().''.$request->file('image')->getClientOriginalName();
                $request->file('image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');   
            }           

            $data = array(
                'content'   => $contentjson,
                'image' => $filePath,
                'active'   => $active
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Contact us page data updated successfully!');
        }
        public function Section2ContactEdit()
        {
            $uidesign = Uidesign::where(['page' => 'contact', 'section' => 'section_2'])->get();         

            return view('dashboard/section2-contact-edit')
                ->with('section2', $uidesign);
        }
        public function section2ContactUpdate(Request $request)
        {
            $main_heading_left            =   Input::get('main_heading_left');
            $sub_heading_left             =   Input::get('sub_heading_left');
            $main_heading_right           =   Input::get('main_heading_right');
            $sub_heading_right            =   Input::get('sub_heading_right');
            $phone                        =   Input::get('phone');
            $email                        =   Input::get('email');
            $inquiry                      =   Input::get('inquiry');
            $work                         =   Input::get('work');
            $feedback                     =   Input::get('feedback');
            $alliance                     =   Input::get('alliance');

            $active                       =   Input::get('active');

            $content = array('main_heading_left' => $main_heading_left, 'sub_heading_left' => $sub_heading_left, 'main_heading_right' => $main_heading_right, 'sub_heading_right' => $sub_heading_right, 'phone' => $phone, 'email' => $email, 'inquiry' => $inquiry, 'work' => $work, 'feedback' => $feedback, 'alliance' => $alliance);

            $contentjson = json_encode($content);

            $data = array(
                'content'   => $contentjson,
                'active'   => $active
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Contact us page data updated successfully!');
        }
        public function bannerSectionEsta()
        {
            $uidesign = Uidesign::where(['page' => 'esta', 'section' => 'banner'])->get();         

            return view('dashboard/banner-section-esta')
                ->with('section1', $uidesign);
        }
        public function section1EstaUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading);
            $contentjson = json_encode($content);


            $filePath = '';      
            if ($request->hasFile('image')) {
                $imageName = rand().''.$request->file('image')->getClientOriginalName();
                $request->file('image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');   
            }           

            $data = array(
                'content'   => $contentjson,
                'image' => $filePath,
                'active'   => $active
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Esta page data updated successfully!');
        }
        public function bannerSectionEmbassyInfo()
        {
            $uidesign = Uidesign::where(['page' => 'embassyInfo', 'section' => 'banner'])->get();         

            return view('dashboard/banner-section-embassy-info')
                ->with('section1', $uidesign);
        }
        public function section1EmbassyInfoUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading);
            $contentjson = json_encode($content);


            $filePath = '';      
            if ($request->hasFile('image')) {
                $imageName = rand().''.$request->file('image')->getClientOriginalName();
                $request->file('image')->move(
                    base_path() . '/images/', $imageName
                );
                $filePath = 'images/'.$imageName;
            }else{
                $filePath = Input::get('previous_image');   
            }           

            $data = array(
                'content'   => $contentjson,
                'image' => $filePath,
                'active'   => $active
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Embassy Info page data updated successfully!');
        }
        public function Section2EstaEdit()
        {
            $uidesign = Uidesign::where(['page' => 'esta', 'section' => 'section_2'])->get();         

            return view('dashboard/section-2-esta')
                ->with('section2', $uidesign);
        }
        public function section2EstaUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');
            $detail_text      =   Input::get('detail_text');
            $extra_text   =   Input::get('extra_text');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading, 'detail_text' => $detail_text, 'extra_text' => $extra_text);
            $contentjson = json_encode($content);
        

            $data = array(
                'content'   => $contentjson,
                'active'   => $active 
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Esta page data updated successfully!');
        }
        public function Section2EmbassyInfoEdit()
        {
            $uidesign = Uidesign::where(['page' => 'embassyInfo', 'section' => 'section_2'])->get();         

            return view('dashboard/section2-embassy-info-edit')
                ->with('section2', $uidesign);
        }
        public function section2EmbassyInfoUpdate(Request $request)
        {
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');
            $detail_text      =   Input::get('detail_text');
            $extra_text   =   Input::get('extra_text');

            $content = array('main_heading' => $main_heading, 'sub_heading' => $sub_heading, 'detail_text' => $detail_text, 'extra_text' => $extra_text);
            $contentjson = json_encode($content);
        

            $data = array(
                'content'   => $contentjson,
                'active'   => $active 
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=>$id])->update($data);
            return back()->with('success_msg', 'Embassy page data updated successfully!');
        }
        
       public function visaTextUpdate(Request $request){
            $main_heading      =   Input::get('main_heading');
            $sub_heading   =   Input::get('sub_heading');
            $active   =   Input::get('active');
            $page      =   Input::get('page');

            $final_data = AppHelper::dataReady($sub_heading);
            $content = array('main_heading' => $main_heading, 'sub_heading' => $final_data);
            $contentjson = json_encode($content);
         
            $data = array(
                'content'   => $contentjson,
                'page'      => $page,
                'active'   => $active 
            );
            $id   =   Input::get('id'); 
            $result =  Uidesign::where(['id'=> $id])->update($data);
            return back()->with('success_msg', 'Visa text updated successfully!');
        }
        
}