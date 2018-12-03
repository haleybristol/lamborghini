<div class="js-cookie-consent cookie-consent">

    <p class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
        
        <button onclick="hideCookieDialog()" type="button" class="close cookie text-right" aria-label="Close">
            <span class="icon-close">&#10005;</span>
        </button>
    </p>

    <button class="js-cookie-consent-agree cookie-consent__agree">
        {{ trans('cookieConsent::texts.agree') }}
    </button>


</div>
