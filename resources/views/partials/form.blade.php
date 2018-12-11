<form id="form" method="POST" action="{{ route('sendLead') }}" class="{{ session()->has('thanks') ? 'success' : '' }}">
	{!! csrf_field() !!}
	
	<div class="dot-container {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
		<div class="row">
			<div class="col-12 col-sm-6">
				<span class="circle first {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span><input value="{{ old('firstname') }}" class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}} {{ $errors->has('firstname') ? 'required' : '' }}" type="text" name="firstname" placeholder="{!! trans('form.placeholder.firstname') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.firstname') !!}'" >
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle last {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span><input value="{{ old('lastname') }}" class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}} {{ $errors->has('lastname') ? 'required' : '' }}" type="text" name="lastname" placeholder="{!! trans('form.placeholder.lastname') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.lastname') !!}'" >
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6">
				<span class="circle email {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span><input value="{{ old('email') }}" class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}} {{ $errors->has('email') ? 'required' : '' }}" type="email" name="email" placeholder="{!! trans('form.placeholder.email') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.email') !!}'">
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle phone {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span><input value="{{ old('phone') }}" class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}} {{ $errors->has('phone') ? 'required' : '' }}" type="number" name="phone" placeholder="{!! trans('form.placeholder.number') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.number') !!}'" >
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 autocomplete">
				<span class="circle country {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
				<input value="{{ old('country') }}" class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}} {{ $errors->has('country') ? 'required' : '' }}" id="myInput" type="text" name="country" placeholder="{!! trans('form.placeholder.country') !!}"  onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.country') !!}'" >
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
				<div id="dealership" class="custom-select {{ $errors->has('dealer') ? 'required' : '' }}">
					<select name="dealer" class="dealer-select" >
						<option value="">{!! trans('form.placeholder.dealer') !!}</option>

						@foreach ($dealerShips as $dealership)

							<option value="{{ $dealership->store_name }}" data-contact-name="{{ $dealership->contact_name }}" data-email="{{ $dealership->email }}" data-country="{{ $dealership->country }}" data-website="{{ $dealership->website }}">
							{{ $dealership->store_name }}
							</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
	</div>
	<div class="check-send {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
		<div class="check-box {{ $errors->has('checkbox') ? 'check-required' : '' }}">
			<input type="checkbox" id="policy" name="checkbox">
			<label for="policy"><a href="{!! trans('app.policy-link') !!}" target="_blank"><u>{!! trans('form.policy.view') !!}</u></a>. {!! trans('form.policy.agree') !!}.</label>
		</div>
		<div class="send {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
			<a class="btn btn-form {{Config::get('app.locale') == 'ar' ? 'btn-arabic' : ''}}" href="#" onclick="document.getElementById('form').submit()">{!! trans('form.placeholder.send') !!}</a>
		</div>
	</div>
</form>
 
@if(session()->has('thanks'))
<div class="column small-five small-push-one reset last">
	<div class="thanks {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
		<h2>{!! trans('form.thanksSection.thanks') !!}</h2>
		<p>	{!! trans('form.thanksSection.thanksCopy') !!} </p>
		<a class="btn btn-primary {{Config::get('app.locale') == 'ar' ? 'btn-arabic' : ''}}" href="http://www.{!! session('website') !!}">	{!! trans('form.thanksSection.dealerButton') !!} </a>
	</div>
	
</div>
@endif


