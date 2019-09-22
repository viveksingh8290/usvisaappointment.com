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
<?php if(!empty($personalInfo)): ?>
    <?php print_r($personalInfo); ?>
 <?php endif; ?>
 
<?php echo Form::open(['route' => ['personalInformation.update'], 'id' => 'personalInformationUpdate', 'method' => 'post', 'files' => true]); ?>


 

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 clr">
                <p class="lead">APPLICANT PERSONAL INFORMATION</p>

                <div class="enquiry-form">
                    
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="email">Name<span class="required">*</span></label>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="first_name">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" placeholder="Middle Name">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="last_name">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Full name in native alphabet <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" class="form-control" id="native_name" name="native_name" placeholder="Full name in native alphabet" >
                            </div>

                            <div class="form-group col-md-2">
                                <label for="email">Date of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">

                                <label for="Day">Day<span class="required">*</span></label>

                                <select name="DOB_Day" style="width: 100%; height: 32px;">
                                    <?php
                                        for ($i=1; $i < 32; $i++) { 
                                           ?>
                                            <option value="<?php echo e($i); ?>"><?php echo $i; ?></option>
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
                                        <option value="<?php echo $value;?>"><?php echo $value;?></option>
                                        <?php
                                    }
                                    ?>                                    
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="DOB_Year">Year<span class="required">*</span></label>
                                <input type="text" name="DOB_Year" id="DOB_Year" class="form-control" minlength="4" maxlength="4">
                                
                            </div>

                            <div class="form-group col-md-2">
                                <label for="email">Gender<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="radio" name="user_gender" value="male" checked="true"> Male
                                <input type="radio" name="user_gender" value="female"> Female
                                <input type="radio" name="user_gender" value="other"> Other
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Personal Email id<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="email">Email <span class="required">*</span></label>
                                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Email" >
                            </div>
                            <div class="form-group col-md-4">
                                <label for="user_confirm_email">Confirm Email <span class="required">*</span></label>
                                <input type="email" class="form-control" id="user_confirm_email" name="user_confirm_email" placeholder="Confirm Email" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Place">Place of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">

                                <label for="Country">country<span class="required">*</span></label>

                                <input type="text" name="country_name" placeholder="country" class="form-control" onchange="fetchCountry(this.value)">

                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">state<span class="required">*</span></label>
                                <input type="text" name="state_name" placeholder="state" class="form-control">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">City<span class="required">*</span></label>
                                <input type="text" name="city_name" placeholder="city" class="form-control">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Nationality<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">
                                <input type="text" name="nationality_name" placeholder="Nationality" class="form-control">                                
                            </div>

                            <div class="form-group col-md-2">
                                <label for="email">Marital Status<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <select name="marital_status" style="width: 100%; height: 32px;">
                                    <option value="Single" selected>SINGLE</option>
                                    <option value="Married">MARRIED</option>
                                    <option value="Common law Marriage">COMMON LAW MARRIAGE</option>
                                    <option value="Civil Union / Domestic Partnership">CIVIL UNION&nbsp;/ DOMESTIC PARTNERSHIP</option>
                                    <option value="Widowed">WIDOWED</option>
                                    <option value="Divorced">DIVORCED</option>
                                    <option value="Seperated">SEPARATED</option>
                                    <option value="Other">OTHER</option>

                                </select>
                                <input type="text" name="temp_user_id" value="<?php echo $_COOKIE['temp_user_id']; ?>">
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
                                <label for="fname">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Middle Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Middle Name" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Full name in native alphabet <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <input type="text" class="form-control" id="name" name="email" placeholder="Full name in native alphabet" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Father's Date of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">

                                <label for="Day">Day<span class="required">*</span></label>

                                <select name="DOBDay" style="width: 100%; height: 32px;">
                                    <option>- Day -</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Month<span class="required">*</span></label>
                                <select name="DOBMonth" style="width: 100%; height: 32px;">
                                    <option>- Month -</option>
                                    <option value="January">January</option>
                                    <option value="Febuary">Febuary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Year<span class="required">*</span></label>
                                <select name="DOBYear" style="width: 100%; height: 32px;">
                                    <option>- Year -</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                </select>
                            </div>

                            <div class="form-group col-md-2">
                                <label for="email">Citizen Status<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <select name="DOBDay" style="width: 100%; height: 32px;">
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
                            <div class="form-group col-md-2">
                                <label for="email">Mother's Name<span class="required">*</span></label>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="fname">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Middle Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Middle Name" >
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Mother's Date of Birth<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-3">

                                <label for="fname">Day<span class="required">*</span></label>

                                <select name="DOBDay" style="width: 100%; height: 32px;">
                                    <option>- Day -</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>

                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Month<span class="required">*</span></label>
                                <select name="DOBMonth" style="width: 100%; height: 32px;">
                                    <option>- Month -</option>
                                    <option value="January">January</option>
                                    <option value="Febuary">Febuary</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lname">Year<span class="required">*</span></label>
                                <select name="DOBYear" style="width: 100%; height: 32px;">
                                    <option>- Year -</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Do you have any other relatives in the United States?<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <input type="radio" name="gender" value="female"> Yes
                                <input type="radio" name="gender" value="other"> No
                            </div>

                            <div class="form-group col-md-2">
                                <label for="email">Nationality<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <select name="DOBDay" style="width: 100%; height: 32px;">
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

                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Phone Number"  style="width: 40%;">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="email">Secondary/work phone numbers<span class="required">*</span></label>

                            </div>
                            <div class="form-group col-md-9">

                                <input type="text" class="form-control" id="fname" name="fname" placeholder="Phone Number"  style="width: 40%;">
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Address">
                                    <label for="Address">Home Address <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <input type="text" class="form-control" id="name" name="Address" >
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Address">
                                    <label for="Address">Apartment/Suite/Unit Number <span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <input type="text" class="form-control" id="name" name="Address" >
                            </div>

                            <div class="form-group col-md-2">
                                <label for="Address">
                                    <label for="Address">City<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <input type="text" class="form-control" id="name" name="Address" >
                            </div>
                            <div class="form-group col-md-2">
                                <label for="Address">
                                    <label for="Address">Country<span class="required">*</span></label>
                            </div>
                            <div class="form-group col-md-9">

                                <select name="DOBDay" style="width: 100%; height: 32px;">
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
                            
                            <button type="submit" class="btn btn-default" style="float: right;">
                                CONTINUE TO STEP 2</button>
                   <?php echo Form::close(); ?>     
                    </div>
                </div>
            </div>
        </div>

    </div>
   

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
<?php echo $__env->make('_layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\tour\resources\views//application-step-one.blade.php ENDPATH**/ ?>