<?php $__env->startSection('meta_description'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>	 
<section class="stepwiz">
	<div class="stepwizard">
		<div class="stepwizard-row setup-panel">
			<div class="stepwizard-step">
				<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
				<p>Step 1</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
				<p>Step 2</p>
			</div>
			<div class="stepwizard-step">
				<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
				<p>Step 3</p>
			</div>
		</div>
	</div>
</section>
<form>
<?php
    $addn_embassy = '';
    $addn_student = '';
    $addn_school = '';
    $addn_street_address = '';
    $addn_city = '';
    $addn_state = '';
    $addn_country = '';
    $addn_major = '';
    $addn_duties = '';
    $addn_working = '';
    $addn_working_desc = '';
    $addn_occupation = '';
    $addn_employer = '';
    $addn_employer_address = '';
    $addn_employer_unit_number = '';
    $addn_emp_city = '';
    $addn_emp_state = '';
    $addn_emp_zip = '';
    $addn_emp_country = '';
    $addn_duties_desc = '';
    $addn_income = '';
    $addn_prev_emp = '';
    $addn_prev_emp_name = '';
    $addn_prev_emp_title = '';
    $addn_prev_emp_duties = '';
    $addn_prev_emp_supervisor = '';
    $addn_prev_emp_city = '';
    $addn_prev_emp_super_name = '';
    $addn_prev_emp_address = '';
    $addn_apartment = '';
    $addn_apartment_city = '';
    $addn_apartment_state = '';
    $addn_academic = '';
    $addn_academic_name = '';
    $addn_academic_address = '';
    $addn_academic_city = '';
    $addn_academic_state = '';
    $addn_academic_country = '';
    $addn_academic_major = '';
    $addn_academic_duties = '';
	$user_id = rand();
?>
<?php if(!empty($AddQues)): ?>
	<?php $__currentLoopData = $AddQues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $add_ques): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php
                $addn_embassy = $add_ques->addn_embassy;
                $addn_student = $add_ques->addn_student;
                $addn_school = $add_ques->addn_school;
                $addn_street_address = $add_ques->addn_street_address;
                $addn_city = $add_ques->addn_city;
                $addn_state = $add_ques->addn_state;
                $addn_country = $add_ques->addn_country;
                $addn_major = $add_ques->addn_major;
                $addn_duties = $add_ques->addn_duties;
                $addn_working = $add_ques->addn_working;
                $addn_working_desc = $add_ques->addn_working_desc;
                $addn_occupation = $add_ques->addn_occupation;
                $addn_employer = $add_ques->addn_employer;
                $addn_employer_address = $add_ques->addn_employer_address;
                $addn_employer_unit_number = $add_ques->addn_employer_unit_number;
                $addn_emp_city = $add_ques->addn_emp_city;
                $addn_emp_state = $add_ques->addn_emp_state;
                $addn_emp_zip = $add_ques->addn_emp_zip;
                $addn_emp_country = $add_ques->addn_emp_country;
                $addn_duties_desc = $add_ques->addn_duties_desc;
                $addn_income = $add_ques->addn_income;
                $addn_prev_emp = $add_ques->addn_prev_emp;
                $addn_prev_emp_name = $add_ques->addn_prev_emp_name;
                $addn_prev_emp_title = $add_ques->addn_prev_emp_title;
                $addn_prev_emp_duties = $add_ques->addn_prev_emp_duties;
                $addn_prev_emp_supervisor = $add_ques->addn_prev_emp_supervisor;
                $addn_prev_emp_city = $add_ques->addn_prev_emp_city;
                $addn_prev_emp_super_name = $add_ques->addn_prev_emp_super_name;
                $addn_prev_emp_address = $add_ques->addn_prev_emp_address;
                $addn_apartment = $add_ques->addn_apartment;
                $addn_apartment_city = $add_ques->addn_apartment_city;
                $addn_apartment_state = $add_ques->addn_apartment_state;
                $addn_academic = $add_ques->addn_academic;
                $addn_academic_name = $add_ques->addn_academic_name;
                $addn_academic_address = $add_ques->addn_academic_address;
                $addn_academic_city = $add_ques->addn_academic_city;
                $addn_academic_state = $add_ques->addn_academic_state;
                $addn_academic_country = $add_ques->addn_academic_country;
                $addn_academic_major = $add_ques->addn_academic_major;
                $addn_academic_duties = $add_ques->addn_academic_duties;
                $user_id = $add_ques->user_id;
			?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
				<p class="lead">ADDITIONAL QUESTIONS</p>
				<div class="enquiry-form">
						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="addn_embassy">Which US embassy will you be going to for the interview? <span class="required">*</span></label>
							</div>
							<div class="form-group col-md-10">
								<input type="text" name="addn_embassy" class="form-control" value="<?php echo $addn_embassy; ?>">
								
							</div>
							<div class="form-group col-md-2">
								<label for="addn_student">Are you a student?<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_student" value="Yes" <?php if($addn_student == 'Yes'){ echo 'checked';} ?>> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_student" value="No" <?php if($addn_student == 'No'){ echo 'checked';} ?>> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_school">School Name<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_school" name="addn_school" required="" value="<?php echo $addn_school; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_street_address">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_street_address" name="addn_street_address" required="" value="<?php echo $addn_street_address; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_city">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_city" name="addn_city" required="" value="<?php echo $addn_city; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_state">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_state" name="addn_state" required="" value="<?php echo $addn_state; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_country">Country<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_country" name="addn_country" required="" value="<?php echo $addn_country; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_major">Major<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_major" name="addn_major" required="" value="<?php echo $addn_major; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_duties">Please describe your duties<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_duties" name="addn_duties" required="" value="<?php echo $addn_duties; ?>">
							</div>
							<hr/>
							<div class="form-group col-md-2">
								<label for="addn_working">Are you currently working? 
								<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_working" value="Yes" <?php if($addn_working == 'Yes'){ echo 'checked';} ?>> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_working" value="No" <?php if($addn_working == 'No'){ echo 'checked';} ?>> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_working_desc">I am currently working in<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<select name="addn_working_desc" style="width: 100%; height: 32px;">
									<option value="">Select Industry</option>
									<option value="A" <?php if($addn_working_desc == 'A'){ echo 'selected';} ?>>Agriculture</option>
									<option value="AP" <?php if($addn_working_desc == 'AP'){ echo 'selected';} ?>>Artist/Performer</option>
									<option value="B" <?php if($addn_working_desc == 'B'){ echo 'selected';} ?>>Business</option>
									<option value="CM" <?php if($addn_working_desc == 'CM'){ echo 'selected';} ?>>Communications</option>
									<option value="CS" <?php if($addn_working_desc == 'CS'){ echo 'selected';} ?>>Computer Science</option>
									<option value="ED" <?php if($addn_working_desc == 'ED'){ echo 'selected';} ?>>Education</option>
									<option value="EN" <?php if($addn_working_desc == 'EN'){ echo 'selected';} ?>>Engineering</option>
									<option value="C" <?php if($addn_working_desc == 'C'){ echo 'selected';} ?>>Food Services</option>
									<option value="G" <?php if($addn_working_desc == 'G'){ echo 'selected';} ?>>Government</option>
									<option value="H" <?php if($addn_working_desc == 'H'){ echo 'selected';} ?>>Homemaker</option>
									<option value="LP" <?php if($addn_working_desc == 'LP'){ echo 'selected';} ?>>Legal Profession</option>
									<option value="MH" <?php if($addn_working_desc == 'MH'){ echo 'selected';} ?>>Medical/Health</option>
									<option value="M" <?php if($addn_working_desc == 'M'){ echo 'selected';} ?>>Military</option>
									<option value="NS" <?php if($addn_working_desc == 'NS'){ echo 'selected';} ?>>Natural Sciences</option>
									<option value="O" <?php if($addn_working_desc == 'O'){ echo 'selected';} ?>>Other</option>
									<option value="PS" <?php if($addn_working_desc == 'PS'){ echo 'selected';} ?>>Physical Sciences</option>
									<option value="RV" <?php if($addn_working_desc == 'RV'){ echo 'selected';} ?>>Religious Vocation</option>
									<option value="R" <?php if($addn_working_desc == 'R'){ echo 'selected';} ?>>Research</option>
									<option value="RT" <?php if($addn_working_desc == 'RT'){ echo 'selected';} ?>>Retired</option>
									<option value="SS" <?php if($addn_working_desc == 'SS'){ echo 'selected';} ?>>Social Science</option>
									<option value="S" <?php if($addn_working_desc == 'S'){ echo 'selected';} ?>>Student</option>
								</select>
							</div>
							<div class="form-group col-md-2">
								<label for="addn_occupation">Occupation<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_occupation" name="addn_occupation" required="" value="<?php echo $addn_occupation; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_employer">Name of employer<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_employer" name="addn_employer" required="" value="<?php echo $addn_employer; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_employer_address">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_employer_address" name="addn_employer_address" required="" value="<?php echo $addn_employer_address; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_employer_unit_number">Employer's Suite/Unit Number<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_employer_unit_number" name="addn_employer_unit_number" required="" value="<?php echo $addn_employer_unit_number; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_emp_city">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_emp_city" name="addn_emp_city" required="" value="<?php echo $addn_emp_city; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_emp_state">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_emp_state" name="addn_emp_state" required="" value="<?php echo $addn_emp_state; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_emp_zip">ZIP or Postal Code<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_emp_zip" name="addn_emp_zip" required="" value="<?php echo $addn_emp_zip; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_emp_country">Country<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_emp_country" name="addn_emp_country" required="" value="<?php echo $addn_emp_country; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_duties_desc">Please describe your duties<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_duties_desc" name="addn_duties_desc" required="" value="<?php echo $addn_duties_desc; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_income">What is your monthly income in your local currency?<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_income" name="addn_income" required="" value="<?php echo $addn_income; ?>">
							</div>
							<hr/>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp">Have you been previously employed? 
								<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_prev_emp" value="Yes" <?php if($addn_prev_emp == 'Yes'){ echo 'checked';} ?>> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_prev_emp" value="No" <?php if($addn_prev_emp == 'No'){ echo 'checked';} ?>> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp_name">Name of employer<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_prev_emp_name" name="addn_prev_emp_name" required="" value="<?php echo $addn_prev_emp_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp_title">What was your job title in this job?<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_prev_emp_title" name="addn_prev_emp_title" required="" value="<?php echo $addn_prev_emp_title; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp_duties">What did your job responsibilities and duties include in this job?<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_prev_emp_duties" name="addn_prev_emp_duties" required="" value="<?php echo $addn_prev_emp_duties; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp_supervisor">Supervisor's Surname<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_prev_emp_supervisor" name="addn_prev_emp_supervisor" required="" value="<?php echo $addn_prev_emp_supervisor; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp_city">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_prev_emp_city" name="addn_prev_emp_city" required="" value="<?php echo $addn_prev_emp_city; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp_super_name">Supervisor's Given Name<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_prev_emp_super_name" name="addn_prev_emp_super_name" required="" value="<?php echo $addn_prev_emp_super_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp_address">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_prev_emp_address" name="addn_prev_emp_address" required="" value="<?php echo $addn_prev_emp_address; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_apartment">Apartment/Suite/Unit Number<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_apartment" name="addn_apartment" required="" value="<?php echo $addn_apartment; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_apartment_city">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_apartment_city" name="addn_apartment_city" required="" value="<?php echo $addn_apartment_city; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_apartment_state">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_apartment_state" name="addn_apartment_state" required="" value="<?php echo $addn_apartment_state; ?>">
							</div>
							<hr/>
							<div class="form-group col-md-2">
								<label for="addn_academic">Have you attended an academic institution of high school and above?<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_academic" value="Yes" <?php if($addn_academic == 'Yes'){ echo 'checked';} ?>> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_academic" value="No" <?php if($addn_academic == 'No'){ echo 'checked';} ?>> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_academic_name">School Name<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_academic_name" name="addn_academic_name" required="" value="<?php echo $addn_academic_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_academic_address">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_academic_address" name="addn_academic_address" required="" value="<?php echo $addn_academic_address; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_academic_city">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_academic_city" name="addn_academic_city" required="" value="<?php echo $addn_academic_city; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_academic_state">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_academic_state" name="addn_academic_state" required="" value="<?php echo $addn_academic_state; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_academic_country">Country<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_academic_country" name="addn_academic_country" required="" value="<?php echo $addn_academic_country; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_academic_major">Major<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_academic_major" name="addn_academic_major" required="" value="<?php echo $addn_academic_major; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="addn_academic_duties">Please describe your duties<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="addn_academic_duties" name="addn_academic_duties" required="" value="<?php echo $addn_academic_duties; ?>">
							</div>
							<hr/>
						</div>
                        <input type="hidden" name="temp_user_id" value="<?php echo $user_id; ?>">
					<a href="<?php echo e(url('visa-enquiry')); ?>" class="btn btn-default" style="float: left;"> BACK TO VISA ENQUIRY LIST </a>

				</div>
			</div>
		</div>
	</div>
</div>
</form> 
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
</script>
<script>
	function myFunction() {
	  var checkBox = document.getElementById("myCheck");
	  var text = document.getElementById("text");
	  if (checkBox.checked == true){
		text.style.display = "block";
	  } else {
		 text.style.display = "none";
	  }
	}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views/application-step-three-view.blade.php ENDPATH**/ ?>