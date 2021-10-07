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
                background-color: #10B981;
            }
            .item:hover:after {
                top: 0%;
            }

            /* Botones */
/*            .btn {
                background-color: white;
                color: black;
                border: 2px solid black;
                border-radius: 4px;
                cursor: pointer;
            }

            .btn-active {
                color: tomato;
            }*/
            .color {
                color: #121314;
            }

        </style>
    </head>
    <body class="antialiased">
        <div class="flex items-center justify-center flex-col">
            <div class="mt-5 pl-6 pt-4 pb-2 flex justify-start max-w-xl w-full">
                <a href="#"
                    class="text-gray-900 border-2 border-gray-900 px-2 py-1 text-green-600 rounded mr-1 text-base inline-block font-semibold"
                >
                    INICIO
                </a>
                <a href="#"
                    class="text-gray-900 border-2 border-gray-900 px-2 py-1 text-green-600 rounded text-base inline-block font-semibold"
                >
                    BLOG
                </a>
            </div>

            <div class="max-w-xl px-5">
                <h1 class="text-6xl pt-5 font-semibold">Hola.</h1>
                <p class="text-3xl py-6">
                    Mi nombre es <span class="font-semibold text-3xl">Eddy Rufino</span>.
                </p>
                <p class="text-xl font-light">
                    Soy desarrollador web enfocado en crear y construir proyectos geniales utilizando <a class="item" href="https://laravel.com/" target="_blank">Laravel</a> y
                    <a class="item" href="https://vuejs.org" target="_blank">Vue.js</a>.
                    La mayor parte de mi trabajo es código abierto y está disponible públicamente en
                    <a class="item" href="https://github.com/eddyrufino" target="_blank">GitHub</a>.
                </p>
                <p class="text-xl font-light mt-4">
                    Quizá quieras seguirme en
                    <a class="item" href="https://twitter.com/rufino_eddy" target="_blank">Twitter</a> y
                    <a class="item" href="https://medium.com/@eddyrufino" target="_blank">Medium</a>
                    para que tengas contenido más actualizado. En caso tengas alguna duda puedes enviarme un <a class="item" href="mailto:eddyjaair@gmail.com?Subject=Escribe%20el%20asunto%20del%20mail">Correo</a>.
                </p>
                <p class="text-xl font-light mt-4 mb-5">
                    Además de programar, disfruto montar bicicleta, salir a caminar e ir al cine.
                </p>
            </div>

        </div>
    </body>
</html>
