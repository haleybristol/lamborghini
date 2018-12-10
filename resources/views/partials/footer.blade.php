
<footer>
  <div class="container row">
    <div class="col-12 col-sm-8 {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
      <p>{!! trans('app.footer.copyright') !!}</p>
    </div>
    <div class="col-12 col-sm-4 foot-right">
      <a href="{!! trans('app.policy-link') !!}"  target="_blank">{!! trans('app.footer.policy') !!}</a>
    </div>
  </div>
</footer>
