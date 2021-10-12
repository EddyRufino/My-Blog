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
            html {
                scroll-behavior: smooth;
            }

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

        {{-- Alpine JS --}}
        <script defer src="https://unpkg.com/alpinejs@3.4.2/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased">
        <div class="flex items-center justify-center flex-col">

            <x-nav></x-nav>

            {{ $slot }}

        </div>

        <footer id="newsletters" class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16">
            {{-- <img src="/images/avatar.png" alt="" class="mx-auto -mb-6" style="width: 145px;"> --}}
            <h5 class="text-3xl font-normal">Mantente en contacto con las últimas publicaciones</h5>
            <p class="text-sm text-gray-700 mt-3">Recibirás correos sin publicidad.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

                    <form method="POST" action="/newsletter" class="lg:flex text-sm">
                        @csrf

                        <div class="lg:py-3 lg:px-5 flex items-center">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                                <input name="email" type="text" placeholder="Ingresa tu correo"
                                       class="lg:bg-transparent py-2 lg:py-0 pl-4 lg:ml-1 focus-within:outline-none lg:border-0 focus:ring-gray-200" required
                                >

                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <button type="submit"
                                class="transition-colors duration-300 bg-green-500 hover:bg-green-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                        >
                            Sucribete
                        </button>
                    </form>
                </div>
            </div>
        </footer>

        <x-flash />

        @yield('scripts')
    </body>
</html>
