@extends('layouts.app')

@section('content')
<div class="hero-fit">
    <div class="img-fluid desktop"></div>

    <div class="hero-copy">
        <div class="container">
            <h1>
                <strong>HURACÁN</strong> EVO
            </h1>
            <div class="hash-container">
                <span class="hashtag">EVERY DAY AMPLIFIED</span>
            </div>
        </div>
    </div>
</div>


<section id="block0" class="stripe container block0 fullwidth">
    <div class='fuel-emission-disclaimer'>
        <p class='disclaimer'>
            {!! trans('disclaimer.text') !!}
        </p>
    </div>

    <svg id="block0_skew" class="skew" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
        <desc>The rear of an orange Huracán Evo as it sits an empty runway.</desc>
        <svg viewBox="0 0 1 1.19" preserveAspectRatio="xMidYMid slice">
            <polygon fill="white" points="0 1.19, 1 0, 1 1.19, 0 1.19"></polygon>

            <clipPath id="block0_skew-mask">
                <polygon fill="green" points="0.02 1.19, 1 0.0238, 1 1.19, 0 1.19"></polygon>
            </clipPath>

            <image clip-path="url(#block0_skew-mask)" preserveAspectRatio="xMinYMax slice" cx="100%" x="0" y="0" height="100%" width="100%" xlink:href="/img/emotion-0342-rgb.jpg" lazy-src="/img/emotion-0342-rgb.jpg" class="ng-scope" style="opacity: 1;"></image>
        </svg>
    </svg>

    <div class="copy-left">
        <div class="boxcontent {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
            <h1>{!! trans('app.block1.header') !!}</h1>
            <p> {!! trans('app.block1.line1') !!} </p>
            <p> {!! trans('app.block1.line2') !!} </p>
            <!-- <p class="{{ session()->has('thanks') ? 'success' : '' }}"> {!! trans('app.block1.line3') !!} </p> -->
        </div>
    </div>
</section>

<div class="mobile-image-holder">
    <img src="/img/emotion-0342-rgb.jpg" alt="">
</div>

@include('partials.form')

<div class="skew-images">
    <svg id="block2-skew-3" class="skew-left" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
        <desc>An inside look at the Huracán Evo</desc>

        <svg viewBox="0 0 2.5 1" preserveAspectRatio="xMidYMid slice">
            <clipPath id="block2-skew-3-mask">
                <polygon fill="green" points="0.86767105974871 0, 2.5 0, 1.6609003688227 1 , 0.028571428571429 1, 0.86767105974871 0"></polygon>
            </clipPath>

            <image clip-path="url(#block2-skew-3-mask)" preserveAspectRatio="xMaxYMax slice" height="100%" width="100%" xlink:href="{{ asset('img/huracan-evo-interior.jpg') }}" lazy-src="{{ asset('img/huracan-evo-interior.jpg') }}" class="ng-scope" style="opacity: 1;"></image>
        </svg>
    </svg>

    <svg id="block2-skew-2" class="skew-right" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
            <desc>A coal gray Urus, seen from the side, as it travels along a city street </desc>            <svg viewBox="0 0 2.5 1" preserveAspectRatio="xMidYMid slice">
            <clipPath id="block2-skew-2-mask">
                <polygon fill="yellow" points="0.83909963117728 0, 2.5 0, 1.6609003688227 1 , 0 1, 0.83909963117728 0"></polygon>
            </clipPath>

            <image clip-path="url(#block2-skew-2-mask)" preserveAspectRatio="xMaxYMax slice" height="100%" width="100%" xlink:href="{{ asset('img/huracan-evo-poolside.jpg') }}" lazy-src="{{ asset('img/huracan-evo-poolside.jpg') }}" class="ng-scope" style="opacity: 1;"></image>
        </svg>
    </svg>
</div>

<div class="fit top-fit">
    <img class="img-fluid" src="{{ asset('img/huracan-evo-interior.jpg') }}">
</div>
<div class="fit">
    <img class="img-fluid" src="{{ asset('img/huracan-evo-poolside.jpg') }}">
</div>

<br>

<div class="eu-cookies text-center {{Config::get('app.locale') == 'ar' ? 'right-align' : ''}}">
    {{-- @include('cookieConsent::index') --}}
</div>

@endsection
