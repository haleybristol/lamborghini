@extends('layouts.app')

@section('content')
<div class="hero-fit">
    <img class="img-fluid mobile" src="{{ asset('img/yellow-urus.jpg') }}">
    <img class="img-fluid desktop" src="{{ asset('img/yellow-urus-zoom.jpg') }}">
        <div class="hero-copy">
            <div class="container">
                <h1><strong>URUS</strong></h1>
                <div class="hash-container"><p class="hashtag">#SINCEWEMADEITPOSSIBLE</p></div>
            </div>
        </div>
</div>
<ul>

</ul>
<section id="block0" class="stripe container block0 fullwidth">
      
    <svg id="block0_skew" class="skew" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
        <desc>The rear of a dark Urus as it travels in a metropolitan setting.</desc>            
        <svg viewBox="0 0 1 1.19" preserveAspectRatio="xMidYMid slice">
            <polygon fill="white" points="0 1.19, 1 0, 1 1.19, 0 1.19"></polygon>
            <clipPath id="block0_skew-mask">
                <polygon fill="green" points="0.02 1.19, 1 0.0238, 1 1.19, 0 1.19"></polygon>
            </clipPath>
                <image clip-path="url(#block0_skew-mask)" preserveAspectRatio="xMidYMid slice" x="0" y="0" height="100%" width="100%" xlink:href="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/model/URUS/pagina-urus/overview-right_4.jpg" lazy-src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/model/URUS/pagina-urus/overview-right_4.jpg" class="ng-scope" style="opacity: 1;"></image>
        </svg>
    </svg>
    <div class="column small-five small-push-one reset last">
        <div class="boxcontent"> 
            <h1><strong>{!! trans('app.block1.header') !!}</strong> <span>{!! trans('app.block1.headerSpan') !!}</span></h1>
            <p> {!! trans('app.block1.line1') !!} </p>
            <p> {!! trans('app.block1.line2') !!} </p>
            <p class="{{ session()->has('thanks') ? 'success' : '' }}"> {!! trans('app.block1.line3') !!} </p>
        </div>
        @include('partials.form')
    </div>
    <div class="image-mobile hidden-over-small">
        <div style="background-image:url(https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/model/URUS/pagina-urus/overview-right_4.jpg)"></div>
    </div>
    </section>


    <div class="skew-images">  
        <svg id="block2-skew-3" class="skew-left" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
            <desc>A blue Urus seen from the front as it travels down a dusty dirt road</desc>
            <svg viewBox="0 0 2.5 1" preserveAspectRatio="xMidYMid slice">
                <clipPath id="block2-skew-3-mask">
                    <polygon fill="green" points="0.86767105974871 0, 2.5 0, 1.6609003688227 1 , 0.028571428571429 1, 0.86767105974871 0"></polygon>
                </clipPath>

                <image clip-path="url(#block2-skew-3-mask)" preserveAspectRatio="xMidYMid slice" height="100%" width="100%" xlink:href="{{ asset('img/blue-urus-dust.jpg') }}" lazy-src="{{ asset('img/blue-urus-dust.jpg') }}" class="ng-scope" style="opacity: 1;"></image>

            </svg>
        </svg>
        <svg id="block2-skew-2" class="skew-right" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
                <desc>A coal gray Urus, seen from the side, as it travels along a city street </desc>            <svg viewBox="0 0 2.5 1" preserveAspectRatio="xMidYMid slice">
                <clipPath id="block2-skew-2-mask">
                    <polygon fill="yellow" points="0.83909963117728 0, 2.5 0, 1.6609003688227 1 , 0 1, 0.83909963117728 0"></polygon>
                </clipPath>

                <image clip-path="url(#block2-skew-2-mask)" preserveAspectRatio="xMidYMid slice" height="100%" width="100%" xlink:href="{{ asset('img/back-seats.jpg') }}" lazy-src="{{ asset('img/back-seats.jpg') }}" class="ng-scope" style="opacity: 1;"></image>

            </svg>
        </svg>
        <svg id="block2-skew-1" class="skew-bottom" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
                <desc>A yellow Urus stopped on a dirt road, as seen from the rear.</desc>            
                <svg viewBox="0 0 1.5 1" preserveAspectRatio="xMidYMid slice">
                <clipPath id="block2-skew-1-mask">
                    <polygon fill="red" points="0 0.028571428571429, 1.4760257248235 0.028571428571429, 0.66090036882272 1 , 0 1, 0 0.028571428571429"></polygon>
                </clipPath>

                <image clip-path="url(#block2-skew-1-mask)" preserveAspectRatio="xMidYMid slice" height="100%" width="100%" xlink:href="{{ asset('img/urus-landscape.jpg') }}" lazy-src="{{ asset('img/blur-city.jpg') }}" class="ng-scope" style="opacity: 1;"></image>

            </svg>
        </svg>
    </div>

<div class="fit">
    <img class="img-fluid" src="{{ asset('img/blur-city.jpg') }}">
</div>

<section class="container emotion">

        <div class="column small-five small-push-one reset last">
            <h1><b>EMOTION</b></h1>
            <p>
                The Urus was made to evoke emotions. None of them subtle.
            </p>
            <p>
                One glimpse of the Urus and you’ll see the Lamborghini pedigree. In its silhouette there’s a little Murcielago; in the muscular proportions, the Countach. But now the drama comes with a dash of discernment: four seats, four-wheel steering, and four-wheel drive. It’s form and function in equal measure.
            </p>
            <p>
                Still convinced this isn’t a pure Lamborghini? Push the accelerator. You’ll unleash a 4.0 litre bi-turbo engine good for 650 HP and an exhaust note that would make Pavarotti proud.
            </p>
        </div>
</section>

<br>

<div class="eu-cookies text-center">
    @include('cookieConsent::index')
</div>

@endsection
