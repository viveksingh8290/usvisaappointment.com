
<?php $__env->startSection('meta_description'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>     
<section class="stepwiz">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="<?php echo e(url('application-step-one')); ?>" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Step 1</p>
            </div>
            <div class="stepwizard-step">
                <a href="<?php echo e(url('application-step-two')); ?>" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Step 2</p>
            </div>
            <div class="stepwizard-step">
                <a href="<?php echo e(url('application-step-three')); ?>" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Step 3</p>
            </div>
        </div>
    </div>
</section>
<?php
    if(!isset($_COOKIE['temp_user_id'])) {
            $cookie_name = "temp_user_id";
            $cookie_value = rand();
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
    } 
?>
<?php echo Form::open(['route' => ['personalInformation.update'], 'id' => 'personalInformationUpdate', 'method' => 'post', 'files' => true]); ?>

<?php
    $first_name = '';
    $middle_name = '';
    $last_name = '';
    $name_native = '';
    $date_of_birth = '';
    $gender = '';
    $email = '';
    $birth_country = '';
    $birth_state = '';
    $birth_city = '';
    $nationality = '';
    $marital_status = '';
    $father_first_name = '';
    $father_middle_name = '';
    $father_last_name = '';
    $mother_first_name = '';
    $mother_middle_name = '';
    $mother_last_name = '';
    $father_name_native = '';
    $father_date_of_birth = '';
    $mother_date_of_birth  = '';
    $citizen_status = '';
    $nationality  = '';
    $other_relative = '';
    $phone_no = '';
    $secondary_no = '';
    $address = '';
    $appartment_no = ''; 
    $city = '';
    $country  = '';
    $aircraft_job_title = '';
    $company_that_owns_the_aircraft = '';
    $position_using_arecruiting = '';
    $crew_agency_name = '';
    $crew_contact_name = '';
    $crew_street = '';
    $crew_city = '';
    $crew_state = '';
    $crew_postal = '';
    $crew_country = '';
    $crew_telephone_number = '';
    $are_you_serving_aboard = '';
    $vessel_name = '';
    $vessel_identification_number = '';
    $passport_number = '';
    $passport_expiry_date = '';
    $passport_issue_date = '';
    $place_of_birth = '';
    $place_of_issue = '';
    $issuing_authority = '';
    $user_id = rand();
    ?>
<?php if(!empty($PersonalInfo)): ?>
<?php $__currentLoopData = $PersonalInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personal_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    // personal info
    
        $first_name  =   $personal_data->first_name;
        $middle_name    =   $personal_data->middle_name;
        $last_name    =   $personal_data->last_name;
        $name_native    =   $personal_data->name_native;
        $date_of_birth  =   $personal_data->date_of_birth;
        $gender      =   $personal_data->gender;
        $email        =   $personal_data->email;
        $birth_country  =   $personal_data->birth_country;
        $birth_state    =   $personal_data->birth_state;
        $birth_city  =   $personal_data->birth_city;
        $nationality    =   $personal_data->nationality;
        $marital_status =   $personal_data->marital_status;
        $user_id        =   $personal_data->user_id;
    ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(!empty($ParentsInfo)): ?>
<?php $__currentLoopData = $ParentsInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personal_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    // parents info
    
    $father_first_name  =   $personal_data->father_first_name;
    $father_middle_name =   $personal_data->father_middle_name;
    $father_last_name   =   $personal_data->father_last_name;
    $mother_first_name  =   $personal_data->mother_first_name;
    $mother_middle_name =   $personal_data->mother_middle_name;
    $mother_last_name   =   $personal_data->mother_last_name;
    $father_name_native =   $personal_data->father_name_native;
    $father_date_of_birth   =   $personal_data->father_date_of_birth;
    $mother_date_of_birth   =   $personal_data->mother_date_of_birth;
    $citizen_status =   $personal_data->citizen_status;
    $nationality    =   $personal_data->nationality;
    $other_relative =   $personal_data->other_relative;
    ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?> 
<?php if(!empty($ContactInfo)): ?>
<?php $__currentLoopData = $ContactInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personal_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php   
    // contact info
    $phone_no  =   $personal_data->phone_no;
    $secondary_no =   $personal_data->secondary_no;
    $address   =   $personal_data->address;
    $appartment_no  =   $personal_data->appartment_no;
    $city =   $personal_data->city;
    $country   =   $personal_data->country;             
    ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(!empty($CrewInfo)): ?>
<?php $__currentLoopData = $CrewInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crew_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    $aircraft_job_title = $crew_data->aircraft_job_title;
    $company_that_owns_the_aircraft = $crew_data->company_that_owns_the_aircraft;
    $position_using_arecruiting = $crew_data->position_using_arecruiting;
    $crew_agency_name = $crew_data->crew_agency_name;
    $crew_contact_name = $crew_data->crew_contact_name;
    $crew_street = $crew_data->crew_street;
    $crew_city = $crew_data->crew_city;
    $crew_state = $crew_data->crew_state;
    $crew_postal = $crew_data->crew_postal;
    $crew_country = $crew_data->crew_country;
    $crew_telephone_number = $crew_data->crew_telephone_number;
    $are_you_serving_aboard = $crew_data->are_you_serving_aboard;
    $vessel_name = $crew_data->vessel_name;
    $vessel_identification_number = $crew_data->vessel_identification_number;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(!empty($PassportInfo)): ?>
<?php $__currentLoopData = $PassportInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passport_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
    $passport_number = $passport_data->passport_number;
    $passport_expiry_date = $passport_data->passport_expiry_date;
    $passport_issue_date = $passport_data->passport_issue_date;
    $place_of_birth = $passport_data->place_of_birth;
    $place_of_issue = $passport_data->place_of_issue;
    $issuing_authority = $passport_data->issuing_authority;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="wrapper">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
                    <p class="lead">APPLICANT PERSONAL INFORMATION</p>
                    <div class="enquiry-form">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="email">Name<span class="required">*</span> (As Per Passport)</label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="first_name">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo e($first_name); ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name" value="<?php echo e($middle_name); ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="last_name">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo e($last_name); ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Full name in native alphabet</label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="native_name" name="native_name" placeholder="Full name in native alphabet" value="<?php echo e($name_native); ?>">
                            </div>
                            <?php
                                $DOB_Day = '';
                                $DOB_Month = '';
                                $DOB_Year = '';
                                if($date_of_birth != ''){
                                    $date = explode('-', $date_of_birth);
                                    $DOB_Day = $date[0];
                                    $DOB_Month = $date[1];
                                    $DOB_Year = $date[2];
                                }
                                
                                
                                ?>
                            <div class="form-group col-md-2">
                                <label for="email">Date of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Day">Day<span class="required">*</span></label>
                                <select name="DOB_Day" style="width: 100%; height: 32px;">
                                    <?php
                                        for ($i=1; $i < 32; $i++) { 
                                           ?>
                                    <option value="<?php echo e($i); ?>" <?php if($DOB_Day == $i){ echo 'selected'; }?>><?php echo $i; ?></option>
                                    <?php
                                        }
                                        
                                        ?>                        
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="DOB_Month">Month<span class="required">*</span></label>
                                <select name="DOB_Month" style="width: 100%; height: 32px;">
                                    <?php
                                        foreach (config('constants.month_name') as $key => $value) {
                                            ?>
                                    <option value="<?php echo $value;?>" <?php if($DOB_Month == $value){ echo 'selected'; }?>><?php echo $value;?></option>
                                    <?php
                                        }
                                        ?>                                
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="DOB_Year">Year<span class="required">*</span></label>
                                <input type="text" name="DOB_Year" id="DOB_Year" class="form-control" minlength="4" maxlength="4" value="<?php echo e($DOB_Year); ?>">                           
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Gender<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="radio" name="user_gender" value="male" <?php if($gender == 'male'){ echo 'checked';}?>> Male
                                <input type="radio" name="user_gender" value="female" <?php if($gender == 'female'){ echo 'checked';}?>> Female
                                <input type="radio" name="user_gender" value="other" <?php if($gender == 'other'){ echo 'checked';}?>> Other
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Personal Email id<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" value="<?php echo e($email); ?>" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="user_confirm_email">Confirm Email <span class="required">*</span></label>
                                <input type="email" class="form-control" id="user_confirm_email" name="user_confirm_email" placeholder="Confirm Email" value="<?php echo e($email); ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Place">Place of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="Country">country<span class="required">*</span></label>
                                <input type="text" name="country_name" placeholder="country" class="form-control" onchange="fetchCountry(this.value)" value="<?php echo e($birth_country); ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">state<span class="required">*</span></label>
                                <input type="text" name="state_name" placeholder="state" class="form-control" value="<?php echo e($birth_state); ?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">City<span class="required">*</span></label>
                                <input type="text" name="city_name" placeholder="city" class="form-control" value="<?php echo e($birth_city); ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Nationality<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" name="nationality_name" placeholder="Nationality" class="form-control" value="<?php echo e($nationality); ?>">                              
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Marital Status<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <select name="marital_status" style="width: 100%; height: 32px;">
                                    <option value="Single" <?php if($marital_status == 'Single'){ echo 'selected'; } ?>>SINGLE</option>
                                    <option value="Married" <?php if($marital_status == 'Married'){ echo 'selected'; } ?>>MARRIED</option>
                                    <option value="Common law Marriage" <?php if($marital_status == 'Common law Marriage'){ echo 'selected'; } ?>>COMMON LAW MARRIAGE</option>
                                    <option value="Civil Union / Domestic Partnership" <?php if($marital_status == 'Civil Union / Domestic Partnership'){ echo 'selected'; } ?>>CIVIL UNION&nbsp;/ DOMESTIC PARTNERSHIP</option>
                                    <option value="Widowed" <?php if($marital_status == 'Widowed'){ echo 'selected'; } ?>>WIDOWED</option>
                                    <option value="Divorced" <?php if($marital_status == 'Divorced'){ echo 'selected'; } ?>>DIVORCED</option>
                                    <option value="Seperated" <?php if($marital_status == 'Seperated'){ echo 'selected'; } ?>>SEPARATED</option>
                                    <option value="Other" <?php if($marital_status == 'Other'){ echo 'selected'; } ?>>OTHER</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
                    <p class="lead">INFORMATION ABOUT YOUR PARENTS</p>
                    <div class="enquiry-form">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="email">Father's Name<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="father_first_name">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="father_first_name" name="father_first_name" placeholder="First Name" value="<?php echo e($father_first_name); ?>" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="father_middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="father_middle_name" name="father_middle_name" placeholder="Middle Name" value="<?php echo e($father_middle_name); ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="father_last_name">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="father_last_name" name="father_last_name" placeholder="Last Name" value="<?php echo e($father_last_name); ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Full name in native alphabet</label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="father_name_native" name="father_name_native" placeholder="Full name in native alphabet" value="<?php echo e($father_name_native); ?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Father's Date of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Know Birth Date?<span class="required"></span></label>
                            </div>
                            <div class="form-group col-md-8">
                                <input type="radio" name="know_father_birth" value="1" id="yes_father_birth"> Yes
                                <input type="radio" name="know_father_birth" value="0" id="no_father_birth"> No
                            </div>
                            <?php
                                $f_DOB_Day = '';
                                $f_DOB_Month = '';
                                $f_DOB_Year = '';
                                if($father_date_of_birth != ''){
                                    $date = explode('-', $father_date_of_birth);
                                    $f_DOB_Day = $date[0];
                                    $f_DOB_Month = $date[1];
                                    $f_DOB_Year = $date[2];
                                }
                            ?>
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-3">
                                <label for="Day" class=" father_birth">Day<span class="required">*</span></label>
                                <select name="father_DOB_Day" style="width: 100%; height: 32px;" class=" father_birth">
                                    <?php
                                        for ($i=1; $i < 32; $i++) { 
                                           ?>
                                    <option value="<?php echo e($i); ?>"  <?php if($f_DOB_Day == $i){ echo 'selected'; }?>><?php echo $i; ?></option>
                                    <?php
                                        }
                                        
                                        ?>                        
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="father_DOB_Month" class=" father_birth">Month<span class="required">*</span></label>
                                <select name="father_DOB_Month" style="width: 100%; height: 32px;" class=" father_birth">
                                    <?php
                                        foreach (config('constants.month_name') as $key => $value) {
                                            ?>
                                    <option value="<?php echo $value;?>" <?php if($f_DOB_Month == $value){ echo 'selected'; }?>><?php echo $value;?></option>
                                    <?php
                                        }
                                        ?>                                
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="father_DOB_Year" class=" father_birth">Year<span class="required">*</span></label>
                                <input type="text" name="father_DOB_Year" id="father_DOB_Year" class="form-control father_birth" minlength="4" maxlength="4" value="<?php echo e($f_DOB_Year); ?>">                          
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Citizen Status<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" name="father_citizen_status" id="father_citizen_status" class="form-control" placeholder="Citizen Country Name" value="<?php echo e($citizen_status); ?>">   
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Mother's Name<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="mother_first_name">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="mother_first_name" name="mother_first_name" placeholder="First Name" value="<?php echo e($mother_first_name); ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="mother_middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="mother_middle_name" name="mother_middle_name" placeholder="Middle Name" value="<?php echo e($mother_middle_name); ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="mother_last_name">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="mother_last_name" name="mother_last_name" placeholder="Last Name" value="<?php echo e($mother_last_name); ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Mother's Date of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Know Birth Date?<span class="required"></span></label>
                            </div>
                            <div class="form-group col-md-8">
                                <input type="radio" name="know_mother_birth" value="1" id="yes_mother_birth"> Yes
                                <input type="radio" name="know_mother_birth" value="0" id="no_mother_birth"> No
                            </div>
                            <div class="form-group col-md-2"></div>
                            <?php
                                $m_DOB_Day = '';
                                $m_DOB_Month = '';
                                $m_DOB_Year = '';
                                if($mother_date_of_birth != ''){
                                    $date = explode('-', $mother_date_of_birth);
                                    $m_DOB_Day = $date[0];
                                    $m_DOB_Month = $date[1];
                                    $m_DOB_Year = $date[2];
                                }                             
                                
                                ?>
                            <div class="form-group col-md-3">
                                <label for="Day" class="mother_birth">Day<span class="required">*</span></label>
                                <select name="mother_DOB_Day" style="width: 100%; height: 32px;" class="mother_birth">
                                    <?php
                                        for ($i=1; $i < 32; $i++) { 
                                           ?>
                                    <option value="<?php echo e($i); ?>" <?php if($m_DOB_Day == $i){ echo 'selected'; }?>><?php echo $i; ?></option>
                                    <?php
                                        }
                                        
                                        ?>                        
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="mother_DOB_Month" class="mother_birth">Month<span class="required">*</span></label>
                                <select name="mother_DOB_Month" style="width: 100%; height: 32px;" class="mother_birth">
                                    <?php
                                        foreach (config('constants.month_name') as $key => $value) {
                                            ?>
                                    <option value="<?php echo $value;?>" <?php if($m_DOB_Month == $value){ echo 'selected'; }?>><?php echo $value;?></option>
                                    <?php
                                        }
                                        ?>                                
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="mother_DOB_Year" class="mother_birth">Year<span class="required">*</span></label>
                                <input type="text" name="mother_DOB_Year" id="mother_DOB_Year" class="form-control mother_birth" minlength="4" maxlength="4" value="<?php echo e($m_DOB_Year); ?>">                          
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Do you have any other relatives in the United States?<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="radio" name="other_relative" value="1" <?php if($other_relative == 1){ echo 'checked';}?>> Yes
                                <input type="radio" name="other_relative" value="0" <?php if($other_relative == 0){ echo 'checked';}?>> No
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Nationality<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" name="parents_nationality" id="parents_nationality" class="form-control" value="<?php echo e($nationality); ?>">  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
                    <p class="lead">CONTACT INFORMATION</p>
                    <p>Address of the Person Applying for the Visa</p>
                    <div class="enquiry-form">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="email">Phone Number<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number" value="<?php echo e($phone_no); ?>"  style="width: 40%;">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Secondary/work phone numbers<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="other_number" name="other_number" placeholder="Phone Number"  style="width: 40%;" value="<?php echo e($secondary_no); ?>">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Address">Home Address <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="home_address" name="home_address" value="<?php echo e($address); ?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Address">
                                <label for="Address">Apartment/Suite/Unit Number <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="apartment" name="apartment" value="<?php echo e($appartment_no); ?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Address">
                                <label for="Address">City<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="city_add" name="city_add" value="<?php echo e($city); ?>" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Address">
                                <label for="Address">Country<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="country_add" name="country_add" value="<?php echo e($country); ?>" >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
                    <p class="lead">Passport Information</p>
                    <div class="enquiry-form">
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="email">Passport Number: <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="passport_number" name="passport_number" placeholder="Job title">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Passport Expiry Date: <span class="required">*</span>
                                </label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="date" class="form-control" id="passport_expiry_date" name="passport_expiry_date">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Passport Issue Date: <span class="required">*</span>
                                </label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="date" class="form-control" id="passport_issue_date" name="passport_issue_date">
                            </div>                        
                            <div class="form-group col-md-2">
                                <label for="Address">Place of birth:  <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="place_of_birth" name="place_of_birth" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Address">Place of issue:  <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="place_of_issue" name="place_of_issue"  >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Address">Issuing Authority: <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="issuing_authority" name="issuing_authority"  >
                            </div>                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <?php
        if(isset($_COOKIE['url_path']) && $_COOKIE['url_path'] == "c1d" && $_SERVER['REQUEST_URI'] == "/C1-D") {
            ?>
                <div class="content">
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
                                <p class="lead">Crew Visa Information</p>
                                <div class="enquiry-form">
                                    <div class="form-row">
                                        <div class="form-group col-md-2">
                                            <label for="email">Specific job title aboard aircraft or vessel: <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" class="form-control" id="aircraft_job_title" name="aircraft_job_title" placeholder="Job title">
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="email">Name of company that owns the aircraft or vessel you will be working on: <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="text" class="form-control" id="company_that_owns_the_aircraft" name="company_that_owns_the_aircraft" placeholder="Name" >
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="email">Did you acquire your position using arecruiting/manning/crewing agency? <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="radio" name="position_using_arecruiting" value="Yes" id="yes_agency"> Yes
                                            <input type="radio" name="position_using_arecruiting" value="No" id="no_agency"> No
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">Agency Name:  <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_agency_name" name="crew_agency_name" >
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">Contact Name:  <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_contact_name" name="crew_contact_name"  >
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">Street Address: <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_street" name="crew_street"  >
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">City: <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_city" name="crew_city"  >
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">State/Province: <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_state" name="crew_state" >
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">Postal Zone/ZIP : <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_postal" name="crew_postal"  >
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">Country/Region:  <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_country" name="crew_country" >
                                        </div>
                                        <div class="form-group col-md-2 agency">
                                            <label for="Address" class="agency">Telephone Number: <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 agency">
                                            <input type="text" class="form-control agency" id="crew_telephone_number" name="crew_telephone_number"  >
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="are_you_serving_aboard">Are you serving aboard a seagoing ship or vessel?  <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9">
                                            <input type="radio" name="are_you_serving_aboard" value="Yes" id="yes_abroad"> Yes
                                            <input type="radio" name="are_you_serving_aboard" value="No" id="no_abroad"> No
                                        </div>
                                        <div class="form-group col-md-2 abroad">
                                            <label for="vessel_name" class="abroad">Seagoing Ship/Vessel Name:  <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 abroad">
                                            <input type="text" class="form-control abroad" id="vessel_name" name="vessel_name"  >
                                        </div>
                                        <div class="form-group col-md-2 abroad">
                                            <label for="vessel_identification_number" class="abroad">Seagoing Ship/Vessel Identification Number: <span class="required">*</span></label>
                                        </div>
                                        <div class="form-group col-md-9 abroad">
                                            <input type="text" class="form-control abroad" id="vessel_identification_number" name="vessel_identification_number"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
    ?>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 clr" style="text-align: center;">
                    <input type="hidden" name="temp_user_id" value="<?php echo $user_id; ?>">
                    <button type="submit" class="btn btn-default" style="text-align: center;">CONTINUE TO STEP 2</button>
                </div>
            </div>
        </div>
    </div>  
</div>
<?php echo Form::close(); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#no_father_birth").click(function(){         
            $(".father_birth").removeAttr("required");
            $(".father_birth").css({"display": "none"});
        });
        $("#yes_father_birth").click(function(){            
            $(".father_birth").attr("required", "true");
            $(".father_birth").css({"display": "inline"});
        });
    });
    $(document).ready(function() {
        $("#no_mother_birth").click(function(){         
            $(".mother_birth").removeAttr("required");
            $(".mother_birth").css({"display": "none"});
        });
        $("#yes_mother_birth").click(function(){            
            $(".mother_birth").attr("required", "true");
            $(".mother_birth").css({"display": "inline"});
        });
    });
    $(document).ready(function() {
        $("#no_agency").click(function(){         
            $(".agency").removeAttr("required");
            $(".agency").css({"display": "none"});
        });
        $("#yes_agency").click(function(){            
            $(".agency").attr("required", "true");
            $(".agency").css({"display": "inline"});
        });
    });
    $(document).ready(function() {
        $("#no_abroad").click(function(){         
            $(".abroad").removeAttr("required");
            $(".abroad").css({"display": "none"});
        });
        $("#yes_abroad").click(function(){            
            $(".abroad").attr("required", "true");
            $(".abroad").css({"display": "inline"});
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $(document).ready(function () {
    
    var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');
    
    allWells.hide();
    
    navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);
    
      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
    });
    
    allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
          curInputs = curStep.find("input[type='text'],input[type='url']"),
          isValid = true;
    
      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }
    
      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
    });
    
    $('div.setup-panel div a.btn-primary').trigger('click');
    });
    
    function fetchCountry(country) {
       alert(country);
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usvisbbi/public_html/resources/views/application-step-one.blade.php ENDPATH**/ ?>