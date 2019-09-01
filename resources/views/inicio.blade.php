<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inicio</title>

    </head>
    <body>
    	<h1>Aquí va la página de inicio</h1>
			<a href="{{ url('/blog') }}">Blog</a>
			<a href="{{ url('/donacion') }}">Donacion</a>
			<a href="{{ url('/quienes-somos') }}">Quiénes somos</a>
			<a href="{{ url('/que-hacemos') }}">Qué hacemos</a>
			<a href="{{ url('/que-puedes-hacer-tu') }}">Qué puedes hacer tú</a>
			<a href="{{ url('/socio') }}">Hazte socio</a>
    </body>
</html>
