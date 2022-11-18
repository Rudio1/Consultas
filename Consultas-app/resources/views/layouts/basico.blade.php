<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Consultas - @yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/start.css')}}">
    </head>
    <body>
        @include('form.topo.menu')
        @yield('conteudo')
    </body>
</html>
