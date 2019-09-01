<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Qué puedes hacer tú</title>

    </head>
    <body>
    	<h1>Aquí va el qué puedes hacer tú</h1>
			<a href="{{ url('/donacion') }}">Donacion</a>
			<a href="{{ url('/socio') }}">Hazte socio</a>
    </body>
</html>
