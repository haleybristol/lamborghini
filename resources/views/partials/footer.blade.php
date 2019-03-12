{{-- <footer class="{{Config::get('app.locale') == 'ar' ? '' : 'display-none'}}">
    <div class="container row">
        <div class="col-12 col-sm-3 dir-right">
            <a href="{!! trans('app.policy-link') !!}"  target="_blank">{!! trans('app.footer.policy') !!}</a>
        </div>
        <div class="col-12 col-sm-9 foot-right right-align">
            <p>{!! trans('app.footer.copyright') !!}</p>
        </div>
    </div>
</footer> --}}

<footer class="{{Config::get('app.locale') == 'ar' ? 'display-none' : ''}}">
    <div class="container row">
        <div class="privacy-and-social">
            <div class="privacy-and-legal">

                <a href="{!! trans('app.policy-link') !!}"  target="_blank">
                    <span>
                        {!! trans('app.footer.policy') !!}
                    </span>
                </a>

                <a href="{!! trans('app.policy-link') !!}"  target="_blank">
                    <span>
                        LAMBORGHINI.COM
                    </span>
                </a>
            </div>

            <div class="social-icons">
                <a href="//www.facebook.com/Lamborghini/">
                    <span class="icon icon-facebook"></span>
                </a>
                <a href="//twitter.com/lamborghini">
                    <span class="icon icon-twitter-bird"></span>
                </a>
                <a href="//www.youtube.com/c/lamborghini">
                    <span class="icon icon-youtube-play"></span>
                </a>
                <a href="//www.instagram.com/lamborghini/">
                    <span class="icon icon-instagram"></span>
                </a>
                <a href="//www.linkedin.com/company/automobili-lamborghini-s-p-a-/">
                    <span class="icon icon-linkedin"></span>
                </a>
                <a href="//www.pinterest.com/lamborghini/">
                    <span class="icon icon-pinterest"></span>
                </a>
                <a href="//plus.google.com/+Lamborghini">
                    <span class="icon icon-gplus"></span>
                </a>
                <a href="//www.weibo.com/lamborghinichina">
                    <span class="icon icon-weibo"></span>
                </a>
                <a href="//i.youku.com/i/UMjg0MDg1ODMy">
                    <span class="icon icon-play-circled"></span>
                </a>
                <a href="//www.lamborghini.com/en-en/wechat">
                    <span class="icon icon-wechat"></span>
                </a>
            </div>
        </div>

        <p>{!! trans('app.footer.copyright') !!}</p>

    </div>
</footer>
