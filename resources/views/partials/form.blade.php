<form id="form" method="POST" action="{{ route('sendLead') }}" class="{{ session()->has('thanks') ? 'success' : '' }}">
	{!! csrf_field() !!}
	
	<div class="dot-container">
		<div class="row">
			<div class="col-12 col-sm-6">
				<span class="circle first"></span><input class="{{ $errors->has('firstname') ? 'required' : '' }}" type="text" name="firstname" placeholder="{!! trans('form.placeholder.firstname') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.firstname') !!}'" required>
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle last"></span><input class="{{ $errors->has('lastname') ? 'required' : '' }}" type="text" name="lastname" placeholder="{!! trans('form.placeholder.lastname') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.lastname') !!}'" required>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6">
				<span class="circle email"></span><input class="{{ $errors->has('email') ? 'required' : '' }}" type="text" name="email" placeholder="{!! trans('form.placeholder.email') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.email') !!}'" required>
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle phone"></span><input class="{{ $errors->has('phone') ? 'required' : '' }}" type="number" name="phone" placeholder="{!! trans('form.placeholder.number') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.number') !!}'" required>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6">
				<span class="circle country"></span>
				<div class="custom-select {{ $errors->has('country') ? 'required' : '' }}" id="country" class="psuedo_select">
					<select name="country" required>
						<option value="">Country or Region</option>
						<option>Afghanistan</option>
						<option>Albania</option>
						<option>Algeria</option>
						<option>American Samoa</option>
						<option>Andorra</option>
						<option>Angola</option>
						<option>Anguilla</option>
						<option>Antigua &amp; Barbuda</option>
						<option>Argentina</option>
						<option>Armenia</option>
						<option>Aruba</option>
						<option>Australia</option>
						<option>Austria</option>
						<option>Azerbaijan</option>
						<option>Bahamas</option>
						<option>Bahrain</option>
						<option>Bangladesh</option>
						<option>Barbados</option>
						<option>Belarus</option>
						<option>Belgium</option>
						<option>Belize</option>
						<option>Benin</option>
						<option>Bermuda</option>
						<option>Bhutan</option>
						<option>Bolivia</option>
						<option>Bonaire</option>
						<option>Bosnia &amp; Herzegovina</option>
						<option>Botswana</option>
						<option>Brazil</option>
						<option>British Indian Ocean Ter</option>
						<option>Brunei</option>
						<option>Bulgaria</option>
						<option>Burkina Faso</option>
						<option>Burundi</option>
						<option>Cambodia</option>
						<option>Cameroon</option>
						<option>Canada</option>
						<option>Canary Islands</option>
						<option>Cape Verde</option>
						<option>Cayman Islands</option>
						<option>Central African Republic</option>
						<option>Chad</option>
						<option>Channel Islands</option>
						<option>Chile</option>
						<option>China</option>
						<option>Christmas Island</option>
						<option>Cocos Island</option>
						<option>Colombia</option>
						<option>Comoros</option>
						<option>Congo</option>
						<option>Cook Islands</option>
						<option>Costa Rica</option>
						<option>Cote D'Ivoire</option>
						<option>Croatia</option>
						<option>Cuba</option>
						<option>Curacao</option>
						<option>Cyprus</option>
						<option>Czech Republic</option>
						<option>Denmark</option>
						<option>Djibouti</option>
						<option>Dominica</option>
						<option>Dominican Republic</option>
						<option>East Timor</option>
						<option>Ecuador</option>
						<option>Egypt</option>
						<option>El Salvador</option>
						<option>Equatorial Guinea</option>
						<option>Eritrea</option>
						<option>Estonia</option>
						<option>Ethiopia</option>
						<option>Falkland Islands</option>
						<option>Faroe Islands</option>
						<option>Fiji</option>
						<option>Finland</option>
						<option>France</option>
						<option>French Guiana</option>
						<option>French Polynesia</option>
						<option>French Southern Ter</option>
						<option>Gabon</option>
						<option>Gambia</option>
						<option>Georgia</option>
						<option>Germany</option>
						<option>Ghana</option>
						<option>Gibraltar</option>
						<option>Great Britain</option>
						<option>Greece</option>
						<option>Greenland</option>
						<option>Grenada</option>
						<option>Guadeloupe</option>
						<option>Guam</option>
						<option>Guatemala</option>
						<option>Guinea</option>
						<option>Guyana</option>
						<option>Haiti</option>
						<option>Hawaii</option>
						<option>Honduras</option>
						<option>Hong Kong</option>
						<option>Hungary</option>
						<option>Iceland</option>
						<option>India</option>
						<option>Indonesia</option>
						<option>Iran</option>
						<option>Iraq</option>
						<option>Ireland</option>
						<option>Isle of Man</option>
						<option>Israel</option>
						<option>Italy</option>
						<option>Jamaica</option>
						<option>Japan</option>
						<option>Jordan</option>
						<option>Kazakhstan</option>
						<option>Kenya</option>
						<option>Kiribati</option>
						<option>Korea North</option>
						<option>Korea South</option>
						<option>Kuwait</option>
						<option>Kyrgyzstan</option>
						<option>Laos</option>
						<option>Latvia</option>
						<option>Lebanon</option>
						<option>Lesotho</option>
						<option>Liberia</option>
						<option>Libya</option>
						<option>Liechtenstein</option>
						<option>Lithuania</option>
						<option>Luxembourg</option>
						<option>Macau</option>
						<option>Macedonia</option>
						<option>Madagascar</option>
						<option>Malaysia</option>
						<option>Malawi</option>
						<option>Maldives</option>
						<option>Mali</option>
						<option>Malta</option>
						<option>Marshall Islands</option>
						<option>Martinique</option>
						<option>Mauritania</option>
						<option>Mauritius</option>
						<option>Mayotte</option>
						<option>Mexico</option>
						<option>Midway Islands</option>
						<option>Moldova</option>
						<option>Monaco</option>
						<option>Mongolia</option>
						<option>Montserrat</option>
						<option>Morocco</option>
						<option>Mozambique</option>
						<option>Myanmar</option>
						<option>Nambia</option>
						<option>Nauru</option>
						<option>Nepal</option>
						<option>Netherland Antilles</option>
						<option>Netherlands (Holland, Europe)</option>
						<option>Nevis</option>
						<option>New Caledonia</option>
						<option>New Zealand</option>
						<option>Nicaragua</option>
						<option>Niger</option>
						<option>Nigeria</option>
						<option>Niue</option>
						<option>Norfolk Island</option>
						<option>Norway</option>
						<option>Oman</option>
						<option>Pakistan</option>
						<option>Palau Island</option>
						<option>Palestine</option>
						<option>Panama</option>
						<option>Papua New Guinea</option>
						<option>Paraguay</option>
						<option>Peru</option>
						<option>Philippines</option>
						<option>Pitcairn Island</option>
						<option>Poland</option>
						<option>Portugal</option>
						<option>Puerto Rico</option>
						<option>Qatar</option>
						<option>Republic of Montenegro</option>
						<option>Republic of Serbia</option>
						<option>Reunion</option>
						<option>Romania</option>
						<option>Russia</option>
						<option>Rwanda</option>
						<option>St Barthelemy</option>
						<option>St Eustatius</option>
						<option>St Helena</option>
						<option>St Kitts-Nevis</option>
						<option>St Lucia</option>
						<option>St Maarten</option>
						<option>St Pierre &amp; Miquelon</option>
						<option>St Vincent &amp; Grenadines</option>
						<option>Saipan</option>
						<option>Samoa</option>
						<option>Samoa American</option>
						<option>San Marino</option>
						<option>Sao Tome &amp; Principe</option>
						<option>Saudi Arabia</option>
						<option>Senegal</option>
						<option>Serbia</option>
						<option>Seychelles</option>
						<option>Sierra Leone</option>
						<option>Singapore</option>
						<option>Slovakia</option>
						<option>Slovenia</option>
						<option>Solomon Islands</option>
						<option>Somalia</option>
						<option>South Africa</option>
						<option>Spain</option>
						<option>Sri Lanka</option>
						<option>Sudan</option>
						<option>Suriname</option>
						<option>Swaziland</option>
						<option>Sweden</option>
						<option>Switzerland</option>
						<option>Syria</option>
						<option>Tahiti</option>
						<option>Taiwan</option>
						<option>Tajikistan</option>
						<option>Tanzania</option>
						<option>Thailand</option>
						<option>Togo</option>
						<option>Tokelau</option>
						<option>Tonga</option>
						<option>Trinidad &amp; Tobago</option>
						<option>Tunisia</option>
						<option>Turkey</option>
						<option>Turkmenistan</option>
						<option>Turks &amp; Caicos Is</option>
						<option>Tuvalu</option>
						<option>Uganda</option>
						<option>Ukraine</option>
						<option>United Arab Emirates</option>
						<option>United Kingdom</option>
						<option>United States of America</option>
						<option>Uruguay</option>
						<option>Uzbekistan</option>
						<option>Vanuatu</option>
						<option>Vatican City State</option>
						<option>Venezuela</option>
						<option>Vietnam</option>
						<option>Virgin Islands (Brit)</option>
						<option>Virgin Islands (USA)</option>
						<option>Wake Island</option>
						<option>Wallis &amp; Futana Is</option>
						<option>Yemen</option>
						<option>Zaire</option>
						<option>Zambia</option>
						<option>Zimbabwe</option>
					</select>
				</div>
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle"></span>
				<div id="dealership" class="custom-select">
					<select name="dealer" required>
						<option value="" class="{{ $errors->has('dealer') ? 'required' : '' }}">Preferred Dealership</option>
						@foreach ($dealerShips as $dealership)
							<option value="{{ $dealership->store_name }}" data-contact-name="{{ $dealership->contact_name }}" data-email="{{ $dealership->email }}" data-phone="{{ $dealership->phone }}">
							{{ $dealership->store_name }}
							</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="check-send">
		<div class="check-box">
			<input type="checkbox" id="policy" name="checkbox" required>
			<label for="policy">View our <a href="https://www.lamborghini.com/en-en/privacy-legal" target="_blank"><u>privacy policy</u></a>. I agree to the processing of my personal data for marketing purposes.</label>
		</div>
		<div class="send">
			<button type="submit">
				SEND ME INFORMATION
			</button>
		</div>
	</div>
</form>

@if(session()->has('thanks'))
<div class="column small-five small-push-one reset last">
	<div class="thanks">
		{!! session('thanks') !!}
		<p>	{!! session('copy') !!} </p>
		<button class="btn btn-primary">	{!! session('button') !!} </button>
	</div>
</div>
@endif
