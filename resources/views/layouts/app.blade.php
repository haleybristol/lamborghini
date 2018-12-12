<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" type="image/png" href="https://www.lamborghini.com/themes/custom/lambo/img/base/logo.png"/>
        <title>Lamborghini</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/6f1feaf27e.js"></script>

        <!-- Global site tag (gtag.js) - Google Ads: 774690848 --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-774690848"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-774690848'); </script>

        <!-- Event snippet for Send Me Information conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-774690848/zi8wCJ7OjpEBEKCws_EC', 'event_callback': callback }); return false; } </script>
 
        <!-- Event snippet for Find A Dealer conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. --> <script> function gtag_report_conversion(url) { var callback = function () { if (typeof(url) != 'undefined') { window.location = url; } }; gtag('event', 'conversion', { 'send_to': 'AW-774690848/FKrWCL3XoZEBEKCws_EC', 'event_callback': callback }); return false; } </script>
        
        @stack('head')
    </head>
    <body >
        <div id="app">
            @include('partials.nav')

            <main>
                @yield('content')

            </main>

            @include('partials.footer')
        </div>

        {{-- Scripts --}}
        <script src="{{ mix('js/app.js') }}" defer></script>
        @stack('scripts')
    </body>
</html>
