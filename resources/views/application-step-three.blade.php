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
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
	} 
	?>
{!! Form::open(['route' => ['additionalQuestion.update'], 'id' => 'additionalQuestion', 'method' => 'post', 'files' => true]) !!}
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
@if(!empty($AddQues))
	@foreach($AddQues as $add_ques)
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
			?>
	@endforeach
@endif
<div class="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
				<p class="lead">ADDITIONAL QUESTIONS</p>
				<div class="enquiry-form">
					<form method="post" action="#">
						<div class="form-row">
							<div class="form-group col-md-2">
								<label for="addn_embassy">Which US embassy will you be going to for the interview? <span class="required">*</span></label>
							</div>
							<div class="form-group col-md-10">
								<select name="addn_embassy" style="width: 100%; height: 32px;">
									<option value="">Please Select</option>
									<option value="KBL">AFGHANISTAN,  KABUL</option>
									<option value="TIA">ALBANIA,  TIRANA</option>
									<option value="ALG">ALGERIA,  ALGIERS</option>
									<option value="LUA">ANGOLA,  LUANDA</option>
									<option value="BNS">ARGENTINA,  BUENOS AIRES</option>
									<option value="YRV">ARMENIA,  YEREVAN</option>
									<option value="MLB">AUSTRALIA,  MELBOURNE</option>
									<option value="PRT">AUSTRALIA,  PERTH</option>
									<option value="SYD">AUSTRALIA,  SYDNEY</option>
									<option value="VNN">AUSTRIA,  VIENNA</option>
									<option value="BKU">AZERBAIJAN,  BAKU</option>
									<option value="NSS">BAHAMAS,  NASSAU</option>
									<option value="MNA">BAHRAIN,  MANAMA</option>
									<option value="DHK">BANGLADESH,  DHAKA</option>
									<option value="BGN">BARBADOS,  BRIDGETOWN</option>
									<option value="MSK">BELARUS,  MINSK</option>
									<option value="BRS">BELGIUM,  BRUSSELS</option>
									<option value="BLZ">BELIZE,  BELMOPAN</option>
									<option value="COT">BENIN,  COTONOU</option>
									<option value="HML">BERMUDA,  HAMILTON</option>
									<option value="LPZ">BOLIVIA,  LA PAZ</option>
									<option value="SAR">BOSNIA-HERZEGOVINA,  SARAJEVO</option>
									<option value="GAB">BOTSWANA,  GABORONE</option>
									<option value="BRA">BRAZIL,  BRASILIA</option>
									<option value="RCF">BRAZIL,  RECIFE</option>
									<option value="RDJ">BRAZIL,  RIO DE JANEIRO</option>
									<option value="SPL">BRAZIL,  SAO PAULO</option>
									<option value="PTG">BRAZIL, Porto Alegre</option>
									<option value="BSB">BRUNEI,  BANDAR SERI BEGAWAN</option>
									<option value="SOF">BULGARIA,  SOFIA</option>
									<option value="OUG">BURKINA FASO,  OUAGADOUGOU</option>
									<option value="RNG">BURMA,  RANGOON</option>
									<option value="BUJ">BURUNDI,  BUJUMBURA</option>
									<option value="PIA">CABO VERDE,  PRAIA</option>
									<option value="PHP">CAMBODIA,  PHNOM PENH</option>
									<option value="YDE">CAMEROON,  YAOUNDE</option>
									<option value="CLG">CANADA,  CALGARY</option>
									<option value="HLF">CANADA,  HALIFAX</option>
									<option value="MTL">CANADA,  MONTREAL</option>
									<option value="OTT">CANADA,  OTTAWA</option>
									<option value="QBC">CANADA,  QUEBEC</option>
									<option value="TRT">CANADA,  TORONTO</option>
									<option value="VAC">CANADA,  VANCOUVER</option>
									<option value="NDJ">CHAD,  N`DJAMENA</option>
									<option value="SNT">CHILE,  SANTIAGO</option>
									<option value="BEJ">CHINA,  BEIJING</option>
									<option value="CHE">CHINA,  CHENGDU</option>
									<option value="GUZ">CHINA,  GUANGZHOU</option>
									<option value="SHG">CHINA,  SHANGHAI</option>
									<option value="SNY">CHINA,  SHENYANG</option>
									<option value="BGT">COLOMBIA,  BOGOTA</option>
									<option value="BRZ">CONGO,  BRAZZAVILLE</option>
									<option value="KIN">CONGO,  KINSHASA</option>
									<option value="SNJ">COSTA RICA,  SAN JOSE</option>
									<option value="ABJ">COTE D`IVORIE,  ABIDJAN</option>
									<option value="ZGB">CROATIA,  ZAGREB</option>
									<option value="HAV">CUBA,  HAVANA</option>
									<option value="CRC">CURACAO,  CURACAO</option>
									<option value="NCS">CYPRUS,  NICOSIA</option>
									<option value="PRG">CZECH REPUBLIC,  PRAGUE</option>
									<option value="CPN">DENMARK,  COPENHAGEN</option>
									<option value="DJI">DJIBOUTI,  DJIBOUTI</option>
									<option value="SDO">DOMINICAN REPUBLIC,  SANTO DOMINGO</option>
									<option value="GYQ">ECUADOR,  GUAYAQUIL</option>
									<option value="QTO">ECUADOR,  QUITO</option>
									<option value="CRO">EGYPT,  CAIRO</option>
									<option value="SNS">EL SALVADOR,  SAN SALVADOR</option>
									<option value="LND">ENGLAND,  LONDON</option>
									<option value="MBO">EQUATORIAL GUINEA,  MALABO</option>
									<option value="ASM">ERITREA,  ASMARA</option>
									<option value="TAL">ESTONIA,  TALLINN</option>
									<option value="ADD">ETHIOPIA,  ADDIS ABABA</option>
									<option value="SUV">FIJI,  SUVA</option>
									<option value="HLS">FINLAND,  HELSINKI</option>
									<option value="PRS">FRANCE,  PARIS</option>
									<option value="LIB">GABON,  LIBREVILLE</option>
									<option value="BAN">GAMBIA,  BANJUL</option>
									<option value="TBL">GEORGIA,  TBILISI</option>
									<option value="BRL">GERMANY,  BERLIN</option>
									<option value="FRN">GERMANY,  FRANKFURT</option>
									<option value="MUN">GERMANY,  MUNICH</option>
									<option value="ACC">GHANA,  ACCRA</option>
									<option value="ATH">GREECE,  ATHENS</option>
									<option value="GTM">GUATEMALA,  GUATEMALA CITY</option>
									<option value="CRY">GUINEA,  CONAKRY</option>
									<option value="GEO">GUYANA,  GEORGETOWN</option>
									<option value="PTP">HAITI,  PORT-AU-PRINCE</option>
									<option value="TGG">HONDURAS,  TEGUCIGALPA</option>
									<option value="HNK">HONG KONG</option>
									<option value="BDP">HUNGARY,  BUDAPEST</option>
									<option value="RKJ">ICELAND,  REYKJAVIK</option>
									<option value="MDR">INDIA,  CHENNAI</option>
									<option value="HYD">INDIA,  HYDERABAD</option>
									<option value="CLC">INDIA,  KOLKATA</option>
									<option value="BMB" selected="">INDIA,  MUMBAI</option>
									<option value="NWD">INDIA,  NEW DELHI</option>
									<option value="JAK">INDONESIA,  JAKARTA</option>
									<option value="SRB">INDONESIA,  SURABAYA</option>
									<option value="BGH">IRAQ,  BAGHDAD</option>
									<option value="ERB">IRAQ,  ERBIL</option>
									<option value="DBL">IRELAND,  DUBLIN</option>
									<option value="TLV">ISRAEL,  TEL AVIV</option>
									<option value="FLR">ITALY,  FLORENCE</option>
									<option value="MLN">ITALY,  MILAN</option>
									<option value="NPL">ITALY,  NAPLES</option>
									<option value="RME">ITALY,  ROME</option>
									<option value="KNG">JAMAICA,  KINGSTON</option>
									<option value="NHA">JAPAN,  NAHA</option>
									<option value="KBO">JAPAN,  OSAKA/FUKUOKA</option>
									<option value="TKY">JAPAN,  TOKYO/SAPPORO</option>
									<option value="JRS">JERUSALEM</option>
									<option value="AMM">JORDAN,  AMMAN</option>
									<option value="ATA">KAZAKHSTAN,  ALMATY</option>
									<option value="AST">KAZAKHSTAN,  ASTANA</option>
									<option value="NRB">KENYA,  NAIROBI</option>
									<option value="PRI">KOSOVO,  PRISTINA</option>
									<option value="KWT">KUWAIT,  KUWAIT CITY</option>
									<option value="BKK">KYRGYZSTAN,  BISHKEK</option>
									<option value="VNT">LAOS,  VIENTIANE</option>
									<option value="RGA">LATVIA,  RIGA</option>
									<option value="BRT">LEBANON,  BEIRUT</option>
									<option value="MAS">LESOTHO,  MASERU</option>
									<option value="MRV">LIBERIA,  MONROVIA</option>
									<option value="TRP">LIBYA,  TRIPOLI</option>
									<option value="VIL">LITHUANIA,  VILNIUS</option>
									<option value="LXM">LUXEMBOURG,  LUXEMBOURG</option>
									<option value="SKO">MACEDONIA,  SKOPJE</option>
									<option value="ANT">MADAGASCAR,  ANTANANARIVO</option>
									<option value="LIL">MALAWI,  LILONGWE</option>
									<option value="KLL">MALAYSIA,  KUALA LUMPUR</option>
									<option value="BAM">MALI,  BAMAKO</option>
									<option value="VLL">MALTA,  VALLETTA</option>
									<option value="MAJ">MARSHALL ISLANDS,  MAJURO</option>
									<option value="NUK">MAURITANIA,  NOUAKCHOTT</option>
									<option value="PTL">MAURITIUS,  PORT LOUIS</option>
									<option value="CDJ">MEXICO,  CIUDAD JUAREZ</option>
									<option value="GDL">MEXICO,  GUADALAJARA</option>
									<option value="HER">MEXICO,  HERMOSILLO</option>
									<option value="MTM">MEXICO,  MATAMOROS</option>
									<option value="MER">MEXICO,  MERIDA</option>
									<option value="MEX">MEXICO,  MEXICO CITY</option>
									<option value="MTR">MEXICO,  MONTERREY</option>
									<option value="NGL">MEXICO,  NOGALES</option>
									<option value="NVL">MEXICO,  NUEVO LAREDO</option>
									<option value="TJT">MEXICO,  TIJUANA</option>
									<option value="KOL">MICRONESIA,  KOLONIA</option>
									<option value="CHS">MOLDOVA,  CHISINAU</option>
									<option value="ULN">MONGOLIA,  ULAANBAATAR</option>
									<option value="POD">MONTENEGRO,  PODGORICA</option>
									<option value="CSB">MOROCCO,  CASABLANCA</option>
									<option value="MAP">MOZAMBIQUE,  MAPUTO</option>
									<option value="WHK">NAMIBIA,  WINDHOEK</option>
									<option value="KDU">NEPAL,  KATHMANDU</option>
									<option value="AMS">NETHERLANDS,  AMSTERDAM</option>
									<option value="ACK">NEW ZEALAND,  AUCKLAND</option>
									<option value="MNG">NICARAGUA,  MANAGUA</option>
									<option value="NMY">NIGER,  NIAMEY</option>
									<option value="ABU">NIGERIA,  ABUJA</option>
									<option value="LGS">NIGERIA,  LAGOS</option>
									<option value="BLF">NORTHERN IRELAND,  BELFAST</option>
									<option value="OSL">NORWAY,  OSLO</option>
									<option value="MST">OMAN,  MUSCAT</option>
									<option value="ISL">PAKISTAN,  ISLAMABAD</option>
									<option value="KRC">PAKISTAN,  KARACHI</option>
									<option value="KOR">PALAU,  KOROR</option>
									<option value="PNM">PANAMA,  PANAMA CITY</option>
									<option value="PTM">PAPUA NEW GUINEA,  PORT MORESBY</option>
									<option value="ASN">PARAGUAY,  ASUNCION</option>
									<option value="LMA">PERU,  LIMA</option>
									<option value="MNL">PHILIPPINES,  MANILA</option>
									<option value="KRK">POLAND,  KRAKOW</option>
									<option value="WRW">POLAND,  WARSAW</option>
									<option value="LSB">PORTUGAL,  LISBON</option>
									<option value="PTD">PORTUGAL,  PONTA DELGADA</option>
									<option value="DOH">QATAR,  DOHA</option>
									<option value="BCH">ROMANIA,  BUCHAREST</option>
									<option value="MOS">RUSSIA,  MOSCOW</option>
									<option value="SPT">RUSSIA,  ST. PETERSBURG</option>
									<option value="VLA">RUSSIA,  VLADIVOSTOK</option>
									<option value="YEK">RUSSIA,  YEKATERINBURG</option>
									<option value="KGL">RWANDA,  KIGALI</option>
									<option value="APA">SAMOA,  APIA</option>
									<option value="DHR">SAUDI ARABIA,  DHAHRAN</option>
									<option value="JDD">SAUDI ARABIA,  JEDDAH</option>
									<option value="RID">SAUDI ARABIA,  RIYADH</option>
									<option value="DKR">SENEGAL,  DAKAR</option>
									<option value="BLG">SERBIA,  BELGRADE</option>
									<option value="FTN">SIERRA LEONE,  FREETOWN</option>
									<option value="SGP">SINGAPORE,  SINGAPORE</option>
									<option value="BTS">SLOVAKIA,  BRATISLAVA</option>
									<option value="LJU">SLOVENIA,  LJUBLJANA</option>
									<option value="CPT">SOUTH AFRICA,  CAPE TOWN</option>
									<option value="DRB">SOUTH AFRICA,  DURBAN</option>
									<option value="JHN">SOUTH AFRICA,  JOHANNESBURG</option>
									<option value="SEO">SOUTH KOREA,  SEOUL</option>
									<option value="JBA">SOUTH SUDAN,  JUBA</option>
									<option value="MDD">SPAIN,  MADRID</option>
									<option value="CLM">SRI LANKA,  COLOMBO</option>
									<option value="KHT">SUDAN,  KHARTOUM</option>
									<option value="PRM">SURINAME,  PARAMARIBO</option>
									<option value="MBA">SWAZILAND,  MBABANE</option>
									<option value="STK">SWEDEN,  STOCKHOLM</option>
									<option value="BEN">SWITZERLAND,  BERN</option>
									<option value="DMS">SYRIA,  DAMASCUS</option>
									<option value="TAI">TAIWAN,  TAIPEI</option>
									<option value="DHB">TAJIKISTAN,  DUSHANBE</option>
									<option value="DRS">TANZANIA,  DAR ES SALAAM</option>
									<option value="BNK">THAILAND,  BANGKOK</option>
									<option value="CHN">THAILAND,  CHIANG MAI</option>
									<option value="DIL">TIMOR LESTE,  DILI</option>
									<option value="LOM">TOGO,  LOME</option>
									<option value="PTS">TRINIDAD,  PORT OF SPAIN</option>
									<option value="TNS">TUNISIA,  TUNIS</option>
									<option value="ANK">TURKEY,  ANKARA</option>
									<option value="IST">TURKEY,  ISTANBUL</option>
									<option value="AKD">TURKMENISTAN,  ASHGABAT</option>
									<option value="KMP">UGANDA,  KAMPALA</option>
									<option value="KEV">UKRAINE,  KYIV</option>
									<option value="ABD">UNITED ARAB EMIRATES,  ABU DHABI</option>
									<option value="DUB">UNITED ARAB EMIRATES,  DUBAI</option>
									<option value="MTV">URUGUAY,  MONTEVIDEO</option>
									<option value="THT">UZBEKISTAN,  TASHKENT</option>
									<option value="CRS">VENEZUELA,  CARACAS</option>
									<option value="HAN">VIETNAM,  HANOI</option>
									<option value="HCM">VIETNAM,  HO CHI MINH CITY</option>
									<option value="SAA">YEMEN,  SANAA</option>
									<option value="LUS">ZAMBIA,  LUSAKA</option>
									<option value="HRE">ZIMBABWE,  HARARE</option>
								</select>
							</div>
							<div class="form-group col-md-2">
								<label for="addn_student">Are you a student?<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_student" value="Yes" id="yes_addn_student"> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_student" value="No" id="no_addn_student"> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2 addn_student">
								<label for="addn_school" class=" addn_student">School Name<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_student">
								<input type="text" class="form-control addn_student" id="addn_school" name="addn_school" required="" value="{{$addn_school}}">
							</div>
							<div class="form-group col-md-2 addn_student">
								<label for="addn_street_address" class=" addn_student">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_student">
								<input type="text" class="form-control addn_student" id="addn_street_address" name="addn_street_address" required="" value="{{$addn_street_address}}">
							</div>
							<div class="form-group col-md-2 addn_student">
								<label for="addn_city" class=" addn_student">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_student">
								<input type="text" class="form-control addn_student" id="addn_city" name="addn_city" required="" value="{{$addn_city}}">
							</div>
							<div class="form-group col-md-2 addn_student">
								<label for="addn_state" class=" addn_student">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_student">
								<input type="text" class="form-control addn_student" id="addn_state" name="addn_state" required="" value="{{$addn_state}}">
							</div>
							<div class="form-group col-md-2 addn_student">
								<label for="addn_country" class=" addn_student">Country<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_student">
								<input type="text" class="form-control addn_student" id="addn_country" name="addn_country" required="" value="{{$addn_country}}">
							</div>
							<div class="form-group col-md-2 addn_student">
								<label for="addn_major" class=" addn_student">Major<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_student">
								<input type="text" class="form-control addn_student" id="addn_major" name="addn_major" required="" value="{{$addn_major}}">
							</div>
							<div class="form-group col-md-2 addn_student">
								<label for="addn_duties" class=" addn_student">Please describe your duties<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_student">
								<input type="text" class="form-control addn_student" id="addn_duties" name="addn_duties" required="" value="{{$addn_duties}}">
							</div>
							<hr/>
							<div class="form-group col-md-2">
								<label for="addn_working">Are you currently working? 
								<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_working" value="Yes" id="yes_addn_working"> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_working" value="No" id="no_addn_working"> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_working_desc addn_working">I am currently working in<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<select name="addn_working_desc" style="width: 100%; height: 32px;" class=" addn_working">
									<option value="">Select Industry</option>
									<option value="A" <?php if($addn_working_desc == "A"){ echo 'selected'; }?>>Agriculture</option>
									<option value="AP" <?php if($addn_working_desc == "AP"){ echo 'selected'; }?>>Artist/Performer</option>
									<option value="B"  <?php if($addn_working_desc == "B"){ echo 'selected'; }?>>Business</option>
									<option value="CM"  <?php if($addn_working_desc == "CM"){ echo 'selected'; }?>>Communications</option>
									<option value="CS"  <?php if($addn_working_desc == "CS"){ echo 'selected'; }?>>Computer Science</option>
									<option value="ED"  <?php if($addn_working_desc == "ED"){ echo 'selected'; }?>>Education</option>
									<option value="EN"  <?php if($addn_working_desc == "EN"){ echo 'selected'; }?>>Engineering</option>
									<option value="C"  <?php if($addn_working_desc == "C"){ echo 'selected'; }?>>Food Services</option>
									<option value="G"  <?php if($addn_working_desc == "G"){ echo 'selected'; }?>>Government</option>
									<option value="H"  <?php if($addn_working_desc == "H"){ echo 'selected'; }?>>Homemaker</option>
									<option value="LP"  <?php if($addn_working_desc == "LP"){ echo 'selected'; }?>>Legal Profession</option>
									<option value="MH" <?php if($addn_working_desc == "MH"){ echo 'selected'; }?> >Medical/Health</option>
									<option value="M"  <?php if($addn_working_desc == "M"){ echo 'selected'; }?>>Military</option>
									<option value="NS"  <?php if($addn_working_desc == "NS"){ echo 'selected'; }?>>Natural Sciences</option>
									<option value="O"  <?php if($addn_working_desc == "O"){ echo 'selected'; }?>>Other</option>
									<option value="PS"  <?php if($addn_working_desc == "PS"){ echo 'selected'; }?>>Physical Sciences</option>
									<option value="RV" <?php if($addn_working_desc == "RV"){ echo 'selected'; }?> >Religious Vocation</option>
									<option value="R"  <?php if($addn_working_desc == "RT"){ echo 'selected'; }?>>Research</option>
									<option value="RT"  <?php if($addn_working_desc == "RT"){ echo 'selected'; }?>>Retired</option>
									<option value="SS"  <?php if($addn_working_desc == "SS"){ echo 'selected'; }?>>Social Science</option>
									<option value="S"  <?php if($addn_working_desc == "S"){ echo 'selected'; }?>>Student</option>
								</select>
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_occupation" class=" addn_working">Occupation<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_occupation" name="addn_occupation" required="" value="{{$addn_occupation}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_employer" class=" addn_working">Name of employer<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_employer" name="addn_employer" required="" value="{{$addn_employer}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_employer_address" class=" addn_working">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_employer_address" name="addn_employer_address" required="" value="{{$addn_employer_address}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_employer_unit_number" class=" addn_working">Employer's Suite/Unit Number<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_employer_unit_number" name="addn_employer_unit_number" required="" value="{{$addn_employer_unit_number}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_emp_city" class=" addn_working">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_emp_city" name="addn_emp_city" required="" value="{{$addn_emp_city}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_emp_state" class=" addn_working">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_emp_state" name="addn_emp_state" required="" value="{{$addn_emp_state}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_emp_zip" class=" addn_working">ZIP or Postal Code<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_emp_zip" name="addn_emp_zip" required="" value="{{$addn_emp_zip}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_emp_country" class=" addn_working">Country<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_emp_country" name="addn_emp_country" required="" value="{{$addn_emp_country}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_duties_desc" class=" addn_working">Please describe your duties<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_duties_desc" name="addn_duties_desc" required="" value="{{$addn_duties_desc}}">
							</div>
							<div class="form-group col-md-2 addn_working">
								<label for="addn_income" class=" addn_working">What is your monthly income in your local currency?<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_working">
								<input type="text" class="form-control addn_working" id="addn_income" name="addn_income" required="" value="{{$addn_income}}">
							</div>
							<hr/>
							<div class="form-group col-md-2">
								<label for="addn_prev_emp">Have you been previously employed? 
								<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_prev_emp" value="Yes" id="yes_addn_prev_emp"> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_prev_emp" value="No" id="no_addn_prev_emp"> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_prev_emp_name">Name of employer<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_prev_emp_name" name="addn_prev_emp_name" required="" value="{{$addn_prev_emp_name}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_prev_emp_title" class=" addn_prev_emp">What was your job title in this job?<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_prev_emp_title" name="addn_prev_emp_title" required="" value="{{$addn_prev_emp_title}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_prev_emp_duties" class=" addn_prev_emp">What did your job responsibilities and duties include in this job?<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_prev_emp_duties" name="addn_prev_emp_duties" required="" value="{{$addn_prev_emp_duties}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_prev_emp_supervisor" class=" addn_prev_emp">Supervisor's Surname<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_prev_emp_supervisor" name="addn_prev_emp_supervisor" required="" value="{{$addn_prev_emp_supervisor}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_prev_emp_city" class=" addn_prev_emp">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_prev_emp_city" name="addn_prev_emp_city" required="" value="{{$addn_prev_emp_city}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_prev_emp_super_name" class=" addn_prev_emp">Supervisor's Given Name<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_prev_emp_super_name" name="addn_prev_emp_super_name" required="" value="{{$addn_prev_emp_super_name}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_prev_emp_address" class=" addn_prev_emp">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_prev_emp_address" name="addn_prev_emp_address" required="" value="{{$addn_prev_emp_address}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_apartment" class=" addn_prev_emp">Apartment/Suite/Unit Number<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_apartment" name="addn_apartment" required="" value="{{$addn_apartment}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_apartment_city" class=" addn_prev_emp">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_apartment_city" name="addn_apartment_city" required="" value="{{$addn_apartment_city}}">
							</div>
							<div class="form-group col-md-2 addn_prev_emp">
								<label for="addn_apartment_state" class=" addn_prev_emp">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_prev_emp">
								<input type="text" class="form-control addn_prev_emp" id="addn_apartment_state" name="addn_apartment_state" required="" value="{{$addn_apartment_state}}">
							</div>
							<hr/>
							<div class="form-group col-md-2">
								<label for="addn_academic">Have you attended an academic institution of high school and above?<span class="required">*</span></label>
							</div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_academic" value="Yes" id="yes_addn_academic"> Yes
                            </div>
                            <div class="form-group col-md-3">
                                <input type="radio" name="addn_academic" value="No" id="no_addn_academic"> No
                            </div>
							<div class="form-group col-md-3">
							</div>
							<div class="form-group col-md-2 addn_academic">
								<label for="addn_academic_name" class=" addn_academic">School Name<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_academic">
								<input type="text" class="form-control addn_academic" id="addn_academic_name" name="addn_academic_name" required="" value="{{$addn_academic_name}}">
							</div>
							<div class="form-group col-md-2 addn_academic">
								<label for="addn_academic_address" class=" addn_academic">Street Address<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_academic">
								<input type="text" class="form-control addn_academic" id="addn_academic_address" name="addn_academic_address" required="" value="{{$addn_academic_address}}">
							</div>
							<div class="form-group col-md-2 addn_academic">
								<label for="addn_academic_city" class=" addn_academic">City<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9">
								<input type="text" class="form-control addn_academic" id="addn_academic_city" name="addn_academic_city" required="" value="{{$addn_academic_city}}">
							</div>
							<div class="form-group col-md-2 addn_academic">
								<label for="addn_academic_state" class=" addn_academic">State/Province<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_academic">
								<input type="text" class="form-control addn_academic" id="addn_academic_state" name="addn_academic_state" required="" value="{{$addn_academic_state}}">
							</div>
							<div class="form-group col-md-2 addn_academic">
								<label for="addn_academic_country" class=" addn_academic">Country<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_academic">
								<input type="text" class="form-control addn_academic" id="addn_academic_country" name="addn_academic_country" required="" value="{{$addn_academic_country}}">
							</div>
							<div class="form-group col-md-2 addn_academic">
								<label for="addn_academic_major" class=" addn_academic">Major<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_academic">
								<input type="text" class="form-control addn_academic" id="addn_academic_major" name="addn_academic_major" required="" value="{{$addn_academic_major}}">
							</div>
							<div class="form-group col-md-2 addn_academic">
								<label for="addn_academic_duties" class=" addn_academic">Please describe your duties<span class="required">*</span></label>
							</div>
							<div class="form-group col-md-9 addn_academic">
								<input type="text" class="form-control addn_academic" id="addn_academic_duties" name="addn_academic_duties" required="" value="{{$addn_academic_duties}}">
							</div>
							<hr/>
						</div>
                        <input type="hidden" name="temp_user_id" value="<?php if(isset($_COOKIE['temp_user_id'])){echo $_COOKIE['temp_user_id'];}else{ echo $user_id; } ?>">
						<div class="form-group col-md-8">
					<button type="submit" class="btn btn-default" style="float: right;">
							CONTINUE TO STEP 3</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}  
<script type="text/javascript">
    $(document).ready(function() {
        $("#no_addn_student").click(function(){            
            $(".addn_student").removeAttr("required");
            $(".addn_student").css({"display": "none"});
        });
        $("#yes_addn_student").click(function(){            
            $(".addn_student").attr("required", "true");
            $(".addn_student").css({"display": "inline"});
        });
        $("#no_addn_working").click(function(){            
            $(".addn_working").removeAttr("required");
            $(".addn_working").css({"display": "none"});
        });
        $("#yes_addn_working").click(function(){            
            $(".addn_working").removeAttr("required");
            $(".addn_working").css({"display": "inline"});
        });
        $("#no_addn_prev_emp").click(function(){            
            $(".addn_prev_emp").removeAttr("required");
            $(".addn_prev_emp").css({"display": "none"});
        });
        $("#yes_addn_prev_emp").click(function(){            
            $(".addn_prev_emp").removeAttr("required");
            $(".addn_prev_emp").css({"display": "inline"});
        });
        $("#no_addn_academic").click(function(){            
            $(".addn_academic").removeAttr("required");
            $(".addn_academic").css({"display": "none"});
        });
        $("#yes_addn_academic").click(function(){            
            $(".addn_academic").removeAttr("required");
            $(".addn_academic").css({"display": "inline"});
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