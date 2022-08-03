<link rel="stylesheet" href="<?= base_url(); ?>/assets/css/bootstrap.css" />

<script type="text/javascript" src="<?= base_url(); ?>/assets/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>/assets/js/bootstrap.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- <style type="text/css">
  .sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 160px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black */
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 20px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Style page content */
.main {
  margin-left: 160px; /* Same as the width of the sidebar */
  padding: 0px 10px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

  <div class="sidenav">
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div> -->

<!-- Page content -->
<div class="main">
  ...
</div>

  <div class="navbar">
    <div class="container-fluid border-bottom" style="background-color: white;height: 80px">
      <div class="row align-items-end mx-auto p-3" style="width: 90%">
        <div class="col">
          <img src="<?= base_url(); ?>/assets/img/lionLogo.png" alt="logo" width="180px" height="47.36px">
        </div>
        <div class="col-xs-3 align-self-center">
          <select class="form-control form-control-sm ml-4">
              <option>Indonesia</option>
              <option>English</option>
          </select>
        </div>
      </div>
    </div>
  </div>

<!-- Page Content -->
  <div id="divFlightTab" class="row">
    <div class="container themed-container" style="background-color: default">
        <ul class="breadcrumb align-items-center">
          <div style="padding-right: 20px; margin-top: 10px; background-color: default; color: Red;">
          <nav class="nav justify-content-center">
            <a class="nav-link active" href="#">Flight</a>
            <a class="nav-link" href="#">Passenger Details</a>
            <a class="nav-link" href="#">Addons</a>
            <a class="nav-link" href="#">Payment & Confirmation</a>
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </nav>
          <!-- </div> -->
        </div>
        </ul>
    </div>
</div>
<!-- /.container -->
<!-- <div class="row">
  <div id="main-content" class="main-content col-sm-9"> -->
  <div class="sticky-right container">
    <div class="py-5 text-center">
    <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Product name</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$12</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Second product</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$8</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">Third item</h6>
            <small class="text-muted">Brief description</small>
          </div>
          <span class="text-muted">$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between bg-light">
          <div class="text-success">
            <h6 class="my-0">Promo code</h6>
            <small>EXAMPLECODE</small>
          </div>
          <span class="text-success">-$5</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          <span>Total Amount (IDR)</span>
          <strong>$20</strong>
        </li>
      </ul>

      <form class="card p-2">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-8 order-md-1">
      <hr class="mb-4">
      <h3 class="mb-3">1.Adult</h3>
      <form class="needs-validation" novalidate>
        <div class="row">
          <div class="col-sm-4">
            <label for="title">Title*</label>
            <select class="form-control" id="title">
              <option value="Mr">Mr</option>
              <option value="Mrs">Mrs</option>
              <option value="Miss">Miss</option>
              <option value="Dr">Dr</option>
              <option value="Ms">Ms</option>
            </select>
          </div>
          <div class="col-sm-4">
            <label for="firstName">First & Middle Name(s)*</label>
            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
          <div class="col-sm-4 mb-4">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            
            <label for="DD">DD*</label>
            <select class="form-control" id="tgl-lahir">
              <option value="DD">DD</option>
              <option value="01">01</option>
              <option value="02">02</option>
              <option value="03">03</option>
              <option value="04">04</option>
              <option value="05">05</option>
              <option value="06">06</option>
              <option value="07">07</option>
              <option value="08">08</option>
              <option value="09">09</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">10</option>
              <option value="19">10</option>
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
            <select class="form-control">
              <option value="0">MMM</option>
              <option value="1">Jan</option>
              <option value="2">Feb</option>
              <option value="3">Mar</option>
              <option value="4">Apr</option>
              <option value="5">May</option>
              <option value="6">Jun</option>
              <option value="7">Jul</option>
              <option value="8">Aug</option>
              <option value="9">Sep</option>
              <option value="10">Oct</option>
              <option value="11">Nov</option>
              <option value="12">Dec</option>
            </select>
            <select class="form-control">
              <option value="YYYY">YYYY</option>
              <option value="1929">1929</option>
              <option value="1930">1930</option>
              <option value="1931">1931</option>
              <option value="1932">1932</option>
              <option value="1933">1933</option>
              <option value="1934">1934</option>
              <option value="1935">1935</option>
              <option value="1936">1936</option>
              <option value="1937">1937</option>
              <option value="1938">1938</option>
              <option value="1939">1939</option>
              <option value="1940">1940</option>
              <option value="1941">1941</option>
              <option value="1942">1942</option>
              <option value="1943">1943</option>
              <option value="1944">1944</option>
              <option value="1945">1945</option>
              <option value="1946">1946</option>
              <option value="1947">1947</option>
              <option value="1948">1948</option>
              <option value="1949">1949</option>
              <option value="1950">1950</option>
              <option value="1951">1951</option>
              <option value="1952">1952</option>
              <option value="1953">1953</option>
              <option value="1954">1954</option>
              <option value="1955">1955</option>
              <option value="1956">1956</option>
              <option value="1957">1957</option>
              <option value="1958">1958</option>
              <option value="1959">1959</option>
              <option value="1960">1960</option>
              <option value="1961">1961</option>
              <option value="1962">1962</option>
              <option value="1963">1963</option>
              <option value="1964">1964</option>
              <option value="1965">1965</option>
              <option value="1966">1966</option>
              <option value="1967">1967</option>
              <option value="1968">1968</option>
              <option value="1969">1969</option>
              <option value="1970">1970</option>
              <option value="1971">1971</option>
              <option value="1972">1972</option>
              <option value="1973">1973</option>
              <option value="1974">1974</option>
              <option value="1975">1975</option>
              <option value="1976">1976</option>
              <option value="1977">1977</option>
              <option value="1978">1978</option>
              <option value="1979">1979</option>
              <option value="1980">1980</option>
              <option value="1981">1981</option>
              <option value="1982">1982</option>
              <option value="1983">1983</option>
              <option value="1984">1984</option>
              <option value="1985">1985</option>
              <option value="1986">1986</option>
              <option value="1987">1987</option>
              <option value="1988">1988</option>
              <option value="1989">1989</option>
              <option value="1990">1990</option>
              <option value="1991">1991</option>
              <option value="1992">1992</option>
              <option value="1993">1993</option>
              <option value="1994">1994</option>
              <option value="1995">1995</option>
              <option value="1996">1996</option>
              <option value="1997">1997</option>
              <option value="1998">1998</option>
              <option value="1999">1999</option>
              <option value="2000">2000</option>
              <option value="2001">2001</option>
              <option value="2002">2002</option>
              <option value="2003">2003</option>
              <option value="2004">2004</option>
              <option value="2005">2005</option>
              <option value="2006">2006</option>
              <option value="2007">2007</option>
              <option value="2008">2008</option>
              <option value="2009">2009</option>
              <option value="2010">2010</option>
              <option value="2011">2011</option>
              <option value="2012">2012</option>
              <option value="2013">2013</option>
              <option value="2014">2014</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              </select>
              
            <span id="tgl-lahir" class="err_red" style="visibility:hidden;">Select A Date of Birth</span>
          </div>
          <div class="col-sm-4">
            <label for="nationality">Nationality as per Document*</label>
            <select class="form-control" id="nationality">
              <option value="Select Country">Select Country</option>
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
              <option value="CI">Cote D&#39;ivoire</option>
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
              <option value="ID">Indonesia</option>
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
          <div class="col-sm-4">
            <label for="lionpassport">Lion Passport No.*</label>
            <input type="text" class="form-control" id="lionpassport" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid lion passport is required.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="no-hp">Contact Number</label>
            <div class="row">
              <span class="float-it" style="float:left;">+</span>
              <input name="" type="text" maxlength="3" id="countrycode" class="form-control triple" onkeypress="return numbersOnly(event);" style="width:25%;">
              <input name="" type="text" maxlength="19" id="PhoneNumber" class="form-control triple" onkeypress="return numbersOnly(event);" style="width:70%;">
            </div>
          </div>
          <div class="col-sm-4">
            <label for="sprequest">Special Request</label>
            <select class="form-control" id="sprequest">
              <option value="None">None</option>
              <option value="Wheelchair">Wheelchair</option>
            </select>
          </div>
          <div class="col-sm-4 mb-4">
            <label for="gender">Gender*</label>
            <select class="form-control" id="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <label for="no-ktp">National Identity / Passport Number*</label>
            <div>
              <input name="IdentityNo" type="text" maxlength="16" id="IdentityNo" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <label for="Expiry">Expiry*</label>
            <div>
              <select name="IdentityExpDay" id="IdentityExpDay" class="dayDropdown form-control triple">
                <option value="DD">DD</option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
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
              <select name="IdentityExpMon" id="IdentityExpMon" class="monthDropdown form-control triple">
                <option value="0">MMM</option>
                <option value="1">Jan</option>
                <option value="2">Feb</option>
                <option value="3">Mar</option>
                <option value="4">Apr</option>
                <option value="5">May</option>
                <option value="6">Jun</option>
                <option value="7">Jul</option>
                <option value="8">Aug</option>
                <option value="9">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
              </select>
              <select name="IdentityExpYear" id="IdentityExpYear" class="form-control triple">
                <option value="YYYY">YYYY</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
              </select>
            </div>
          </div>
        </div>
      </form>
      <hr class="mb-4">
    </div>
    </div>
  </div>

<div class="note-content" style="background-color: lightblue">
  <div class="row ">
    <div class="col-md-12">
      <h4>Please Note</h4>
      <ul class="list">
        <li>
          <span> Passenger Names: Names should be entered in full as per official travel documents used.</span>
        </li>
        <li>
          <span>Last Name: Maximum 24 characters.</span>
        </li>
        <li>
          <span>Single-Word Passenger Name(s): Passenger with single-word names (e.g. "Iskandar"), please proceed with inserting "Iskandar" in First Name field and "Iskandar" in Last Name field.</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="container">
<hr class="solid">
<a button type="button" class="btn" href="" style="background-color: red">Go Back</a>
<a button type="button" class="btn pull-right" href="" style="background-color: red">Continue</a>
</div>
  <div class="mb-5"></div>
<footer id="sticky-footer" class="py-4 bg-default text-muted-50" style="background-color: red">
  <div class="container text-center" style="color: white">
    <small>Terms & Conditions | Copyright &copy; 2019 Lion Air. All Rights Reserved</small>
  </div>
</footer>

