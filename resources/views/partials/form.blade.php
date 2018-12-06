<form method="POST" action="{{ route('sendLead') }}" class="{{ session()->has('thanks') ? 'success' : '' }}">
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
				<span class="circle email"></span><input type="email" name="email" placeholder="{!! trans('form.placeholder.email') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.email') !!}'" required>
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle phone"></span><input class="{{ $errors->has('phone') ? 'required' : '' }}" type="number" name="phone" placeholder="{!! trans('form.placeholder.number') !!}" onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.number') !!}'" required>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-sm-6 autocomplete">
				<span class="circle country"></span>
				<input id="myInput" type="text" name="country" placeholder="{!! trans('form.placeholder.country') !!}"  onfocus="this.placeholder = ''" onblur="this.placeholder = '{!! trans('form.placeholder.country') !!}'" required>
			</div>
			<div class="col-12 col-sm-6">
				<span class="circle"></span>
				<div id="dealership" class="custom-select">
					<select name="dealer" class="dealer-select" required>
						<option>{!! trans('form.placeholder.dealer') !!}</option>

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
	<div class="check-send">
		<div class="check-box">
			<input type="checkbox" id="policy" name="checkbox" required>
			<label for="policy"><a href="https://www.lamborghini.com/en-en/privacy-legal" target="_blank"><u>{!! trans('form.policy.view') !!}</u></a>. {!! trans('form.policy.agree') !!}.</label>
		</div>
		<div class="send">
			<button type="submit">
				{!! trans('form.placeholder.send') !!}
			</button>
		</div>
	</div>
</form>
 
@if(session()->has('thanks'))
<div class="column small-five small-push-one reset last">
	<div class="thanks">
		<h2>{!! trans('form.thanksSection.thanks') !!}</h2>
		<p>	{!! trans('form.thanksSection.thanksCopy') !!} </p>
		<a class="btn btn-primary" href="http://www.{!! session('website') !!}">	{!! trans('form.thanksSection.dealerButton') !!} </a>
	</div>
	
</div>
@endif
