<footer class="{{Config::get('app.locale') == 'ar' ? '' : 'display-none'}}">
  <div class="container row">
    <div class="col-12 col-sm-3 align-right">
      <a href="{!! trans('app.policy-link') !!}"  target="_blank">{!! trans('app.footer.policy') !!}</a>
    </div>
    <div class="col-12 col-sm-9 foot-right">
      <p>{!! trans('app.footer.copyright') !!}</p>
    </div>
  </div>
</footer>
<footer class="{{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}">
  <div class="container row">
    <div class="col-12 col-sm-9">
      <p>{!! trans('app.footer.copyright') !!}</p>
    </div>
    <div class="col-12 col-sm-3 foot-right">
      <a href="{!! trans('app.policy-link') !!}"  target="_blank">{!! trans('app.footer.policy') !!}</a>
    </div>
  </div>
</footer>