<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel - Contatti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/main.css" rel="stylesheet">  
    </head>
    <body>

        {{ View::make('header') }}

        <main>
            <div class="flex-center position-ref full-height title m-b-md">
                Contatti
            </div>
        </main>
    </body>
</html>
