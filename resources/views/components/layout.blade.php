<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eddy Rufino</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,500,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        @yield('styles')

        <style>
            body {
              font-family: 'Rubik', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
              -webkit-font-smoothing: antialiased;
            }

            .item {
                text-decoration: none;
                color: #121314;
                position: relative;
            }
            .item:after {
                content: "";
                position: absolute;
                z-index: -1;
                top: 60%;
                left: -0.1em;
                right: -0.1em;
                bottom: 0;
                transition: top 200ms cubic-bezier(0, .8, .13, 1);
                background-color: #34D399; /*10B981*/
            }
            .item:hover:after {
                top: 0%;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="flex items-center justify-center flex-col">

            <x-nav></x-nav>

            {{ $slot }}

        </div>

        @yield('scripts')
    </body>
</html>
