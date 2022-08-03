<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.css" />
<script type="text/javascript" src="<?= base_url(); ?>/assets/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>

<!-- Navigation -->
<nav class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-grey border-bottom box-shadow">
  <span class="navbar-brand mb-0"></span>
  <div class="container-fluid">
    <a class="navbar-brand">
        <img width="200" height="50" border="0" src="<?= base_url(); ?>/assets/img/lionLogo.png" alt="Garuda Indonesia">
    
    </div>
              
              <div class="col-xs-3 align-self-center">
          <select class="form-control form-control-sm ml-4">
              <option>Indonesia</option>
              <option>English</option>
          </select>
        </div>
   </a>
  </div>
</nav>
<div class="container" style="background-color: red">
  <ul class="row">
  <div class="col" style="color: white; border-right: 10px solid white">Flight</div>
  <div class="col" style="color: white; border-right: 10px solid white">Passenger Detail</div>
  <div class="col" style="color: white; border-right: 10px solid white">Addons</div>
  <div class="col" style="color: white; border-right: 10px solid white">Payment & Confirmation</div>
</ul>
</div>


<div class="container" style="background-color: #F1f1f1; height: 1800px">
  <div class="container">
    <span><img width="50" height="50" border="0" src="<?= base_url(); ?>/assets/img/Credit_Card-3-512.png" alt="Garuda Indonesia"></span>
    <div class="container" style="color: red">
      <h3>Payment Detail</h3>
    </div>

    <!--     <div style="margin-left: -20px; margin-right: -20px; height: 10px; margin-bottom: -10px; border-bottom: 1px solid #9A9A9A">
  </div> -->
</div>

<div class="container">
  <button type="button" class="btn btn-danger">ATM</button>
  <button type="button" class="btn btn-danger">Convenience Strore</button>
  <button type="button" class="btn btn-danger">BCA VA</button>
  <button type="button" class="btn btn-danger">Credit Card</button>
  <button type="button" class="btn btn-danger">klikBCA</button>
  <button type="button" class="btn btn-danger">Mandiri Clickpay</button>
  <button type="button" class="btn btn-danger">CIMB Cliks</button> 
  <div style="margin-left: -20px; margin-right: -20px; height: 10px; margin-bottom: -10px; border-bottom: 1px solid #9A9A9A">
  </div>
</div>
<div class="p pt-3">
<p>ATM Payment(indonesia)</p>
<p>We accept ATM payment from the following banks:</p>
<ul class="list" style="list-style-type: decimal;">
  <li>BNI</li>
  <li>CIMB Niaga</li>
  <li>ATM Mandiri</li>
  <li>BII</li>
  <li>Bank Permata</li>
  <li>BRI</li>
  <li>Bank Bukopin</li>
  <li>Bank Panin</li>
  <li>Bank BCA</li>
  <li>Bank BTN</li>
  <li>Bank Sinarmas</li>
  <li>Bank Danamon</li>
  <li>Bank Mega</li>
  <li>Bank NISP</li>
</ul>
<p>Or pay with your internet Banking at CIMB Clicks, CIMB GoMobile, Bank Mandiri, Bank BNI, PermataNet and Bank Sinarmas.</p>
<p>How to pay via ATM:</p>
<ul class="list" style="list-style-type: decimal;">
<li>Go to 'Payment' menu</li>
<li>Choose 'Flight'</li>
<li>Choose 'Lion Air'</li>
<li>Input the payment code</li>
</ul>
<p>
                                                <br>
                                                For BCA ATM user guide please
                                                <a href="/LionResources/id/Guide_ATM_BCA.pdf" target="_blank">
                                                    click here.
                                                </a>
                                            </p>
                                            <p>
                                                For Mandiri ATM user guide please
                                                <a href="/LionResources/id/Guide_ATM_Mandiri.pdf" target="_blank">
                                                    click here.
                                                </a>
                                            </p>
</div>
<div class="container">
 <div style="margin-left: -20px; margin-right: -20px; height: 10px; margin-bottom: -10px; border-bottom: 1px solid #9A9A9A">
  </div>
<div class="container-fluid">
  <div class="p pt-3">
  <span><img width="50" height="50" border="0" src="<?= base_url(); ?>/assets/img/Icon contact.png" alt="Garuda Indonesia"></span>
  <div class="container-fluid" style="color: red">
      <h3>Contact Detail</h3>
    </div>
</div>
</div>
<div class="container">
  <div style="margin-left: -35px; margin-right: -35px; height: 10px; margin-bottom: -10px; border-bottom: 1px solid #9A9A9A">
  </div>
</div>
<div>
  <div class="container">
    <div class="p pt-3">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblContactTitle">Title</span>*
                            </div>
                            <div>
                                <select name="ctl00$mainContent$ContactTitle" id="ctl00_mainContent_ContactTitle" class="text-regular form-control">
  <option selected="selected" value="Mr">Mr</option>
  <option value="Mrs">Mrs</option>
  <option value="Miss">Miss</option>
  <option value="Dr">Dr</option>
  <option value="Ms">Ms</option>

</select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblContactFirstName">First Name(s)</span>
                                *
                            </div>
                            <div>
                                <input name="ctl00$mainContent$ContactFirstName" type="text" maxlength="50" id="ctl00_mainContent_ContactFirstName" class="form-control" onkeypress="return alphaOnly(event);">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblContactSurname">Last Name</span>
                                *
                            </div>
                            <div>
                                <input name="ctl00$mainContent$ContactLastName" type="text" maxlength="28" id="ctl00_mainContent_ContactLastName" class="form-control" onkeypress="return alphaOnly(event);">
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div>
                    <div class="row">
                        <div class="col-md-10">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblAddress1">Address 1</span>
                                *
                            </div>
                            <div>
                                <input name="ctl00$mainContent$txtAddress1" type="text" maxlength="40" id="ctl00_mainContent_txtAddress1" class="form-control" style="width:100%;">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblCountry">Country</span>
                                *
                            </div>
                            <div>
                                <select name="ctl00$mainContent$ddlCountry" id="ctl00_mainContent_ddlCountry" class="text-regular form-control" onchange="HandleCountrySelection()" style="width:154px;">
  <option value="GO">Select Country</option>
  <option value="AF">Afghanistan</option>
  <option value="AL">Albania</option>
  <option value="DZ">Algeria</option>
  <option value="AS">American Samoa</option>
  <option value="AD">Andorra</option>
  <option value="AO">Angola</option>
  <option value="AI">Anguilla</option>
  <option value="AQ">Antartica</option>
  <option value="AG">Antigua and Barbuda</option>
  <option value="AR">Argentina</option>
  <option value="AM">Armenia</option>
  <option value="AW">Aruba</option>
  <option value="AC">Ascension Island</option>
  <option value="AU">Australia</option>
  <option value="AT">Austria</option>
  <option value="AZ">Azerbaijan</option>
  <option value="BS">Bahamas</option>
  <option value="BH">Bahrain</option>
  <option value="BD">Bangladesh</option>
  <option value="BB">Barbados</option>
  <option value="BY">Belarus</option>
  <option value="BE">Belgium</option>
  <option value="BZ">Belize</option>
  <option value="BJ">Benin</option>
  <option value="BM">Bermuda</option>
  <option value="BT">Bhutan</option>
  <option value="BO">Bolivia</option>
  <option value="BA">Bosnia n Herzegovina</option>
  <option value="BW">Botswana</option>
  <option value="BV">Bouvet Island</option>
  <option value="BR">Brazil</option>
  <option value="IO">Brtsh Ind Ocean Territory</option>
  <option value="BN">Brunie Darussalam</option>
  <option value="BG">Bulgaria</option>
  <option value="BF">Burkina Faso</option>
  <option value="BI">Burundi</option>
  <option value="KH">Cambodia</option>
  <option value="CM">Cameroon</option>
  <option value="CA">Canada</option>
  <option value="CV">Cape Verde</option>
  <option value="KY">Cayman Islands</option>
  <option value="CF">Central African Republic</option>
  <option value="TD">Chad</option>
  <option value="CL">Chile</option>
  <option value="CN">China</option>
  <option value="CX">Christmas Islands</option>
  <option value="CC">Cocos Keeling Islands</option>
  <option value="CO">Columbia</option>
  <option value="KM">Comoros</option>
  <option value="CG">Congo</option>
  <option value="CD">Congo</option>
  <option value="CK">Cook Islands</option>
  <option value="CR">Costa Rica</option>
  <option value="CI">Cote D'ivoire</option>
  <option value="HR">Croatia / Hrvatska</option>
  <option value="CU">Cuba</option>
  <option value="CY">Cyprus</option>
  <option value="CZ">Czech Republic</option>
  <option value="KP">Dem Peoples Rep of Korea</option>
  <option value="DK">Denmark</option>
  <option value="DJ">Djibouti</option>
  <option value="DM">Dominica</option>
  <option value="DO">Dominican Republic</option>
  <option value="TP">East Timor</option>
  <option value="EC">Ecuador</option>
  <option value="EG">Egypt</option>
  <option value="SV">El Salvador</option>
  <option value="GQ">Equatorial Guinea</option>
  <option value="ER">Eritrea</option>
  <option value="EE">Estonia</option>
  <option value="ET">Ethiopia</option>
  <option value="FK">Falkland Island[Malvinas]</option>
  <option value="FO">Faroe Islands</option>
  <option value="FJ">Fiji</option>
  <option value="FI">Finland</option>
  <option value="FR">France</option>
  <option value="GF">French Guiana</option>
  <option value="PF">French Polynesia</option>
  <option value="TF">French Sthrn Territories</option>
  <option value="GA">Gabon</option>
  <option value="GM">Gambia</option>
  <option value="GP">Gaudeloupe</option>
  <option value="GE">Georgia</option>
  <option value="DE">Germany</option>
  <option value="GH">Ghana</option>
  <option value="GI">Gibraltar</option>
  <option value="GR">Greece</option>
  <option value="GL">Greenland</option>
  <option value="GD">Grenada</option>
  <option value="GU">Guam</option>
  <option value="GT">Guatemala</option>
  <option value="GG">Guernsey</option>
  <option value="GN">Guinea</option>
  <option value="GW">Guinea Bissau</option>
  <option value="GY">Guyana</option>
  <option value="HT">Haiti</option>
  <option value="HM">Heard n Mcdonald Islands</option>
  <option value="HN">Honduras</option>
  <option value="HK">Hong Kong Sar</option>
  <option value="HU">Hungary</option>
  <option value="IS">Iceland</option>
  <option value="IN">India</option>
  <option selected="selected" value="ID">Indonesia</option>
  <option value="IR">Iran</option>
  <option value="IQ">Iraq</option>
  <option value="IM">Isle of Mann</option>
  <option value="IL">Israel</option>
  <option value="IT">Italy</option>
  <option value="JM">Jamaica</option>
  <option value="JP">Japan</option>
  <option value="JE">Jersey</option>
  <option value="JO">Jordan</option>
  <option value="KZ">Kazakstan</option>
  <option value="KE">Kenya</option>
  <option value="KI">Kiribati</option>
  <option value="KW">Kuwait</option>
  <option value="KG">Kyrgystan</option>
  <option value="LA">Lao Peoples Dem Republic</option>
  <option value="LV">Latvia</option>
  <option value="LB">Lebanon</option>
  <option value="LS">Lesotho</option>
  <option value="LR">Liberia</option>
  <option value="LY">Libyan Arab Jamahiriya</option>
  <option value="LI">Liechtenstein</option>
  <option value="LT">Lithuania</option>
  <option value="LU">Luxembourg</option>
  <option value="MO">Macau Sar</option>
  <option value="MK">Macedonia Fmr Yugslv Rep</option>
  <option value="MG">Madagascar</option>
  <option value="MW">Malawi</option>
  <option value="MY">Malaysia</option>
  <option value="MV">Maldives</option>
  <option value="ML">Mali</option>
  <option value="MT">Malta</option>
  <option value="MH">Marshall Islands</option>
  <option value="MQ">Martinique</option>
  <option value="MR">Mauritania</option>
  <option value="MU">Mauritius</option>
  <option value="YT">Mayotte</option>
  <option value="MX">Mexico</option>
  <option value="FM">Micronesia</option>
  <option value="MD">Modova</option>
  <option value="MC">Monaco</option>
  <option value="MN">Mongolia</option>
  <option value="MS">Montserrat</option>
  <option value="MA">Morocco</option>
  <option value="MZ">Mozambique</option>
  <option value="MM">Myanmar</option>
  <option value="NA">Namibia</option>
  <option value="NR">Nauru</option>
  <option value="NP">Nepal</option>
  <option value="NL">Netherlands</option>
  <option value="AN">Netherlands Antilles</option>
  <option value="NC">New Caledonia</option>
  <option value="NZ">New Zealand</option>
  <option value="NI">Nicaragua</option>
  <option value="NE">Niger</option>
  <option value="NG">Nigeria</option>
  <option value="NU">Niue</option>
  <option value="NF">Norfolk</option>
  <option value="MP">Northern Mariana Islands</option>
  <option value="NO">Norway</option>
  <option value="OM">Oman</option>
  <option value="PK">Pakistan</option>
  <option value="PW">Palau</option>
  <option value="PS">Palestine</option>
  <option value="PA">Panama</option>
  <option value="PG">Papua New Guinea</option>
  <option value="PY">Paraguay</option>
  <option value="PE">Peru</option>
  <option value="PH">Philippines</option>
  <option value="PN">Pitcairn Island</option>
  <option value="PL">Poland</option>
  <option value="PT">Portugal</option>
  <option value="PR">Puerto Rico</option>
  <option value="QA">Qatar</option>
  <option value="IE">Republic of Ireland</option>
  <option value="RE">Reunion Island</option>
  <option value="RO">Romania</option>
  <option value="RU">Russian Federation</option>
  <option value="RW">Rwanda</option>
  <option value="LC">Saint Lucia</option>
  <option value="SM">San Marino</option>
  <option value="ST">Sao Tome and Principe</option>
  <option value="SA">Saudi Arabia</option>
  <option value="SN">Senegal</option>
  <option value="SC">Seychelles</option>
  <option value="SL">Sierra Leone</option>
  <option value="SG">Singapore</option>
  <option value="SK">Slovakia</option>
  <option value="SI">Slovenia</option>
  <option value="SB">Solomon Islands</option>
  <option value="SO">Somalia</option>
  <option value="ZA">South Africa</option>
  <option value="GS">South Georgia</option>
  <option value="KR">South Korea</option>
  <option value="ES">Spain</option>
  <option value="LK">Sri Lanka</option>
  <option value="SH">St Helena</option>
  <option value="KN">St Kitts and Nevis</option>
  <option value="PM">St Pierre and Miquelon</option>
  <option value="VC">St Vncnt n the Grenadines</option>
  <option value="SD">Sudan</option>
  <option value="SR">Surinam</option>
  <option value="SJ">Svalbard n Jan Meyen Isld</option>
  <option value="SZ">Swaziland</option>
  <option value="SE">Sweden</option>
  <option value="CH">Switzerland</option>
  <option value="SY">Syrian Arab Republic</option>
  <option value="TW">Taiwan</option>
  <option value="TJ">Tajikistan</option>
  <option value="TZ">Tanzania</option>
  <option value="TH">Thailand</option>
  <option value="TG">Togo</option>
  <option value="TK">Tokelau</option>
  <option value="TO">Tonga</option>
  <option value="TT">Trinidad and Tobago</option>
  <option value="TN">Tunisia</option>
  <option value="TR">Turkey</option>
  <option value="TM">Turkmenistan</option>
  <option value="TC">Turks and Caicos Islands</option>
  <option value="TV">Tuvalu</option>
  <option value="UM">U.S. Min Outlyng Islands</option>
  <option value="UG">Uganda</option>
  <option value="UA">Ukraine</option>
  <option value="AE">United Arab Emirates</option>
  <option value="GB">United Kingdom</option>
  <option value="US">United States of America</option>
  <option value="UY">Uruguay</option>
  <option value="UZ">Uzbekistan</option>
  <option value="VU">Vanuatu</option>
  <option value="VA">Vatican City State</option>
  <option value="VE">Venezuela</option>
  <option value="VN">Vietnam</option>
  <option value="VG">Virgin Islands[British]</option>
  <option value="VI">Virgin Islands[U.S.]</option>
  <option value="WF">Wallis and Futuna Islands</option>
  <option value="EH">Western Sahara</option>
  <option value="WS">Western Samoa</option>
  <option value="YE">Yemen</option>
  <option value="YU">Yugoslavia</option>
  <option value="ZR">Zaire</option>
  <option value="ZM">Zambia</option>
  <option value="ZW">Zimbabwe</option>

</select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblCity">City</span>
                                *
                            </div>
                            <div>
                                <input name="ctl00$mainContent$txtCity" type="text" id="ctl00_mainContent_txtCity" class="form-control" onkeypress="return alphaOnly(event);" style="display:block;">
                                <select name="ctl00$mainContent$ddlCity" id="ctl00_mainContent_ddlCity" class="text-regular form-control" style="width:129px;display:none;">

</select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblContactPostCode">Postal / Zip Code</span>
                                *
                            </div>
                            <div>
                                <input name="ctl00$mainContent$txtPostCode" type="text" id="ctl00_mainContent_txtPostCode" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblContactState">State</span>&nbsp;
                            </div>
                            <div>
                                <input name="ctl00$mainContent$txtState" type="text" id="ctl00_mainContent_txtState" class="form-control" onkeypress="return alphaOnly(event);">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">

                        <div class="col-md-5">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblOriginPhoneNumber">Origin Phone no.</span>
                                *
                            </div>
                            <div>
                              <div class="row">
                                <span class="float-it">+</span>
                                <input name="ctl00$mainContent$txtCountryCode1" type="text" maxlength="3" id="ctl00_mainContent_txtCountryCode1" class="form-control quad" onkeypress="return numbersOnly(event);" style="width:15%;">
                                <input name="ctl00$mainContent$txtAreaCode1" type="text" maxlength="4" id="ctl00_mainContent_txtAreaCode1" class="form-control quad" onkeypress="return numbersOnly(event);" style="width:15%;">
                                <input name="ctl00$mainContent$txtPhoneNumber1" type="text" maxlength="15" id="ctl00_mainContent_txtPhoneNumber1" class="form-control quad" onkeypress="return numbersOnly(event);" style="width:30%;">
                                <select name="ctl00$mainContent$ddlOriNumber" id="ctl00_mainContent_ddlOriNumber" class="form-control quad" style="width:30%;">
                              </div>
  <option value="H">Home</option>
  <option value="B">Office</option>
  <option value="H">Hotel</option>
  <option value="M">Mobile</option>

</select>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="ccLabel">
                                
                            </div>
                            <div>
                                
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="col-md-5">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblMobilePhoneNumber">Mobile Phone no.</span>&nbsp;
                            </div>
                            <div>
                                <span class="float-it">+</span><input name="ctl00$mainContent$txtCountryCode3" type="text" maxlength="3" id="ctl00_mainContent_txtCountryCode3" class="form-control double" onkeypress="return numbersOnly(event);" style="width:15%;">
                                <input name="ctl00$mainContent$txtPhoneNumber3" type="text" maxlength="15" id="ctl00_mainContent_txtPhoneNumber3" class="form-control double" onkeypress="return numbersOnly(event);" style="width:117px;">
                            </div>
                        </div>
                    </div>


<div class="row">
                        <div class="col-md-4">
                            
                        </div>
                    </div>
                    <div>
                    <div class="row">
                      <div class="p pt-3">
                        <div class="col-md-5">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblEmail1">Email</span>
                                *
                            </div>
                            <div>
                                <input name="ctl00$mainContent$txtEmailAddress1" type="text" id="ctl00_mainContent_txtEmailAddress1" class="form-control" onkeypress="return emailCharOnly(event);" style="width: 250px">
                            </div>
                        </div>
                      </div>
                        <div class="col-md-5">
                          <div class="p pt-3">
                            <div class="ccLabel">
                                <span id="ctl00_mainContent_lblEmail2">Re-enter Email</span>
                                *
                            </div>
                            <div>
                                <input name="ctl00$mainContent$txtEmailAddress2" type="text" id="ctl00_mainContent_txtEmailAddress2" class="form-control" onkeypress="return emailCharOnly(event);" style="width: 250px">
                            </div>
                        </div>
                    </div>
                  </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input id="ctl00_mainContent_chkSpecialOffers" type="checkbox" name="ctl00$mainContent$chkSpecialOffers" checked="checked"><label for="ctl00_mainContent_chkSpecialOffers">Yes, I would like to receive Lion Air Special Offers</label>
                        </div>
                    </div>
                </div>
                <div class="container">
 <div style="margin-left: -20px; margin-right: -20px; height: 10px; margin-bottom: -10px; border-bottom: 1px solid #9A9A9A">
  </div>
<div class="container-fluid">
  <div class="p pt-3">
  <span><img width="50" height="50" border="0" src="<?= base_url(); ?>/assets/img/Agreement.png" alt="Garuda Indonesia"></span>
  <div class="container" style="color: red">
      <h3>Customer Agreement</h3>
    </div>
</div>
</div>
<div class="container">
  <div style="margin-left: -35px; margin-right: -35px; height: 10px; margin-bottom: -10px; border-bottom: 1px solid #9A9A9A">
  </div>
</div>
<div>
  <div class="p pt-3">
                    <input id="ctl00_mainContent_AcceptFareConditions" type="checkbox" name="ctl00$mainContent$AcceptFareConditions">
                    <span id="ctl00_mainContent_lblCustomerAgreement1">I have read and agree to the</span>

                    <span>

                        <a href="/LionResources/en/Condition_of_Carriage.pdf" target="_blank">
                             Condition of Carriage 
                        </a>

                        <span id="ctl00_mainContent_lblCustomerAgreement3">outlined by Lion Air.</span>
                        * </span>
                </div>
                <div id="EnsureNote">
                    <span>
                        <span id="ctl00_mainContent_lblCustomerAgreementNote">Please ensure that you have obtained all required travel visas, vaccinations, etc.</span>
                    </span>
                </div>
</div>

<!-- /.container -->
<!-- <div class="row pt-4 pb-4">
  <div class="col">
    <h3>Contact Us</h3>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" placeholder="example">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="example@gmail.com">
    </div>
    <div class="form-group">
        <label>Message</label>
        <textarea class="form-control" rows="3"></textarea>
    </div>
        <button class="btn btn-dark">Send</button>
    </div>
  </div> -->