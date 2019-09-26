@extends('_layouts.layout')
@section('meta_description')
@stop
@section('content')	 
<section class="stepwiz">
	<div class="stepwizard">
		<div class="stepwizard-row setup-panel">
			<div class="stepwizard-step">
				<a href="{{url('application-step-one')}}" type="button" class="btn btn-primary btn-circle">1</a>
				<p>Step 1</p>
			</div>
			<div class="stepwizard-step">
				<a href="{{url('application-step-two')}}" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
				<p>Step 2</p>
			</div>
			<div class="stepwizard-step">
				<a href="{{url('application-step-three')}}" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
				<p>Step 3</p>
			</div>
		</div>
	</div>
</section>
<?php
	if(!isset($_COOKIE['temp_user_id'])) {
			$cookie_name = "temp_user_id";
			$cookie_value = rand();
            $user_id = $cookie_value;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	} else {
        $user_id = $_COOKIE['temp_user_id'];
    }
?>
{!! Form::open(['route' => ['additionalInformation.update'], 'id' => 'additionalInformationUpdate', 'method' => 'post', 'files' => true]) !!}
<?php
	$add_country_name = '';
	$add_passport_number = '';
	$add_residence_country = '';

	$past_visit = '';
	$past_visit_date = '';
	$past_visit_month = '';
	$past_visit_year = '';
	$past_visit_duration = '';
	$past_visit_duration_month = '';
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
?>
@if(!empty($AddInfo))
	@foreach($AddInfo as $add_data)
			<?php
				$add_country_name = $add_data->add_country_name;
				$add_passport_number = $add_data->add_passport_number;
				$add_residence_country = $add_data->add_residence_country;
			?>
	@endforeach
@endif
@if(!empty($PastVisa))
	@foreach($PastVisa as $past_data)
			<?php
				$past_visit = $past_data->past_visit;
				$past_visit_date = $past_data->past_visit_date;
				$past_visit_month = $past_data->past_visit_month;
				$past_visit_year = $past_data->past_visit_year;
				$past_visit_duration = $past_data->past_visit_duration;
				$past_visit_duration_month = $past_data->past_visit_duration_month;
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
	@endforeach
@endif
@if(!empty($UpcomingTrip))
	@foreach($UpcomingTrip as $upcoming_data)
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
	@endforeach
@endif
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
				<p class="lead">CURRENT NATIONALITIES</p>
				<div class="enquiry-form">
					<div class="form-row">
						<div class="form-group col-md-2">
							<label for="add_country_name">Country Name<span class="required">*</span></label>
						</div>
						<div class="form-group col-md-9">
							<select name="add_country_name" id="add_country_name" style="width: 100%; height: 32px;" required>
								<option value="none">None</option>
								<option value="" selected="">Please Select</option>
								<option value="" disabled="disabled">----------------------------------</option>
								<option value="AFGH">AFGHANISTAN</option>
								<option value="ALB">ALBANIA</option>
								<option value="ALGR">ALGERIA</option>
								<option value="ASMO">AMERICAN SAMOA</option>
								<option value="ANDO">ANDORRA</option>
								<option value="ANGL">ANGOLA</option>
								<option value="ANGU">ANGUILLA</option>
								<option value="ANTI">ANTIGUA AND BARBUDA</option>
								<option value="ARG">ARGENTINA</option>
								<option value="ARM">ARMENIA</option>
								<option value="ARB">ARUBA</option>
								<option value="XAS">AT SEA</option>
								<option value="ASTL">AUSTRALIA</option>
								<option value="AUST">AUSTRIA</option>
								<option value="AZR">AZERBAIJAN</option>
								<option value="BAMA">BAHAMAS</option>
								<option value="BAHR">BAHRAIN</option>
								<option value="BANG">BANGLADESH</option>
								<option value="BRDO">BARBADOS</option>
								<option value="BYS">BELARUS</option>
								<option value="BELG">BELGIUM</option>
								<option value="BLZ">BELIZE</option>
								<option value="BENN">BENIN</option>
								<option value="BERM">BERMUDA</option>
								<option value="BHU">BHUTAN</option>
								<option value="BOL">BOLIVIA</option>
								<option value="BON">BONAIRE</option>
								<option value="BIH">BOSNIA-HERZEGOVINA</option>
								<option value="BOT">BOTSUANA</option>
								<option value="BRZL">BRAZIL</option>
								<option value="IOT">BRITISH INDIAN OCEAN TERRITORY</option>
								<option value="BRVI">BRITISH VIRGIN ISLANDS</option>
								<option value="BRNI">BRUNEI</option>
								<option value="BULG">BULGARIA</option>
								<option value="BURK">BURKINA FASO</option>
								<option value="BURM">BURMA</option>
								<option value="BRND">BURUNDI</option>
								<option value="CAVI">CABO VERDE</option>
								<option value="CBDA">CAMBODIA</option>
								<option value="CMRN">CAMEROON</option>
								<option value="CAN">CANADA</option>
								<option value="CAYI">CAYMAN ISLANDS</option>
								<option value="CAFR">CENTRAL AFRICAN REPUBLIC</option>
								<option value="CHAD">CHAD</option>
								<option value="CHIL">CHILE</option>
								<option value="CHIN">CHINA</option>
								<option value="CHRI">CHRISTMAS ISLAND</option>
								<option value="COCI">COCOS KEELING ISLANDS</option>
								<option value="COL">COLOMBIA</option>
								<option value="COMO">COMOROS</option>
								<option value="COD">CONGO, DEMOCRATIC REPUBLIC OF THE</option>
								<option value="CONB">CONGO, REPUBLIC OF THE</option>
								<option value="CKIS">COOK ISLANDS</option>
								<option value="CSTR">COSTA RICA</option>
								<option value="IVCO">COTE D`IVOIRE</option>
								<option value="HRV">CROATIA</option>
								<option value="CUBA">CUBA</option>
								<option value="CUR">CURACAO</option>
								<option value="CYPR">CYPRUS</option>
								<option value="CZEC">CZECH REPUBLIC</option>
								<option value="DEN">DENMARK</option>
								<option value="DJI">DJIBOUTI</option>
								<option value="DOMN">DOMINICA</option>
								<option value="DOMR">DOMINICAN REPUBLIC</option>
								<option value="ECUA">ECUADOR</option>
								<option value="EGYP">EGYPT</option>
								<option value="ELSL">EL SALVADOR</option>
								<option value="EGN">EQUATORIAL GUINEA</option>
								<option value="ERI">ERITREA</option>
								<option value="EST">ESTONIA</option>
								<option value="ETH">ETHIOPIA</option>
								<option value="FKLI">FALKLAND ISLANDS</option>
								<option value="FRO">FAROE ISLANDS</option>
								<option value="FIJI">FIJI</option>
								<option value="FIN">FINLAND</option>
								<option value="FRAN">FRANCE</option>
								<option value="FRGN">FRENCH GUIANA</option>
								<option value="FPOL">FRENCH POLYNESIA</option>
								<option value="FSAT">FRENCH SOUTHERN AND ANTARCTIC TERRITORIES</option>
								<option value="GABN">GABON</option>
								<option value="GAM">GAMBIA, THE</option>
								<option value="XGZ">GAZA STRIP</option>
								<option value="GEO">GEORGIA</option>
								<option value="GER">GERMANY</option>
								<option value="GHAN">GHANA</option>
								<option value="GIB">GIBRALTAR</option>
								<option value="GRC">GREECE</option>
								<option value="GRLD">GREENLAND</option>
								<option value="GREN">GRENADA</option>
								<option value="GUAD">GUADELOUPE</option>
								<option value="GUAM">GUAM</option>
								<option value="GUAT">GUATEMALA</option>
								<option value="GNEA">GUINEA</option>
								<option value="GUIB">GUINEA - BISSAU</option>
								<option value="GUY">GUYANA</option>
								<option value="HAT">HAITI</option>
								<option value="HMD">HEARD AND MCDONALD ISLANDS</option>
								<option value="VAT">HOLY SEE (VATICAN CITY)</option>
								<option value="HOND">HONDURAS</option>
								<option value="HOKO">HONG KONG BNO</option>
								<option value="HNK">HONG KONG SAR</option>
								<option value="XHI">HOWLAND ISLAND</option>
								<option value="HUNG">HUNGARY</option>
								<option value="ICLD">ICELAND</option>
								<option value="XIR">IN THE AIR</option>
								<option value="IND">INDIA</option>
								<option value="IDSA">INDONESIA</option>
								<option value="IRAN">IRAN</option>
								<option value="IRAQ">IRAQ</option>
								<option value="IRE">IRELAND</option>
								<option value="ISRL">ISRAEL</option>
								<option value="ITLY">ITALY</option>
								<option value="JAM">JAMAICA</option>
								<option value="JPN">JAPAN</option>
								<option value="JRSM">JERUSALEM</option>
								<option value="JORD">JORDAN</option>
								<option value="KAZ">KAZAKHSTAN</option>
								<option value="KENY">KENYA</option>
								<option value="KIRI">KIRIBATI</option>
								<option value="PRK">KOREA, DEMOCRATIC REPUBLIC OF (NORTH)</option>
								<option value="KOR">KOREA, REPUBLIC OF (SOUTH)</option>
								<option value="KSV">KOSOVO</option>
								<option value="KUWT">KUWAIT</option>
								<option value="KGZ">KYRGYZSTAN</option>
								<option value="LAOS">LAOS</option>
								<option value="LATV">LATVIA</option>
								<option value="LEBN">LEBANON</option>
								<option value="LES">LESOTHO</option>
								<option value="LIBR">LIBERIA</option>
								<option value="LBYA">LIBYA</option>
								<option value="LCHT">LIECHTENSTEIN</option>
								<option value="LITH">LITHUANIA</option>
								<option value="LXM">LUXEMBOURG</option>
								<option value="MAC">MACAU</option>
								<option value="MKD">MACEDONIA</option>
								<option value="MADG">MADAGASCAR</option>
								<option value="MALW">MALAWI</option>
								<option value="MLAS">MALAYSIA</option>
								<option value="MLDI">MALDEN ISLAND</option>
								<option value="MLDV">MALDIVES</option>
								<option value="MALI">MALI</option>
								<option value="MLTA">MALTA</option>
								<option value="RMI">MARSHALL ISLANDS</option>
								<option value="MART">MARTINIQUE</option>
								<option value="MAUR">MAURITANIA</option>
								<option value="MRTS">MAURITIUS</option>
								<option value="MYT">MAYOTTE</option>
								<option value="AGS">MEXICO - AGUASCALIENTES</option>
								<option value="BC">MEXICO - BAJA CALIFORNIA NORTE</option>
								<option value="BCSR">MEXICO - BAJA CALIFORNIA SUR</option>
								<option value="CAMP">MEXICO - CAMPECHE</option>
								<option value="CHIS">MEXICO - CHIAPAS</option>
								<option value="CHIH">MEXICO - CHIHUAHUA</option>
								<option value="COAH">MEXICO - COAHUILA</option>
								<option value="COLI">MEXICO - COLIMA</option>
								<option value="DF">MEXICO - DISTRITO FEDERAL</option>
								<option value="DGO">MEXICO - DURANGO</option>
								<option value="GTO">MEXICO - GUANAJUATO</option>
								<option value="GRO">MEXICO - GUERRERO</option>
								<option value="HGO">MEXICO - HIDALGO</option>
								<option value="JAL">MEXICO - JALISCO</option>
								<option value="MCH">MEXICO - MICHOACAN</option>
								<option value="MOR">MEXICO - MORELOS</option>
								<option value="NAY">MEXICO - NAYARIT</option>
								<option value="NL">MEXICO - NUEVO LEON</option>
								<option value="OAX">MEXICO - OAXACA</option>
								<option value="PUE">MEXICO - PUEBLA</option>
								<option value="QRO">MEXICO - QUERETARO</option>
								<option value="QROO">MEXICO - QUINTANA ROO</option>
								<option value="SLP">MEXICO - SAN LUIS POTOSI</option>
								<option value="SIN">MEXICO - SINALOA</option>
								<option value="SON">MEXICO - SONORA</option>
								<option value="MXCO">MEXICO - STATE OF MEXICO</option>
								<option value="TAB">MEXICO - TABASCO</option>
								<option value="TAMP">MEXICO - TAMAULIPAS</option>
								<option value="TLAX">MEXICO - TLAXCALA</option>
								<option value="VER">MEXICO - VERACRUZ</option>
								<option value="YUC">MEXICO - YUCATAN</option>
								<option value="ZAC">MEXICO - ZACATECAS</option>
								<option value="FSM">MICRONESIA</option>
								<option value="MDWI">MIDWAY ISLANDS</option>
								<option value="MLD">MOLDOVA</option>
								<option value="MON">MONACO</option>
								<option value="MONG">MONGOLIA</option>
								<option value="MTG">MONTENEGRO</option>
								<option value="MONT">MONTSERRAT</option>
								<option value="MORO">MOROCCO</option>
								<option value="MOZ">MOZAMBIQUE</option>
								<option value="NAMB">NAMIBIA</option>
								<option value="NAU">NAURU</option>
								<option value="NEP">NEPAL</option>
								<option value="NETH">NETHERLANDS</option>
								<option value="NCAL">NEW CALEDONIA</option>
								<option value="NZLD">NEW ZEALAND</option>
								<option value="NIC">NICARAGUA</option>
								<option value="NIR">NIGER</option>
								<option value="NRA">NIGERIA</option>
								<option value="NIUE">NIUE</option>
								<option value="NFK">NORFOLK ISLAND</option>
								<option value="MNP">NORTH MARIANA ISLANDS</option>
								<option value="NIRE">NORTHERN IRELAND</option>
								<option value="NORW">NORWAY</option>
								<option value="OMAN">OMAN</option>
								<option value="PKST">PAKISTAN</option>
								<option value="PALA">PALAU</option>
								<option value="PLMR">PALMYRA ATOLL</option>
								<option value="PAN">PANAMA</option>
								<option value="PNG">PAPUA NEW GUINEA</option>
								<option value="PARA">PARAGUAY</option>
								<option value="PERU">PERU</option>
								<option value="PHIL">PHILIPPINES</option>
								<option value="PITC">PITCAIRN ISLANDS</option>
								<option value="POL">POLAND</option>
								<option value="PORT">PORTUGAL</option>
								<option value="PR">PUERTO RICO</option>
								<option value="QTAR">QATAR</option>
								<option value="REUN">REUNION</option>
								<option value="ROM">ROMANIA</option>
								<option value="RUS">RUSSIA</option>
								<option value="RWND">RWANDA</option>
								<option value="SABA">SABA ISLAND</option>
								<option value="MAF">SAINT MARTIN</option>
								<option value="WSAM">SAMOA</option>
								<option value="SMAR">SAN MARINO</option>
								<option value="STPR">SAO TOME AND PRINCIPE</option>
								<option value="SARB">SAUDI ARABIA</option>
								<option value="SENG">SENEGAL</option>
								<option value="SBA">SERBIA</option>
								<option value="SEYC">SEYCHELLES</option>
								<option value="SLEO">SIERRA LEONE</option>
								<option value="SING">SINGAPORE</option>
								<option value="STM">SINT MAARTEN</option>
								<option value="SVK">SLOVAKIA</option>
								<option value="SVN">SLOVENIA</option>
								<option value="SLMN">SOLOMON ISLANDS</option>
								<option value="SOMA">SOMALIA</option>
								<option value="SAFR">SOUTH AFRICA</option>
								<option value="SGS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLAND</option>
								<option value="SSDN">SOUTH SUDAN</option>
								<option value="SPN">SPAIN</option>
								<option value="SRL">SRI LANKA</option>
								<option value="STBR">ST. BARTHELEMY</option>
								<option value="STEU">ST. EUSTATIUS</option>
								<option value="SHEL">ST. HELENA</option>
								<option value="STCN">ST. KITTS AND NEVIS</option>
								<option value="SLCA">ST. LUCIA</option>
								<option value="SPMI">ST. PIERRE AND MIQUELON</option>
								<option value="STVN">ST. VINCENT AND THE GRENADINES</option>
								<option value="SUDA">SUDAN</option>
								<option value="SURM">SURINAME</option>
								<option value="SJM">SVALBARD</option>
								<option value="SZLD">SWAZILAND</option>
								<option value="SWDN">SWEDEN</option>
								<option value="SWTZ">SWITZERLAND</option>
								<option value="SYR">SYRIA</option>
								<option value="TWAN">TAIWAN</option>
								<option value="TJK">TAJIKISTAN</option>
								<option value="TAZN">TANZANIA</option>
								<option value="THAI">THAILAND</option>
								<option value="TMOR">TIMOR-LESTE</option>
								<option value="TOGO">TOGO</option>
								<option value="TKL">TOKELAU</option>
								<option value="TONG">TONGA</option>
								<option value="TRIN">TRINIDAD AND TOBAGO</option>
								<option value="TNSA">TUNISIA</option>
								<option value="TRKY">TURKEY</option>
								<option value="TKM">TURKMENISTAN</option>
								<option value="TCIS">TURKS AND CAICOS ISLANDS</option>
								<option value="TUV">TUVALU</option>
								<option value="UGAN">UGANDA</option>
								<option value="UKR">UKRAINE</option>
								<option value="UAE">UNITED ARAB EMIRATES</option>
								<option value="GRBR">UNITED KINGDOM</option>
								<option value="USA">UNITED STATES OF AMERICA</option>
								<option value="URU">URUGUAY</option>
								<option value="UZB">UZBEKISTAN</option>
								<option value="VANU">VANUATU</option>
								<option value="VENZ">VENEZUELA</option>
								<option value="VTNM">VIETNAM</option>
								<option value="VI">VIRGIN ISLANDS (U.S.)</option>
								<option value="WKI">WAKE ISLAND</option>
								<option value="WAFT">WALLIS AND FUTUNA ISLANDS</option>
								<option value="XWB">WEST BANK</option>
								<option value="SSAH">WESTERN SAHARA</option>
								<option value="YEM">YEMEN</option>
								<option value="ZAMB">ZAMBIA</option>
								<option value="ZIMB">ZIMBABWE</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label for="add_passport_number">Passport Number<span class="required">*</span></label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" class="form-control" id="add_passport_number" name="add_passport_number" placeholder="Passport Number" required="">
						</div>
						<div class="form-group col-md-2">
							<label for="add_residence_country">Country of Residence<span class="required">*</span></label>
						</div>
						<div class="form-group col-md-9">
							<input type="text" class="form-control" id="add_residence_country" name="add_residence_country" required="">
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
									<input type="radio" name="past_visit" value="Yes" id="yes_past_visit" <?php if($past_visit == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visit" value="No" id="no_past_visit" <?php if($past_visit == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3">
						</div>
						<div class="form-group col-md-2 past_visit">
							<label for="email" class="past_visit">Last visit to USA data <span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3 past_visit">
									<label for="past_visit_date" class="past_visit">Day<span class="required">*</span></label>
									<select name="past_visit_date" style="width: 100%; height: 32px;" required class="past_visit">
										<?php
											for ($i=1; $i < 32; $i++) { 
												?>
													<option value="{{ $i }}" <?php if($i == $past_visit_date){ echo "selected"; } ?>><?php echo $i; ?></option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3 past_visit">
									<label for="past_visit_month">Month<span class="required">*</span></label>
									<select name="past_visit_month" style="width: 100%; height: 32px;" required>
										<?php
											foreach (config('constants.month_name') as $key => $value) {
												?>
													<option value="<?php echo $value;?>" <?php if($value == $past_visit_month){ echo "selected"; } ?>><?php echo $value;?></option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3 past_visit">
									<label for="past_visit_year" class="past_visit">Year<span class="required">*</span></label>
									<input type="text" name="past_visit_year" id="past_visit_year" class="form-control past_visit" minlength="4" maxlength="4" value="<?php echo $past_visit_year;?>" required>
								</div>
						<div class="form-group col-md-2 past_visit">
							<label for="email" class="past_visit">How long was your trip?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3 past_visit">
									<label for="past_visit_duration" class=" past_visit">Day<span class="required"></span></label>
									<input type="text" class="form-control past_visit" id="past_visit_duration" name="past_visit_duration" required="" value="<?php echo $past_visit_duration;?>">
								</div>
								<div class="form-group col-md-3 past_visit">
									<label for="past_visit_duration_month" class="past_visit">Month</label>
									<input type="text" name="past_visit_duration_month" id="past_visit_duration_month" class="form-control past_visit" value="<?php echo $past_visit_duration_month;?>">
								</div>
						<div class="form-group col-md-3 past_visit"></div>
						<div class="form-group col-md-2 past_visit">
							<label for="email" class="past_visit">Date Last Visa Was Issued *<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3 past_visit">
									<label for="past_visa_issue_date" class="past_visit">Day<span class="required">*</span></label>
									<select name="past_visa_issue_date" style="width: 100%; height: 32px;" class="past_visit">
										<?php
											for ($i=1; $i < 32; $i++) { 
												?>
													<option value="{{ $i }}" <?php if($i == $past_visa_issue_date){ echo "selected"; } ?>><?php echo $i; ?></option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3 past_visit">
									<label for="past_visa_issue_month" class="past_visit">Month<span class="required">*</span></label>
									<select name="past_visa_issue_month" style="width: 100%; height: 32px;" class="past_visit">
										<?php
											foreach (config('constants.month_name') as $key => $value) {
												?>
													<option value="<?php echo $value;?>" <?php if($value == $past_visa_issue_month){ echo "selected"; } ?>><?php echo $value;?></option>
												<?php
											}
										?>
									</select>
								</div>
								<div class="form-group col-md-3 past_visit">
								   <label for="past_visa_issue_year" class=" past_visit">Year<span class="required">*</span></label>
									<input type="text" name="past_visa_issue_year" id="past_visa_issue_year" class="form-control past_visit" minlength="4" maxlength="4" value="<?php echo $past_visa_issue_year;?>">
								</div>
						<div class="form-group col-md-2 past_visit">
							<label for="past_same_visa" class="past_visit">Are you applying for the same type of visa?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3 past_visit">
									<input type="radio" name="past_same_visa" value="Yes" class="past_visit" <?php if($past_same_visa == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3 past_visit">
									<input type="radio" name="past_same_visa" value="No" class="past_visit" <?php if($past_same_visa == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3 past_visit"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_printed">Have you been ten-printed?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_printed" value="Yes" <?php if($past_visa_printed == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_printed" value="No" <?php if($past_visa_printed == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_country">Are you applying in the same country or location where the visa above was issued, and is this country or location your place of principal of residence?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_country" value="Yes" <?php if($past_visa_country == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_country" value="No" <?php if($past_visa_country == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2">
							<label for="past_visa_cancel">Has your U.S. Visa ever been cancelled or revoked?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_cancel" value="Yes" id="yes_past_visit_cancel" <?php if($past_visa_cancel == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_cancel" value="No" id="no_past_visit_cancel" <?php if($past_visa_cancel == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2 past_visa_cancel">
							<label for="past_visa_cancel_reason" class="past_visa_cancel">Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9 past_visa_cancel">
									<input type="text" class="form-control past_visa_cancel" id="past_visa_cancel_reason" name="past_visa_cancel_reason" required="" value="<?php echo $past_visa_cancel_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_refuse">Have you ever been refused a U.S. Visa, or been refused admission to the United States, or withdrawn your application for admission at the port of entry?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_refuse" value="Yes" id="yes_past_visa_refuse" <?php if($past_visa_refuse == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_refuse" value="No" id="no_past_visa_refuse" <?php if($past_visa_refuse == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2 past_visa_refuse">
							<label for="past_visa_refuse_reason" class="past_visa_refuse">Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9 past_visa_refuse">
									<input type="text" class="form-control past_visa_refuse" id="past_visa_refuse_reason" name="past_visa_refuse_reason" required="" value="<?php echo $past_visa_refuse_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_immigration">Has anyone filed an immigration petition on your behalf?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_immigration" value="Yes" id="yes_past_visa_immigration" <?php if($past_visa_immigration == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_immigration" value="No" id="no_past_visa_immigration" <?php if($past_visa_immigration == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2 past_visa_immigration">
							<label for="past_visa_immigration_reason" class=" past_visa_immigration">Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9 past_visa_immigration">
									<input type="text" class="form-control  past_visa_immigration" id="past_visa_immigration_reason" name="past_visa_immigration_reason" required="" value="<?php echo $past_visa_immigration_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_esta">Have you ever had an ESTA application rejected?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_esta" value="Yes" id="yes_past_visa_esta" <?php if($past_visa_esta == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_esta" value="No" id="no_past_visa_esta" <?php if($past_visa_esta == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2 past_visa_esta">
							<label for="past_visa_esta_reason" class="past_visa_esta">Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9 past_visa_esta">
									<input type="text" class="form-control past_visa_esta" id="past_visa_esta_reason" name="past_visa_esta_reason" required="" value="<?php echo $past_visa_esta_reason; ?>">
								</div>
						<div class="form-group col-md-2">
							<label for="past_visa_entry_refuse">Have you ever been refused entry to the United States?<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_entry_refuse" value="Yes" id="yes_past_visa_entry_refuse" <?php if($past_visa_entry_refuse == "Yes"){ echo "checked"; } ?>> Yes
								</div>
								<div class="form-group col-md-3">
									<input type="radio" name="past_visa_entry_refuse" value="No" id="no_past_visa_entry_refuse" <?php if($past_visa_entry_refuse == "No"){ echo "checked"; } ?>> No
								</div>
						<div class="form-group col-md-3"></div>
						<div class="form-group col-md-2 past_visa_entry_refuse">
							<label for="past_visa_entry_refuse_reason" class="past_visa_entry_refuse">Explain<span class="required">*</span></label>
						</div>
								<div class="form-group col-md-9 past_visa_entry_refuse">
									<input type="text" class="form-control past_visa_entry_refuse" id="past_visa_entry_refuse_reason" name="past_visa_entry_refuse_reason" required="" value="<?php echo $past_visa_entry_refuse_reason; ?>">
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
									<option class="B" value="B1-B2" style="display: block;">BUSINESS &amp; TOURISM (TEMPORARY VISITOR) (B1/B2)</option>
									<option class="B" value="B1-CF" selected="" style="display: block;">BUSINESS&nbsp;/ CONFERENCE (B1)</option>
									<option class="B" value="B2-TM" style="display: block;">TOURISM&nbsp;/ MEDICAL TREATMENT (B2)</option>
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
									<option value="C">Friend</option>
									<option value="P">Child</option>
									<option value="S">Spouse</option>
									<option value="R">No Relative</option>
									<option value="B">Business Associate</option>
									<option value="H">School Official</option>
									<option value="O">No</option>
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
								<select name="upcoming_country" id="upcoming_country" style="width: 100%; height: 32px;">
									<option value="">Please Select</option>
									<option value="CAN" selected="">CANADA</option>
									<option value="" disabled="disabled">----------------------------------</option>
									<option value="AFGH">AFGHANISTAN</option>
									<option value="ALB">ALBANIA</option>
									<option value="ALGR">ALGERIA</option>
									<option value="ASMO">AMERICAN SAMOA</option>
									<option value="ANDO">ANDORRA</option>
									<option value="ANGL">ANGOLA</option>
									<option value="ANGU">ANGUILLA</option>
									<option value="ANTI">ANTIGUA AND BARBUDA</option>
									<option value="ARG">ARGENTINA</option>
									<option value="ARM">ARMENIA</option>
									<option value="ARB">ARUBA</option>
									<option value="XAS">AT SEA</option>
									<option value="ASTL">AUSTRALIA</option>
									<option value="AUST">AUSTRIA</option>
									<option value="AZR">AZERBAIJAN</option>
									<option value="BAMA">BAHAMAS</option>
									<option value="BAHR">BAHRAIN</option>
									<option value="BANG">BANGLADESH</option>
									<option value="BRDO">BARBADOS</option>
									<option value="BYS">BELARUS</option>
									<option value="BELG">BELGIUM</option>
									<option value="BLZ">BELIZE</option>
									<option value="BENN">BENIN</option>
									<option value="BERM">BERMUDA</option>
									<option value="BHU">BHUTAN</option>
									<option value="BOL">BOLIVIA</option>
									<option value="BON">BONAIRE</option>
									<option value="BIH">BOSNIA-HERZEGOVINA</option>
									<option value="BOT">BOTSUANA</option>
									<option value="BRZL">BRAZIL</option>
									<option value="IOT">BRITISH INDIAN OCEAN TERRITORY</option>
									<option value="BRVI">BRITISH VIRGIN ISLANDS</option>
									<option value="BRNI">BRUNEI</option>
									<option value="BULG">BULGARIA</option>
									<option value="BURK">BURKINA FASO</option>
									<option value="BURM">BURMA</option>
									<option value="BRND">BURUNDI</option>
									<option value="CAVI">CABO VERDE</option>
									<option value="CBDA">CAMBODIA</option>
									<option value="CMRN">CAMEROON</option>
									<option value="CAN" selected="">CANADA</option>
									<option value="CAYI">CAYMAN ISLANDS</option>
									<option value="CAFR">CENTRAL AFRICAN REPUBLIC</option>
									<option value="CHAD">CHAD</option>
									<option value="CHIL">CHILE</option>
									<option value="CHIN">CHINA</option>
									<option value="CHRI">CHRISTMAS ISLAND</option>
									<option value="COCI">COCOS KEELING ISLANDS</option>
									<option value="COL">COLOMBIA</option>
									<option value="COMO">COMOROS</option>
									<option value="COD">CONGO, DEMOCRATIC REPUBLIC OF THE</option>
									<option value="CONB">CONGO, REPUBLIC OF THE</option>
									<option value="CKIS">COOK ISLANDS</option>
									<option value="CSTR">COSTA RICA</option>
									<option value="IVCO">COTE D`IVOIRE</option>
									<option value="HRV">CROATIA</option>
									<option value="CUBA">CUBA</option>
									<option value="CUR">CURACAO</option>
									<option value="CYPR">CYPRUS</option>
									<option value="CZEC">CZECH REPUBLIC</option>
									<option value="DEN">DENMARK</option>
									<option value="DJI">DJIBOUTI</option>
									<option value="DOMN">DOMINICA</option>
									<option value="DOMR">DOMINICAN REPUBLIC</option>
									<option value="ECUA">ECUADOR</option>
									<option value="EGYP">EGYPT</option>
									<option value="ELSL">EL SALVADOR</option>
									<option value="EGN">EQUATORIAL GUINEA</option>
									<option value="ERI">ERITREA</option>
									<option value="EST">ESTONIA</option>
									<option value="ETH">ETHIOPIA</option>
									<option value="FKLI">FALKLAND ISLANDS</option>
									<option value="FRO">FAROE ISLANDS</option>
									<option value="FIJI">FIJI</option>
									<option value="FIN">FINLAND</option>
									<option value="FRAN">FRANCE</option>
									<option value="FRGN">FRENCH GUIANA</option>
									<option value="FPOL">FRENCH POLYNESIA</option>
									<option value="FSAT">FRENCH SOUTHERN AND ANTARCTIC TERRITORIES</option>
									<option value="GABN">GABON</option>
									<option value="GAM">GAMBIA, THE</option>
									<option value="XGZ">GAZA STRIP</option>
									<option value="GEO">GEORGIA</option>
									<option value="GER">GERMANY</option>
									<option value="GHAN">GHANA</option>
									<option value="GIB">GIBRALTAR</option>
									<option value="GRC">GREECE</option>
									<option value="GRLD">GREENLAND</option>
									<option value="GREN">GRENADA</option>
									<option value="GUAD">GUADELOUPE</option>
									<option value="GUAM">GUAM</option>
									<option value="GUAT">GUATEMALA</option>
									<option value="GNEA">GUINEA</option>
									<option value="GUIB">GUINEA - BISSAU</option>
									<option value="GUY">GUYANA</option>
									<option value="HAT">HAITI</option>
									<option value="HMD">HEARD AND MCDONALD ISLANDS</option>
									<option value="VAT">HOLY SEE (VATICAN CITY)</option>
									<option value="HOND">HONDURAS</option>
									<option value="HOKO">HONG KONG BNO</option>
									<option value="HNK">HONG KONG SAR</option>
									<option value="XHI">HOWLAND ISLAND</option>
									<option value="HUNG">HUNGARY</option>
									<option value="ICLD">ICELAND</option>
									<option value="XIR">IN THE AIR</option>
									<option value="IND">INDIA</option>
									<option value="IDSA">INDONESIA</option>
									<option value="IRAN">IRAN</option>
									<option value="IRAQ">IRAQ</option>
									<option value="IRE">IRELAND</option>
									<option value="ISRL">ISRAEL</option>
									<option value="ITLY">ITALY</option>
									<option value="JAM">JAMAICA</option>
									<option value="JPN">JAPAN</option>
									<option value="JRSM">JERUSALEM</option>
									<option value="JORD">JORDAN</option>
									<option value="KAZ">KAZAKHSTAN</option>
									<option value="KENY">KENYA</option>
									<option value="KIRI">KIRIBATI</option>
									<option value="PRK">KOREA, DEMOCRATIC REPUBLIC OF (NORTH)</option>
									<option value="KOR">KOREA, REPUBLIC OF (SOUTH)</option>
									<option value="KSV">KOSOVO</option>
									<option value="KUWT">KUWAIT</option>
									<option value="KGZ">KYRGYZSTAN</option>
									<option value="LAOS">LAOS</option>
									<option value="LATV">LATVIA</option>
									<option value="LEBN">LEBANON</option>
									<option value="LES">LESOTHO</option>
									<option value="LIBR">LIBERIA</option>
									<option value="LBYA">LIBYA</option>
									<option value="LCHT">LIECHTENSTEIN</option>
									<option value="LITH">LITHUANIA</option>
									<option value="LXM">LUXEMBOURG</option>
									<option value="MAC">MACAU</option>
									<option value="MKD">MACEDONIA</option>
									<option value="MADG">MADAGASCAR</option>
									<option value="MALW">MALAWI</option>
									<option value="MLAS">MALAYSIA</option>
									<option value="MLDI">MALDEN ISLAND</option>
									<option value="MLDV">MALDIVES</option>
									<option value="MALI">MALI</option>
									<option value="MLTA">MALTA</option>
									<option value="RMI">MARSHALL ISLANDS</option>
									<option value="MART">MARTINIQUE</option>
									<option value="MAUR">MAURITANIA</option>
									<option value="MRTS">MAURITIUS</option>
									<option value="MYT">MAYOTTE</option>
									<option value="AGS">MEXICO - AGUASCALIENTES</option>
									<option value="BC">MEXICO - BAJA CALIFORNIA NORTE</option>
									<option value="BCSR">MEXICO - BAJA CALIFORNIA SUR</option>
									<option value="CAMP">MEXICO - CAMPECHE</option>
									<option value="CHIS">MEXICO - CHIAPAS</option>
									<option value="CHIH">MEXICO - CHIHUAHUA</option>
									<option value="COAH">MEXICO - COAHUILA</option>
									<option value="COLI">MEXICO - COLIMA</option>
									<option value="DF">MEXICO - DISTRITO FEDERAL</option>
									<option value="DGO">MEXICO - DURANGO</option>
									<option value="GTO">MEXICO - GUANAJUATO</option>
									<option value="GRO">MEXICO - GUERRERO</option>
									<option value="HGO">MEXICO - HIDALGO</option>
									<option value="JAL">MEXICO - JALISCO</option>
									<option value="MCH">MEXICO - MICHOACAN</option>
									<option value="MOR">MEXICO - MORELOS</option>
									<option value="NAY">MEXICO - NAYARIT</option>
									<option value="NL">MEXICO - NUEVO LEON</option>
									<option value="OAX">MEXICO - OAXACA</option>
									<option value="PUE">MEXICO - PUEBLA</option>
									<option value="QRO">MEXICO - QUERETARO</option>
									<option value="QROO">MEXICO - QUINTANA ROO</option>
									<option value="SLP">MEXICO - SAN LUIS POTOSI</option>
									<option value="SIN">MEXICO - SINALOA</option>
									<option value="SON">MEXICO - SONORA</option>
									<option value="MXCO">MEXICO - STATE OF MEXICO</option>
									<option value="TAB">MEXICO - TABASCO</option>
									<option value="TAMP">MEXICO - TAMAULIPAS</option>
									<option value="TLAX">MEXICO - TLAXCALA</option>
									<option value="VER">MEXICO - VERACRUZ</option>
									<option value="YUC">MEXICO - YUCATAN</option>
									<option value="ZAC">MEXICO - ZACATECAS</option>
									<option value="FSM">MICRONESIA</option>
									<option value="MDWI">MIDWAY ISLANDS</option>
									<option value="MLD">MOLDOVA</option>
									<option value="MON">MONACO</option>
									<option value="MONG">MONGOLIA</option>
									<option value="MTG">MONTENEGRO</option>
									<option value="MONT">MONTSERRAT</option>
									<option value="MORO">MOROCCO</option>
									<option value="MOZ">MOZAMBIQUE</option>
									<option value="NAMB">NAMIBIA</option>
									<option value="NAU">NAURU</option>
									<option value="NEP">NEPAL</option>
									<option value="NETH">NETHERLANDS</option>
									<option value="NCAL">NEW CALEDONIA</option>
									<option value="NZLD">NEW ZEALAND</option>
									<option value="NIC">NICARAGUA</option>
									<option value="NIR">NIGER</option>
									<option value="NRA">NIGERIA</option>
									<option value="NIUE">NIUE</option>
									<option value="NFK">NORFOLK ISLAND</option>
									<option value="MNP">NORTH MARIANA ISLANDS</option>
									<option value="NIRE">NORTHERN IRELAND</option>
									<option value="NORW">NORWAY</option>
									<option value="OMAN">OMAN</option>
									<option value="PKST">PAKISTAN</option>
									<option value="PALA">PALAU</option>
									<option value="PLMR">PALMYRA ATOLL</option>
									<option value="PAN">PANAMA</option>
									<option value="PNG">PAPUA NEW GUINEA</option>
									<option value="PARA">PARAGUAY</option>
									<option value="PERU">PERU</option>
									<option value="PHIL">PHILIPPINES</option>
									<option value="PITC">PITCAIRN ISLANDS</option>
									<option value="POL">POLAND</option>
									<option value="PORT">PORTUGAL</option>
									<option value="PR">PUERTO RICO</option>
									<option value="QTAR">QATAR</option>
									<option value="REUN">REUNION</option>
									<option value="ROM">ROMANIA</option>
									<option value="RUS">RUSSIA</option>
									<option value="RWND">RWANDA</option>
									<option value="SABA">SABA ISLAND</option>
									<option value="MAF">SAINT MARTIN</option>
									<option value="WSAM">SAMOA</option>
									<option value="SMAR">SAN MARINO</option>
									<option value="STPR">SAO TOME AND PRINCIPE</option>
									<option value="SARB">SAUDI ARABIA</option>
									<option value="SENG">SENEGAL</option>
									<option value="SBA">SERBIA</option>
									<option value="SEYC">SEYCHELLES</option>
									<option value="SLEO">SIERRA LEONE</option>
									<option value="SING">SINGAPORE</option>
									<option value="STM">SINT MAARTEN</option>
									<option value="SVK">SLOVAKIA</option>
									<option value="SVN">SLOVENIA</option>
									<option value="SLMN">SOLOMON ISLANDS</option>
									<option value="SOMA">SOMALIA</option>
									<option value="SAFR">SOUTH AFRICA</option>
									<option value="SGS">SOUTH GEORGIA AND THE SOUTH SANDWICH ISLAND</option>
									<option value="SSDN">SOUTH SUDAN</option>
									<option value="SPN">SPAIN</option>
									<option value="SRL">SRI LANKA</option>
									<option value="STBR">ST. BARTHELEMY</option>
									<option value="STEU">ST. EUSTATIUS</option>
									<option value="SHEL">ST. HELENA</option>
									<option value="STCN">ST. KITTS AND NEVIS</option>
									<option value="SLCA">ST. LUCIA</option>
									<option value="SPMI">ST. PIERRE AND MIQUELON</option>
									<option value="STVN">ST. VINCENT AND THE GRENADINES</option>
									<option value="SUDA">SUDAN</option>
									<option value="SURM">SURINAME</option>
									<option value="SJM">SVALBARD</option>
									<option value="SZLD">SWAZILAND</option>
									<option value="SWDN">SWEDEN</option>
									<option value="SWTZ">SWITZERLAND</option>
									<option value="SYR">SYRIA</option>
									<option value="TWAN">TAIWAN</option>
									<option value="TJK">TAJIKISTAN</option>
									<option value="TAZN">TANZANIA</option>
									<option value="THAI">THAILAND</option>
									<option value="TMOR">TIMOR-LESTE</option>
									<option value="TOGO">TOGO</option>
									<option value="TKL">TOKELAU</option>
									<option value="TONG">TONGA</option>
									<option value="TRIN">TRINIDAD AND TOBAGO</option>
									<option value="TNSA">TUNISIA</option>
									<option value="TRKY">TURKEY</option>
									<option value="TKM">TURKMENISTAN</option>
									<option value="TCIS">TURKS AND CAICOS ISLANDS</option>
									<option value="TUV">TUVALU</option>
									<option value="UGAN">UGANDA</option>
									<option value="UKR">UKRAINE</option>
									<option value="UAE">UNITED ARAB EMIRATES</option>
									<option value="GRBR">UNITED KINGDOM</option>
									<option value="USA">UNITED STATES OF AMERICA</option>
									<option value="URU">URUGUAY</option>
									<option value="UZB">UZBEKISTAN</option>
									<option value="VANU">VANUATU</option>
									<option value="VENZ">VENEZUELA</option>
									<option value="VTNM">VIETNAM</option>
									<option value="VI">VIRGIN ISLANDS (U.S.)</option>
									<option value="WKI">WAKE ISLAND</option>
									<option value="WAFT">WALLIS AND FUTUNA ISLANDS</option>
									<option value="XWB">WEST BANK</option>
									<option value="SSAH">WESTERN SAHARA</option>
									<option value="YEM">YEMEN</option>
									<option value="ZAMB">ZAMBIA</option>
									<option value="ZIMB">ZIMBABWE</option>
								</select>
							</div>
							<input type="hidden" name="temp_user_id" value="<?php if(isset($_COOKIE['temp_user_id'])){echo $_COOKIE['temp_user_id'];}else{ echo $user_id; } ?>">
							
					
					</div>
					<div class="form-group col-md-8">
					<button type="submit" class="btn btn-default" style="float: right;">
							CONTINUE TO STEP 3</button>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}  
<script type="text/javascript">
    $(document).ready(function() {
        $("#no_past_visit").click(function(){            
            $(".past_visit").removeAttr("required");
            $(".past_visit").css({"display": "none"});
        });
        $("#yes_past_visit").click(function(){            
            $(".past_visit").attr("required", "true");
            $(".past_visit").css({"display": "inline"});
        });
        $("#no_past_visit_cancel").click(function(){            
            $(".past_visa_cancel").removeAttr("required");
            $(".past_visa_cancel").css({"display": "none"});
        });
        $("#yes_past_visit_cancel").click(function(){            
            $(".past_visa_cancel").removeAttr("required");
            $(".past_visa_cancel").css({"display": "inline"});
        });
        $("#no_past_visa_refuse").click(function(){            
            $(".past_visa_refuse").removeAttr("required");
            $(".past_visa_refuse").css({"display": "none"});
        });
        $("#yes_past_visa_refuse").click(function(){            
            $(".past_visa_refuse").removeAttr("required");
            $(".past_visa_refuse").css({"display": "inline"});
        });
        $("#no_past_visa_immigration").click(function(){            
            $(".past_visa_immigration").removeAttr("required");
            $(".past_visa_immigration").css({"display": "none"});
        });
        $("#yes_past_visa_immigration").click(function(){            
            $(".past_visa_immigration").removeAttr("required");
            $(".past_visa_immigration").css({"display": "inline"});
        });
        $("#no_past_visa_esta").click(function(){            
            $(".past_visa_esta").removeAttr("required");
            $(".past_visa_esta").css({"display": "none"});
        });
        $("#yes_past_visa_esta").click(function(){            
            $(".past_visa_esta").removeAttr("required");
            $(".past_visa_esta").css({"display": "inline"});
        });
        $("#no_past_visa_entry_refuse").click(function(){            
            $(".past_visa_entry_refuse").removeAttr("required");
            $(".past_visa_entry_refuse").css({"display": "none"});
        });
        $("#yes_past_visa_entry_refuse").click(function(){            
            $(".past_visa_entry_refuse").removeAttr("required");
            $(".past_visa_entry_refuse").css({"display": "inline"});
        });

        $("#add_country_name").click(function(){    
        	var val = document.getElementById('add_country_name').value;
        	if(val == 'none'){
        		$("#add_passport_number").removeAttr("required");
	            $("#add_residence_country").removeAttr("required");
	            $("#add_passport_number").prop("disabled", true);
	            $("#add_residence_country").prop("disabled", true);
        	}            
        });
    });
</script>
@stop
@section('script')
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
@stop