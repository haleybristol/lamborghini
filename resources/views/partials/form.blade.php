<section class="container journey text-center">
  <h1><strong>START</strong> <span class="light">YOUR JOURNEY</span></h1>
  <p>Leave your details below to have our concierge set an appointment.</p>
</section>
<section class="container">

  <form id="form" method="POST" action="{{ route('sendLead') }}" >
    {!! csrf_field() !!}

    <div class="dot-container">
      <div class="row">
        <div class="col-12 col-sm-6">
          <span class="circle"></span><input type="text" name="firstname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'">
        </div>
        <div class="col-12 col-sm-6">
          <span class="circle"></span><input type="text" name="lastname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <span class="circle"></span><input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
        </div>
        <div class="col-12 col-sm-6">
          <span class="circle"></span><input type="number" name="phone" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'">
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
            <span class="circle"></span>

            <label id="country_label"class="field"for="country"data-value="">
              <span>Country or Region</span>
              <div id="country"class="psuedo_select"name="country">
                <span class="selected"></span>
                <ul id="country_options"class="options">
                <li class="option" value="AF">Afghanistan</li>
                <li class="option" value="AL">Albania</li>
                <li class="option" value="DZ">Algeria</li>
                <li class="option" value="AS">American Samoa</li>
                <li class="option" value="AD">Andorra</li>
                <li class="option" value="AG">Angola</li>
                <li class="option" value="AI">Anguilla</li>
                <li class="option" value="AG">Antigua &amp; Barbuda</li>
                <li class="option" value="AR">Argentina</li>
                <li class="option" value="AA">Armenia</li>
                <li class="option" value="AW">Aruba</li>
                <li class="option" value="AU">Australia</li>
                <li class="option" value="AT">Austria</li>
                <li class="option" value="AZ">Azerbaijan</li>
                <li class="option" value="BS">Bahamas</li>
                <li class="option" value="BH">Bahrain</li>
                <li class="option" value="BD">Bangladesh</li>
                <li class="option" value="BB">Barbados</li>
                <li class="option" value="BY">Belarus</li>
                <li class="option" value="BE">Belgium</li>
                <li class="option" value="BZ">Belize</li>
                <li class="option" value="BJ">Benin</li>
                <li class="option" value="BM">Bermuda</li>
                <li class="option" value="BT">Bhutan</li>
                <li class="option" value="BO">Bolivia</li>
                <li class="option" value="BL">Bonaire</li>
                <li class="option" value="BA">Bosnia &amp; Herzegovina</li>
                <li class="option" value="BW">Botswana</li>
                <li class="option" value="BR">Brazil</li>
                <li class="option" value="BC">British Indian Ocean Ter</li>
                <li class="option" value="BN">Brunei</li>
                <li class="option" value="BG">Bulgaria</li>
                <li class="option" value="BF">Burkina Faso</li>
                <li class="option" value="BI">Burundi</li>
                <li class="option" value="KH">Cambodia</li>
                <li class="option" value="CM">Cameroon</li>
                <li class="option" value="CA">Canada</li>
                <li class="option" value="IC">Canary Islands</li>
                <li class="option" value="CV">Cape Verde</li>
                <li class="option" value="KY">Cayman Islands</li>
                <li class="option" value="CF">Central African Republic</li>
                <li class="option" value="TD">Chad</li>
                <li class="option" value="CD">Channel Islands</li>
                <li class="option" value="CL">Chile</li>
                <li class="option" value="CN">China</li>
                <li class="option" value="CI">Christmas Island</li>
                <li class="option" value="CS">Cocos Island</li>
                <li class="option" value="CO">Colombia</li>
                <li class="option" value="CC">Comoros</li>
                <li class="option" value="CG">Congo</li>
                <li class="option" value="CK">Cook Islands</li>
                <li class="option" value="CR">Costa Rica</li>
                <li class="option" value="CT">Cote D'Ivoire</li>
                <li class="option" value="HR">Croatia</li>
                <li class="option" value="CU">Cuba</li>
                <li class="option" value="CB">Curacao</li>
                <li class="option" value="CY">Cyprus</li>
                <li class="option" value="CZ">Czech Republic</li>
                <li class="option" value="DK">Denmark</li>
                <li class="option" value="DJ">Djibouti</li>
                <li class="option" value="DM">Dominica</li>
                <li class="option" value="DO">Dominican Republic</li>
                <li class="option" value="TM">East Timor</li>
                <li class="option" value="EC">Ecuador</li>
                <li class="option" value="EG">Egypt</li>
                <li class="option" value="SV">El Salvador</li>
                <li class="option" value="GQ">Equatorial Guinea</li>
                <li class="option" value="ER">Eritrea</li>
                <li class="option" value="EE">Estonia</li>
                <li class="option" value="ET">Ethiopia</li>
                <li class="option" value="FA">Falkland Islands</li>
                <li class="option" value="FO">Faroe Islands</li>
                <li class="option" value="FJ">Fiji</li>
                <li class="option" value="FI">Finland</li>
                <li class="option" value="FR">France</li>
                <li class="option" value="GF">French Guiana</li>
                <li class="option" value="PF">French Polynesia</li>
                <li class="option" value="FS">French Southern Ter</li>
                <li class="option" value="GA">Gabon</li>
                <li class="option" value="GM">Gambia</li>
                <li class="option" value="GE">Georgia</li>
                <li class="option" value="DE">Germany</li>
                <li class="option" value="GH">Ghana</li>
                <li class="option" value="GI">Gibraltar</li>
                <li class="option" value="GB">Great Britain</li>
                <li class="option" value="GR">Greece</li>
                <li class="option" value="GL">Greenland</li>
                <li class="option" value="GD">Grenada</li>
                <li class="option" value="GP">Guadeloupe</li>
                <li class="option" value="GU">Guam</li>
                <li class="option" value="GT">Guatemala</li>
                <li class="option" value="GN">Guinea</li>
                <li class="option" value="GY">Guyana</li>
                <li class="option" value="HT">Haiti</li>
                <li class="option" value="HW">Hawaii</li>
                <li class="option" value="HN">Honduras</li>
                <li class="option" value="HK">Hong Kong</li>
                <li class="option" value="HU">Hungary</li>
                <li class="option" value="IS">Iceland</li>
                <li class="option" value="IN">India</li>
                <li class="option" value="ID">Indonesia</li>
                <li class="option" value="IA">Iran</li>
                <li class="option" value="IQ">Iraq</li>
                <li class="option" value="IR">Ireland</li>
                <li class="option" value="IM">Isle of Man</li>
                <li class="option" value="IL">Israel</li>
                <li class="option" value="IT">Italy</li>
                <li class="option" value="JM">Jamaica</li>
                <li class="option" value="JP">Japan</li>
                <li class="option" value="JO">Jordan</li>
                <li class="option" value="KZ">Kazakhstan</li>
                <li class="option" value="KE">Kenya</li>
                <li class="option" value="KI">Kiribati</li>
                <li class="option" value="NK">Korea North</li>
                <li class="option" value="KS">Korea South</li>
                <li class="option" value="KW">Kuwait</li>
                <li class="option" value="KG">Kyrgyzstan</li>
                <li class="option" value="LA">Laos</li>
                <li class="option" value="LV">Latvia</li>
                <li class="option" value="LB">Lebanon</li>
                <li class="option" value="LS">Lesotho</li>
                <li class="option" value="LR">Liberia</li>
                <li class="option" value="LY">Libya</li>
                <li class="option" value="LI">Liechtenstein</li>
                <li class="option" value="LT">Lithuania</li>
                <li class="option" value="LU">Luxembourg</li>
                <li class="option" value="MO">Macau</li>
                <li class="option" value="MK">Macedonia</li>
                <li class="option" value="MG">Madagascar</li>
                <li class="option" value="MY">Malaysia</li>
                <li class="option" value="MW">Malawi</li>
                <li class="option" value="MV">Maldives</li>
                <li class="option" value="ML">Mali</li>
                <li class="option" value="MT">Malta</li>
                <li class="option" value="MH">Marshall Islands</li>
                <li class="option" value="MQ">Martinique</li>
                <li class="option" value="MR">Mauritania</li>
                <li class="option" value="MU">Mauritius</li>
                <li class="option" value="ME">Mayotte</li>
                <li class="option" value="MX">Mexico</li>
                <li class="option" value="MI">Midway Islands</li>
                <li class="option" value="MD">Moldova</li>
                <li class="option" value="MC">Monaco</li>
                <li class="option" value="MN">Mongolia</li>
                <li class="option" value="MS">Montserrat</li>
                <li class="option" value="MA">Morocco</li>
                <li class="option" value="MZ">Mozambique</li>
                <li class="option" value="MM">Myanmar</li>
                <li class="option" value="NA">Nambia</li>
                <li class="option" value="NU">Nauru</li>
                <li class="option" value="NP">Nepal</li>
                <li class="option" value="AN">Netherland Antilles</li>
                <li class="option" value="NL">Netherlands (Holland, Europe)</li>
                <li class="option" value="NV">Nevis</li>
                <li class="option" value="NC">New Caledonia</li>
                <li class="option" value="NZ">New Zealand</li>
                <li class="option" value="NI">Nicaragua</li>
                <li class="option" value="NE">Niger</li>
                <li class="option" value="NG">Nigeria</li>
                <li class="option" value="NW">Niue</li>
                <li class="option" value="NF">Norfolk Island</li>
                <li class="option" value="NO">Norway</li>
                <li class="option" value="OM">Oman</li>
                <li class="option" value="PK">Pakistan</li>
                <li class="option" value="PW">Palau Island</li>
                <li class="option" value="PS">Palestine</li>
                <li class="option" value="PA">Panama</li>
                <li class="option" value="PG">Papua New Guinea</li>
                <li class="option" value="PY">Paraguay</li>
                <li class="option" value="PE">Peru</li>
                <li class="option" value="PH">Philippines</li>
                <li class="option" value="PO">Pitcairn Island</li>
                <li class="option" value="PL">Poland</li>
                <li class="option" value="PT">Portugal</li>
                <li class="option" value="PR">Puerto Rico</li>
                <li class="option" value="QA">Qatar</li>
                <li class="option" value="ME">Republic of Montenegro</li>
                <li class="option" value="RS">Republic of Serbia</li>
                <li class="option" value="RE">Reunion</li>
                <li class="option" value="RO">Romania</li>
                <li class="option" value="RU">Russia</li>
                <li class="option" value="RW">Rwanda</li>
                <li class="option" value="NT">St Barthelemy</li>
                <li class="option" value="EU">St Eustatius</li>
                <li class="option" value="HE">St Helena</li>
                <li class="option" value="KN">St Kitts-Nevis</li>
                <li class="option" value="LC">St Lucia</li>
                <li class="option" value="MB">St Maarten</li>
                <li class="option" value="PM">St Pierre &amp; Miquelon</li>
                <li class="option" value="VC">St Vincent &amp; Grenadines</li>
                <li class="option" value="SP">Saipan</li>
                <li class="option" value="SO">Samoa</li>
                <li class="option" value="AS">Samoa American</li>
                <li class="option" value="SM">San Marino</li>
                <li class="option" value="ST">Sao Tome &amp; Principe</li>
                <li class="option" value="SA">Saudi Arabia</li>
                <li class="option" value="SN">Senegal</li>
                <li class="option" value="RS">Serbia</li>
                <li class="option" value="SC">Seychelles</li>
                <li class="option" value="SL">Sierra Leone</li>
                <li class="option" value="SG">Singapore</li>
                <li class="option" value="SK">Slovakia</li>
                <li class="option" value="SI">Slovenia</li>
                <li class="option" value="SB">Solomon Islands</li>
                <li class="option" value="OI">Somalia</li>
                <li class="option" value="ZA">South Africa</li>
                <li class="option" value="ES">Spain</li>
                <li class="option" value="LK">Sri Lanka</li>
                <li class="option" value="SD">Sudan</li>
                <li class="option" value="SR">Suriname</li>
                <li class="option" value="SZ">Swaziland</li>
                <li class="option" value="SE">Sweden</li>
                <li class="option" value="CH">Switzerland</li>
                <li class="option" value="SY">Syria</li>
                <li class="option" value="TA">Tahiti</li>
                <li class="option" value="TW">Taiwan</li>
                <li class="option" value="TJ">Tajikistan</li>
                <li class="option" value="TZ">Tanzania</li>
                <li class="option" value="TH">Thailand</li>
                <li class="option" value="TG">Togo</li>
                <li class="option" value="TK">Tokelau</li>
                <li class="option" value="TO">Tonga</li>
                <li class="option" value="TT">Trinidad &amp; Tobago</li>
                <li class="option" value="TN">Tunisia</li>
                <li class="option" value="TR">Turkey</li>
                <li class="option" value="TU">Turkmenistan</li>
                <li class="option" value="TC">Turks &amp; Caicos Is</li>
                <li class="option" value="TV">Tuvalu</li>
                <li class="option" value="UG">Uganda</li>
                <li class="option" value="UA">Ukraine</li>
                <li class="option" value="AE">United Arab Emirates</li>
                <li class="option" value="GB">United Kingdom</li>
                <li class="option" value="US">United States of America</li>
                <li class="option" value="UY">Uruguay</li>
                <li class="option" value="UZ">Uzbekistan</li>
                <li class="option" value="VU">Vanuatu</li>
                <li class="option" value="VS">Vatican City State</li>
                <li class="option" value="VE">Venezuela</li>
                <li class="option" value="VN">Vietnam</li>
                <li class="option" value="VB">Virgin Islands (Brit)</li>
                <li class="option" value="VA">Virgin Islands (USA)</li>
                <li class="option" value="WK">Wake Island</li>
                <li class="option" value="WF">Wallis &amp; Futana Is</li>
                <li class="option" value="YE">Yemen</li>
                <li class="option" value="ZR">Zaire</li>
                <li class="option" value="ZM">Zambia</li>
                <li class="option" value="ZW">Zimbabwe</li>
                </div>
              </label>
            </ul>
        </div>

        <div class="col-12 col-sm-6">
            <span class="circle"></span>
            <label id="dealership_label"class="field"for="dealership"data-value="">
                <span>Preferred Dealership</span>
                <div id="dealership"class="psuedo_select"name="dealership">
                    <span class="selected"></span>
                    <ul id="dealership_options"class="options">
                    @foreach ($dealerShips as $dealership)
                        <li class="option" value="{{ $dealership->id }}" data-contact_name="{{ $dealership->contact_name }}" data-email="{{ $dealership->email }}" data-phone="{{ $dealership->phone }}">
                            {{ $dealership->store_name }}
                        </li>
                    @endforeach
                    </ul>
                </div>
            </label>
        </div>
      </div>
    </div>

    <div class="check-send">
      <div class="form-group">
        <input type="checkbox" id="policy">
        <label for="policy">View our <a href="/"><u>privacy policy</u></a>. I agree to the processing of my personal data for marketing purposes.</label>
      </div>
        <div class="send">
            <button type="submit">
                SEND ME INFORMATION
            </button>
        </div>
    </div>
</form>
