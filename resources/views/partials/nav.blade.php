<nav class="nav fixed-top">
  <div class="navbar-inner">
        <div class="logo-container">
            <a href="{!! trans('app.lambo-home') !!}">
                <img src="{{ asset('img/lambo-logo.png') }}">
            </a>
        </div>

        <div class="right-nav">
            <div class="request {{Config::get('app.locale') == 'fr' ? 'small' : ''}}">
                <a href="{!! trans('nav.link') !!}" target="_blank" class="btn">{!! trans('nav.info') !!}</a>
            </div>

            <div class="lang-container">
                <!-- Button trigger modal -->
                <button type="button" class="btn-lang" data-toggle="modal" data-target="#lang-modal">{{ LaravelLocalization::getCurrentLocale() }}</button>

                <!-- Modal -->
                <div class="modal fade" id="lang-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                            <span class="icon-close">&#10005;</span>
                        </button>
                        <h5 class="modal-title text-center"><span class="light">{!! trans('nav.choose') !!}</span> <strong>{!! trans('nav.yourlang') !!}</strong></h5>
                        <div class="full"><div></div></div>
                        <div class="modal-body text-center">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>
