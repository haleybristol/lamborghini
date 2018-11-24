@extends('layouts.app') 
@section('content')

<section class="hero-img">
  <img class="img-fluid" src="{{ asset('img/yellow-urus.jpg') }}">
</section>
<section class="container intro">
  <h1>URUS</h1>
  <p>Supercar performance. SUV practicality. But don’t worry: this is every gram a Lamborghini.</p>
  <a href="#form">REQUEST INFO <i class="fa fa-chevron-right"></i></a>
</section>
<div class="fit"><img class="img-fluid" src="{{ asset('img/blur-city.jpg') }}"></div>
<section class="container emotion">
  <div class="row">

    <div class="images img-1">

      <svg id="block0_skew" class="skew" xmlns="http://www.w3.org/2000/svg" aria-labelledby="desc">
        <desc>The rear of a dark Urus as it travels in a metropolitan setting.</desc>
        <svg viewBox="0 0 1 1.19" preserveAspectRatio="xMidYMid slice">
          <polygon fill="white" points="0 1.19, 1 0, 1 1.19, 0 1.19"></polygon>

          <clipPath id="block0_skew-mask">
            <polygon fill="green" points="0.02 1.19, 1 0.0238, 1 1.19, 0 1.19"></polygon>
          </clipPath>

          <image clip-path="url(#block0_skew-mask)" preserveAspectRatio="xMidYMid slice" x="0" y="0" height="100%" width="100%" xlink:href="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/model/URUS/pagina-urus/overview-right_4.jpg" lazy-src="https://www.lamborghini.com/sites/it-en/files/DAM/lamborghini/model/URUS/pagina-urus/overview-right_4.jpg"
          class="ng-scope" style="opacity: 1;"></image>

        </svg>
      </svg>
    </div>

    <div class="column small-five small-push-one reset last">
      <h1>EMOTION</h1>
      <p>The Urus was made to evoke emotions. None of them subtle.</p>
      <p>One glimpse of the Urus and you’ll see the Lamborghini pedigree. In its silhouette there’s a little Murcielago; in the muscular proportions, the Countach. But now the drama comes with a dash of discernment: four seats, four-wheel steering, and four-wheel
        drive. It’s form and function in equal measure.</p>
      </p>Still convinced this isn’t a pure Lamborghini? Push the accelerator. You’ll unleash a 4.0 litre bi-turbo engine good for 650 HP and an exhaust note that would make Pavarotti proud.
      <p>
    </div>

  </div>
</section>

<div class="fit">
  <img class="img-fluid" src="{{ asset('img/blue-urus-dust.jpg') }}">
</div>

@include('partials.form')
<br>
<div class="eu-cookies text-center">@include('cookieConsent::index')</div>
</section>

@endsection
