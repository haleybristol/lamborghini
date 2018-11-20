<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Lamborghini</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/6f1feaf27e.js"></script>

        @stack('head')
    </head>
    <body>
        <div id="app">
            @include('partials.messages')
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
