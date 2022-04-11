<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/main.css" rel="stylesheet">      
    </head>
    <body>
        <header>
            <ul>
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="/signin">Accedi</a>
                </li>
                <li>
                    <a href="/contacts">Contatti</a>
                </li>
                <li>
                    <a href="/where">Dove siamo</a>
                </li>
            </ul>
        </header>
    </body>
</html>
