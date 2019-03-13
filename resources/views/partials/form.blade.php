<div class="form-wrapper row">
    <form id="form" method="POST" action="{{ route('sendLead') }}" class="{{ session()->has('thanks') ? 'success' : '' }}">
        {!! csrf_field() !!}

        <div class="dot-container {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
            <div class="form-header">
                <h4>
                    GENERAL INFORMATION
                </h4>

                <div class="form-key">
                    <span class="circle"></span>
                    <label for="">required field</label>
                </div>
            </div>
            <div class="row inputs-holder">
                <div class="col-12 col-sm-6 col-md-4 input-holder">
                    <span class="circle first {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
                    <input
                        value="{{ old('firstname') }}"
                        class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}"
                        type="text" name="firstname"
                        placeholder="{!! trans('form.placeholder.firstname') !!}"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '{!! trans('form.placeholder.firstname') !!}'"
                    >
                </div>
                <div class="col-12 col-sm-6 col-md-4 input-holder">
                    <span class="circle last {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
                    <input
                        value="{{ old('lastname') }}"
                        class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}"
                        type="text"
                        name="lastname"
                        placeholder="{!! trans('form.placeholder.lastname') !!}"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '{!! trans('form.placeholder.lastname') !!}'"
                    >
                </div>

                <div class="col-12 col-sm-6 col-md-4 input-holder">
                    <span class="circle email {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
                    <input
                        value="{{ old('email') }}"
                        class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}"
                        type="email"
                        name="email"
                        placeholder="{!! trans('form.placeholder.email') !!}"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '{!! trans('form.placeholder.email') !!}'"
                    >
                </div>
                <div class="col-12 col-sm-6 col-md-4 input-holder">
                    <span class="circle phone {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
                    <input
                        value="{{ old('phone') }}"
                        class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}"
                        type="number"
                        name="phone"
                        placeholder="{!! trans('form.placeholder.number') !!}"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '{!! trans('form.placeholder.number') !!}'"
                    >
                </div>

                <div class="col-12 col-sm-6 col-md-4 input-holder autocomplete">
                    <span class="circle country {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
                    <input
                        value="{{ old('placeoflife') }}"
                        class="{{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}"
                        id="myInput"
                        type="text"
                        name="placeoflife"
                        placeholder="{!! trans('form.placeholder.country') !!}"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = '{!! trans('form.placeholder.country') !!}'"
                    >
                </div>
                <div class="col-12 col-sm-6 col-md-4 input-holder">
                    <span class="circle {{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}"></span>
                    <div id="dealership" class="custom-select">
                        <select name="dealer" class="dealer-select" >
                            <option value="">{!! trans('form.placeholder.dealer') !!}</option>

                            @foreach ($dealerShips as $dealership)
                                <option
                                    value="{{ $dealership->store_name }}"
                                    data-contact-name="{{ $dealership->contact_name }}"
                                    data-email="{{ $dealership->email }}"
                                    data-country="{{ $dealership->country }}"data-website="{{ $dealership->website }}"
                                >
                                {{ $dealership->store_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 privacy-policy">
                <span class="circle"></span>
                <h4 class='privacy-policy-header'>
                    Privacy
                </h4>

                <div class="privacy-policy-body">
                    {!! trans('form.privacy-policy') !!}
                </div>
            </div>

            <div class="col-12 col-md-6 privacy-confirmation">
                <div class="check-box checkbox">
                    <input type="checkbox" id="policy" name="checkbox">
                    <label for="policy">
                        {!! trans('form.checkbox-agree') !!}
                    </label>
                </div>

                <div class="agree-disagree">
                    <div class="radio-holder">
                        <input type="radio" name="information_processing" id="agree" value='agree'>
                        <label for="agree">{!! trans('form.agree') !!}</label>
                    </div>

                    <div class="radio-holder">
                        <input type="radio" name="information_processing" id="disagree" value='disagree' checked>
                        <label for="disagree">{!! trans('form.disagree') !!}</label>
                    </div>

                    <div class="agreement-text">
                        {!! trans('form.agreement-notice') !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="recap-holder">
            {!! ReCaptcha::htmlFormSnippet() !!}

            <p class="recap-error"></p>
        </div>

        <div class="send {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
            <button type='submit' class="btn btn-form {{Config::get('app.locale') == 'ar' ? 'btn-arabic' : ''}}" href="#">{!! trans('form.placeholder.send') !!}<span aria-hidden='true' role='presentation' aria-label='Envelope Icon' class="icon icon-mail"></span></button>
        </div>
    </form>

    {{-- @if(session()->has('thanks')) --}}
        <div class="column small-five small-push-one reset last thank-you-block">
            <div class="thanks {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
                <h2>{!! trans('form.thanksSection.thanks') !!}</h2>
                <p>	{!! trans('form.thanksSection.thanksCopy') !!} </p>
                <a id='website-clicker' href='' class="btn btn-primary {{Config::get('app.locale') == 'ar' ? 'btn-arabic' : ''}}">{!! trans('form.thanksSection.dealerButton') !!}</a>
            </div>
        </div>
    {{-- @endif --}}
</div>

<script>
    // onclick="return gtag_report_conversion(document.getElementById('form').submit());"



</script>
