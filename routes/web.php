<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'enquiryController@homePage'); 
Route::get('home', 'enquiryController@homePage'); 
Route::get('about', 'enquiryController@aboutUsPage'); 
Route::get('contact-us', 'enquiryController@contactUsPage');
Route::get('esta', 'enquiryController@estaPage');
Route::get('embassy-info', 'enquiryController@embassyInfoPage'); 
Route::get('application-step-one', 'enquiryController@applicationStepOne'); 
Route::get('application-step-two', 'enquiryController@applicationStepTwo'); 
Route::get('application-step-three', 'enquiryController@applicationStepThree');

Route::get('/talk-to-our-expert', function () {
    return view('404');
});
Route::get('/B1', function () {
    return view('application-step-one');
});
Route::get('/B2', function () {
    return view('application-step-one');
});
Route::get('/B1-B2', function () {
    return view('application-step-one');
});
Route::get('/J1', function () {
    return view('application-step-one');
});
Route::get('/F1', function () {
    return view('application-step-one');
});
Route::get('/C1-D', function () {
    return view('application-step-one');
});
Route::get('/terms-and-condition', function () {
    return view('404');
});
Route::get('/privacy-policy', function () {
    return view('404');
});
Route::get('/faq', function () {
    return view('404');
});

Route::post('contact', ['as' => 'contact.insert', 'uses' => 'enquiryController@contactEnquiry']);
Route::post('personal-information', ['as' => 'personalInformation.update', 'uses' => 'enquiryController@personalInformationUpdate']);
Route::post('additional-information', ['as' => 'additionalInformation.update', 'uses' => 'enquiryController@additionalInformationUpdate']); 
Route::post('additional-question', ['as' => 'additionalQuestion.update', 'uses' => 'enquiryController@additionalQuestionUpdate']); 




Auth::routes();
Route::get('/dashboard', 'adminHomeController@index')->name('dashboard');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::group([
    'middleware' => 'auth',
], function() { 
	Route::get('contact-enquiry', 'adminEnquiryController@contactEnquiryList'); 
	Route::get('contact-enquiry-trash/{id}', 'adminEnquiryController@trashContactEnquiry');
	Route::post('update-status', ['as' => 'contact.updateStatus', 'uses' => 'adminEnquiryController@updateStatus']); 

	Route::get('banner-section-home', 'adminHomeController@bannerSectionHomeList'); 
	Route::get('add-banner-home', function () {
	    return view('dashboard/add-banner-home');
	});
	Route::post('bannerAddHome', ['as' => 'bannerAddHome.insert', 'uses' => 'adminHomeController@bannerAddHome']);
	Route::get('banner-trash/{id}', 'adminHomeController@deleteBanner'); 
	Route::get('banner-edit/{id}', 'adminHomeController@editBanner'); 
	Route::post('bannerUpdate', ['as' => 'bannerUpdate.update', 'uses' => 'adminHomeController@bannerUpdateHome']);
	Route::get('section2-edit', 'adminHomeController@section2Update');
	Route::post('section2Updates', ['as' => 'section2.update', 'uses' => 'adminHomeController@section2UpdateHome']);
	Route::get('section3-text', 'adminHomeController@section3TextUpdate');
	Route::post('section3UpdateText', ['as' => 'section3Text.update', 'uses' => 'adminHomeController@section3UpdateText']);
	Route::get('section3-image', 'adminHomeController@section3ImageUpdate'); 
	Route::get('section3-trash/{id}', 'adminHomeController@deleteSection3Image');
	Route::post('section3AddImage', ['as' => 'section3AddImage.insert', 'uses' => 'adminHomeController@section3AddImage']);
	Route::post('section3UpdateImage', ['as' => 'section3UpdateImage.insert', 'uses' => 'adminHomeController@section3UpdateImage']);
	Route::get('section4-edit', 'adminHomeController@section4Update');
	Route::post('section4Update', ['as' => 'section4Update.update', 'uses' => 'adminHomeController@section4UpdateData']);
	Route::get('visa-edit', 'adminHomeController@visaUpdate');
	Route::post('visa-updates', ['as' => 'visa.update', 'uses' => 'adminHomeController@VisaUpdateHome']);


	Route::get('banner-section-about', 'adminHomeController@bannerSectionAbout'); 
	Route::post('section1-about-update', ['as' => 'section1AboutUpdate.update', 'uses' => 'adminHomeController@section1AboutUpdate']);

	Route::get('section2-about-edit', 'adminHomeController@Section2AboutEdit');
	Route::post('section2-about-update', ['as' => 'section2AboutUpdate.update', 'uses' => 'adminHomeController@section2AboutUpdate']); 

	Route::get('section3-about-edit', 'adminHomeController@Section3AboutEdit');
	Route::post('section3-about-update', ['as' => 'section3AboutUpdate.update', 'uses' => 'adminHomeController@section3AboutUpdate']); 

	Route::get('banner-section-contact', 'adminHomeController@bannerSectionContact'); 
	Route::post('section1-contact-update', ['as' => 'section1ContactUpdate.update', 'uses' => 'adminHomeController@section1ContactUpdate']);

	Route::get('section2-contact-edit', 'adminHomeController@Section2ContactEdit');
	Route::post('section2-contact-update', ['as' => 'section2ContactUpdate.update', 'uses' => 'adminHomeController@section2ContactUpdate']); 

	Route::get('banner-section-esta', 'adminHomeController@bannerSectionEsta'); 
	Route::post('section1-esta-update', ['as' => 'section1EstaUpdate.update', 'uses' => 'adminHomeController@section1EstaUpdate']);
	Route::get('section2-esta-edit', 'adminHomeController@Section2EstaEdit');
	Route::post('section2-esta-update', ['as' => 'section2EstaUpdate.update', 'uses' => 'adminHomeController@section2EstaUpdate']);

	Route::get('banner-section-embassy-info', 'adminHomeController@bannerSectionEmbassyInfo'); 
	Route::post('section1-embassy-info-update', ['as' => 'section1EmbassyInfoUpdate.update', 'uses' => 'adminHomeController@section1EmbassyInfoUpdate']);
	Route::get('section2-embassy-info-edit', 'adminHomeController@Section2EmbassyInfoEdit');
	Route::post('section2-embassy-info-update', ['as' => 'section2EmbassyInfoUpdate.update', 'uses' => 'adminHomeController@section2EmbassyInfoUpdate']);


	Route::get('visa-enquiry', 'adminEnquiryController@visaEnquiryList');
	Route::get('visa-enquiry-trash/{id}', 'adminEnquiryController@deleteVisaEnquiry');

	Route::get('application-step-one-view/{id}', 'adminEnquiryController@applicationStepOneDetail'); 
	Route::get('application-step-two-view/{id}', 'adminEnquiryController@applicationStepTwoDetail');
	Route::get('application-step-three-view/{id}', 'adminEnquiryController@applicationStepThreeDetail');
});

