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
	$add_country_name = '';
	$add_passport_number = '';
	$add_residence_country = '';

	$past_visit = '';
	$past_visit_date = '';
	$past_visit_month = '';
	$past_visit_year = '';
	$past_visit_duration = '';
	$past_visit_duration_year = '';
	$past_visa_issue_date = '';
	$past_visa_issue_month = '';
	$past_visa_issue_year = '';
	$past_same_visa = '';
	$past_visa_printed = '';
	$past_visa_country = '';
	$past_visa_cancel = '';
	$past_visa_cancel_reason = '';
	$past_visa_refuse = '';
	$past_visa_refuse_reason = '';
	$past_visa_immigration = '';
	$past_visa_immigration_reason = '';
	$past_visa_esta = '';
	$past_visa_esta_reason = '';
	$past_visa_entry_refuse = '';
	$past_visa_entry_refuse_reason = '';

	$upcoming_specify = '';
	$upcoming_phone_one = '';
	$upcoming_phone_two = '';
	$upcoming_contact_surname = '';
	$upcoming_contact_name = '';
	$upcoming_relation_specify = '';
	$upcoming_email = '';
	$upcoming_mobile = '';
	$upcoming_street_address = '';
	$upcoming_apart = '';
	$upcoming_city = ''; 
	$upcoming_country = '';
	$user_id = '';
?>
<?php if(!empty($AddInfo)): ?>
	<?php $__currentLoopData = $AddInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $past_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php
				$add_country_name = $past_data->add_country_name;
				$add_passport_number = $past_data->add_passport_number;
				$add_residence_country = $past_data->add_residence_country;
				$user_id = $past_data->user_id;
			?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(!empty($PastVisa)): ?>
	<?php $__currentLoopData = $PastVisa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $past_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php
				$past_visit = $past_data->past_visit;
				$past_visit_date = $past_data->past_visit_date;
				$past_visit_month = $past_data->past_visit_month;
				$past_visit_year = $past_data->past_visit_year;
				$past_visit_duration = $past_data->past_visit_duration;
				$past_visit_duration_year = $past_data->past_visit_duration_year;
				$past_visa_issue_date = $past_data->past_visa_issue_date;
				$past_visa_issue_month = $past_data->past_visa_issue_month;
				$past_visa_issue_year = $past_data->past_visa_issue_year;
				$past_same_visa = $past_data->past_same_visa;
				$past_visa_printed = $past_data->past_visa_printed;
				$past_visa_country = $past_data->past_visa_country;
				$past_visa_cancel = $past_data->past_visa_cancel;
				$past_visa_cancel_reason = $past_data->past_visa_cancel_reason;
				$past_visa_refuse = $past_data->past_visa_refuse;
				$past_visa_refuse_reason = $past_data->past_visa_refuse_reason;
				$past_visa_immigration = $past_data->past_visa_immigration;
				$past_visa_immigration_reason = $past_data->past_visa_immigration_reason;
				$past_visa_esta = $past_data->past_visa_esta;
				$past_visa_esta_reason = $past_data->past_visa_esta_reason;
				$past_visa_entry_refuse = $past_data->past_visa_entry_refuse;
				$past_visa_entry_refuse_reason = $past_data->past_visa_entry_refuse_reason;
			?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php if(!empty($UpcomingTrip)): ?>
	<?php $__currentLoopData = $UpcomingTrip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upcoming_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php
				$upcoming_specify = $upcoming_data->upcoming_specify;
				$upcoming_phone_one = $upcoming_data->upcoming_phone_one;
				$upcoming_phone_two = $upcoming_data->upcoming_phone_two;
				$upcoming_contact_surname = $upcoming_data->upcoming_contact_surname;
				$upcoming_contact_name = $upcoming_data->upcoming_contact_name;
				$upcoming_relation_specify = $upcoming_data->upcoming_relation_specify;
				$upcoming_email = $upcoming_data->upcoming_email;
				$upcoming_mobile = $upcoming_data->upcoming_mobile;
				$upcoming_street_address = $upcoming_data->upcoming_street_address;
				$upcoming_apart = $upcoming_data->upcoming_apart;
				$upcoming_city = $upcoming_data->upcoming_city;
				$upcoming_country = $upcoming_data->upcoming_country;
			?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
				<p class="lead">ADDITIONAL NATIONALITIES</p>
				<div class="enquiry-form">
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="add_country_name">Country Name<span class="required">*</span></label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" class="form-control" id="add_country_name" name="add_country_name" value="<?php echo $add_country_name; ?>">
							
						</div>
						<div class="form-group col-md-2">
							<label for="add_passport_number">Passport Number<span class="required">*</span></label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" class="form-control" id="add_passport_number" name="add_passport_number" placeholder="Passport Number" required="" value="<?php echo $add_passport_number; ?>">
						</div>
						<div class="form-group col-md-2">
							<label for="add_residence_country">Country of Residence<span class="required">*</span></label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" class="form-control" id="add_residence_country" name="add_residence_country" required="" value="<?php echo $add_residence_country; ?>">
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
				<p class="lead">PAST TRAVEL & APPLICATIONS</p>
				<div class="enquiry-form">
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="past_visit">Have you ever been to the United States before? <span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" id="past_visit" name="past_visit" value="Yes" <?php if($past_visit == 'Yes'){ echo 'checked';} ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" id="past_visit" name="past_visit" value="No" <?php if($past_visit == 'No'){ echo 'checked';} ?>> No
								</div>
						<div class="form-group col-md-3">
						</div>
						<div class="form-group col-md-2">
							<label for="email">Please Give Estimated Dates of Your Trips to USA <span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<label for="past_visit_date">Day<span class="required">*</span></label>
									<select name="past_visit_date" style="width: 100%; height: 32px;">
										<?php
											for ($i=1; $i < 32; $i++) { 
												?>
													<option value="<?php echo e($i); ?>" <?php if($past_visit_date == $i){ echo 'selected'; } ?>><?php echo $i; ?></option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="past_visit_month">Month<span class="required">*</span></label>
									<select name="past_visit_month" style="width: 100%; height: 32px;">
										<?php
											foreach (config('constants.month_name') as $key => $value) {
												?>
													<option value="<?php echo $value;?>" <?php if($past_visit_month == $i){ echo 'selected'; } ?>><?php echo $value;?></option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="past_visit_year">Year<span class="required">*</span></label>
									<input type="text" name="past_visit_year" id="past_visit_year" class="form-control" minlength="4" maxlength="4" value="<?php echo $past_visit_year; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="email">How long was your trip?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<label for="past_visit_duration"><span class="required"></span></label>
									<input type="text" class="form-control" id="past_visit_duration" name="past_visit_duration" value="<?php echo $past_visit_duration; ?>">
								</div>
								<div class="form-group col-md-3">
									<label for="past_visit_duration_year">Year<span class="required">*</span></label>
									<input type="text" name="past_visit_duration_year" id="past_visit_duration_year" class="form-control" minlength="4" maxlength="4" value="<?php echo $past_visit_duration_year; ?>">
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="email">Date Last Visa Was Issued *<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<label for="past_visa_issue_date">Day<span class="required">*</span></label>
									<select name="past_visa_issue_date" style="width: 100%; height: 32px;">
										<?php
											for ($i=1; $i < 32; $i++) { 
												?>
													<option value="<?php echo e($i); ?>" <?php if($i == $past_visa_issue_date){ echo "selected"; } ?>><?php echo $i; ?></option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="past_visa_issue_month">Month<span class="required">*</span></label>
									<select name="past_visa_issue_month" style="width: 100%; height: 32px;">
										<?php
											foreach (config('constants.month_name') as $key => $value) {
												?>
													<option value="<?php echo $value;?>" <?php if($value == $past_visa_issue_month){ echo "selected"; } ?>><?php echo $value;?></option>
												<?php
												}
											?>
									</select>
								</div>
								<div class="form-group col-md-3">
								   <label for="past_visa_issue_year">Year<span class="required">*</span></label>
									<input type="text" name="past_visa_issue_year" id="past_visa_issue_year" class="form-control" minlength="4" maxlength="4" value="<?php echo $past_visa_issue_year; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_same_visa">Are you applying for the same type of visa?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_same_visa" value="Yes" <?php if("Yes" == $past_same_visa){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_same_visa" value="No" <?php if("No" == $past_same_visa){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_printed">Have you been ten-printed?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_printed" value="Yes" <?php if("Yes" == $past_visa_printed){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_printed" value="No" <?php if("No" == $past_visa_printed){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_country">Are you applying in the same country or location where the visa above was issued, and is this country or location your place of principal of residence?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_country" value="Yes" <?php if("Yes" == $past_visa_country){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_country" value="No" <?php if("No" == $past_visa_country){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_cancel">Has your U.S. Visa ever been cancelled or revoked?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_cancel" value="Yes" <?php if("Yes" == $past_visa_cancel){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_cancel" value="No" <?php if("No" == $past_visa_cancel){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_cancel_reason">Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="past_visa_cancel_reason" name="past_visa_cancel_reason" required="" value="<?php echo $past_visa_cancel_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_refuse">Have you ever been refused a U.S. Visa, or been refused admission to the United States, or withdrawn your application for admission at the port of entry?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_refuse" value="Yes" <?php if("Yes" == $past_visa_refuse){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_refuse" value="No" <?php if("No" == $past_visa_refuse){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_refuse_reason">Please Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="past_visa_refuse_reason" name="past_visa_refuse_reason" required="" value="<?php echo $past_visa_refuse_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_immigration">Has anyone filed an immigration petition on your behalf?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_immigration" value="Yes" <?php if("Yes" == $past_visa_immigration){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_immigration" value="No" <?php if("No" == $past_visa_immigration){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_immigration_reason">Please Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="past_visa_immigration_reason" name="past_visa_immigration_reason" required="" value="<?php echo $past_visa_immigration_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_esta">Have you ever had an ESTA application rejected?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_esta" value="Yes" <?php if("Yes" == $past_visa_esta){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_esta" value="No" <?php if("No" == $past_visa_esta){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_esta_reason">Please Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="past_visa_esta_reason" name="past_visa_esta_reason" required="" value="<?php echo $past_visa_esta_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_entry_refuse">Have you ever been refused entry to the United States?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_entry_refuse" value="Yes" <?php if("Yes" == $past_visa_entry_refuse){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_entry_refuse" value="No" <?php if("No" == $past_visa_entry_refuse){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_entry_refuse_reason">Please Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9">
									<input type="text" class="form-control" id="past_visa_entry_refuse_reason" name="past_visa_entry_refuse_reason"  value="<?php echo $past_visa_entry_refuse_reason; ?>">
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
				<p class="lead">UPCOMING TRIP TO THE U.S.</p>
				<div class="enquiry-form">
					
						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="email">Purpose of Trip to the U.S.<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<p>TEMP. BUSINESS PLEASURE VISITOR (B)</p>
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_specify">Specify<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<select name="upcoming_specify" id="upcoming_specify" style="width: 100%; height: 32px;">
									<option class="none" value="">Please select a visa class</option>
									<option class="B" value="B1-B2" style="display: block;" <?php if('B1-B2' == $upcoming_specify){ echo "selected"; } ?>>BUSINESS &amp; TOURISM (TEMPORARY VISITOR) (B1/B2)</option>
									<option class="B" value="B1-CF" selected="" style="display: block;" <?php if('B1-CF' == $upcoming_specify){ echo "selected"; } ?>>BUSINESS&nbsp;/ CONFERENCE (B1)</option>
									<option class="B" value="B2-TM" style="display: block;" <?php if('B2-TM' == $upcoming_specify){ echo "selected"; } ?>>TOURISM&nbsp;/ MEDICAL TREATMENT (B2)</option>
								</select>
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_phone_one">Phone Number<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_phone_one" name="upcoming_phone_one" placeholder="Phone Number" required="" style="width: 40%;" value="<?php echo $upcoming_phone_one; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_phone_two">Secondary/work phone numbers<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_phone_two" name="upcoming_phone_two" placeholder="Phone Number" required="" style="width: 40%;" value="<?php echo $upcoming_phone_two; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_contact_surname">Contact Person Surnames<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_contact_surname" name="upcoming_contact_surname" required="" value="<?php echo $upcoming_contact_surname; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_contact_name">Contact Person Given Names<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_contact_name" name="upcoming_contact_name" required="" value="<?php echo $upcoming_contact_name; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_relation_specify">Specify<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<select name="upcoming_relation_specify" id="upcoming_relation_specify" style="width: 100%; height: 32px;">
									<option value="">-Please Select-</option>
									<option value="C" <?php if('C' == $upcoming_relation_specify){ echo 'selected'; } ?>>Friend</option>
									<option value="P" <?php if('P' == $upcoming_relation_specify){ echo 'selected'; } ?>>Child</option>
									<option value="S" <?php if('S' == $upcoming_relation_specify){ echo 'selected'; } ?>>Spouse</option>
									<option value="R" <?php if('R' == $upcoming_relation_specify){ echo 'selected'; } ?>>No Relative</option>
									<option value="B" <?php if('B' == $upcoming_relation_specify){ echo 'selected'; } ?>>Business Associate</option>
									<option value="H" <?php if('H' == $upcoming_relation_specify){ echo 'selected'; } ?>>School Official</option>
									<option value="O" <?php if('O' == $upcoming_relation_specify){ echo 'selected'; } ?>>No</option>
								</select>
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_email">Email<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_email" name="upcoming_email" required="" value="<?php echo $upcoming_email; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_mobile">Mobile Number<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_mobile" name="upcoming_mobile" required="" value="<?php echo $upcoming_mobile; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_street_address">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_street_address" name="upcoming_street_address" required="" value="<?php echo $upcoming_street_address; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_apart">Apartment/Suite/Unit Number<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_apart" name="upcoming_apart" required="" value="<?php echo $upcoming_apart; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_city">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control" id="upcoming_city" name="upcoming_city" required="" value="<?php echo $upcoming_city; ?>">
							</div>
							<div class="form-group col-md-2">
								<label for="upcoming_country">Country<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								
								<input type="text" class="form-control" id="upcoming_country" name="upcoming_country" required="" value="<?php echo $upcoming_country; ?>">
							</div>
							<input type="hidden" name="temp_user_id" value="<?php echo $user_id; ?>">
							<a href="<?php echo e(url('application-step-three-view/'.$user_id)); ?>" class="btn btn-default" style="float: right;"> CONTINUE TO STEP 3 </a>
					
					</div>
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
<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views/application-step-two-view.blade.php ENDPATH**/ ?>