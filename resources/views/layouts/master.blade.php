<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contrôle d'activités - {{$title or "IUT"}} </title>

    </head>
    <body>
        @include('layouts.partials._nav')
        
        @yield('container')

        @yield('footer')
    </body>
</html>
