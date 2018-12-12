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

        <script> gtag('event', 'page_view', { 'send_to': 'AW-774690848', 'user_id': 'replace with value' }); </script>

        
        @stack('head')
    </head>
    <body>
        <!--
        Start of Floodlight Tag: Please do not remove
        Activity name of this tag: Lamborghini Find Dealer
        URL of the webpage where the tag is expected to be placed: https://discoverlamborghini.com/
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 12/12/2018
        -->
        <script type="text/javascript">
        var axel = Math.random() + "";
        var a = axel * 10000000000000;
        document.write('<iframe src="https://9075836.fls.doubleclick.net/activityi;src=9075836;type=butto0;cat=lambo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
        <iframe src="https://9075836.fls.doubleclick.net/activityi;src=9075836;type=butto0;cat=lambo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of Floodlight Find a Dealer Tag: Please do not remove -->
        
        <!--
        Start of Floodlight Tag: Please do not remove
        Activity name of this tag: Lamborghini Form Fill
        URL of the webpage where the tag is expected to be placed: https://discoverlamborghini.com/
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 12/12/2018
        -->
        <script type="text/javascript">
        var axel = Math.random() + "";
        var a = axel * 10000000000000;
        document.write('<iframe src="https://9075836.fls.doubleclick.net/activityi;src=9075836;type=formf0;cat=lambo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
        <iframe src="https://9075836.fls.doubleclick.net/activityi;src=9075836;type=formf0;cat=lambo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of Floodlight Form Fill Tag: Please do not remove -->

        <!--
        Start of Floodlight Tag: Please do not remove
        Activity name of this tag: Lamborghini Site Retargeting
        URL of the webpage where the tag is expected to be placed: https://discoverlamborghini.com/
        This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
        Creation Date: 12/12/2018
        -->
        <script type="text/javascript">
        var axel = Math.random() + "";
        var a = axel * 10000000000000;
        document.write('<iframe src="https://9075836.fls.doubleclick.net/activityi;src=9075836;type=rmktg0;cat=lambo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
        </script>
        <noscript>
        <iframe src="https://9075836.fls.doubleclick.net/activityi;src=9075836;type=rmktg0;cat=lambo0;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
        </noscript>
        <!-- End of Floodlight Tag: Please do not remove -->

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
