<html>
    <head>
        <title>Humancoop - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Logo de humancoop | enlaces redes sociales | botones donación y socio
        @show

        <div class="container">
            @yield('content')
        </div>

        @section('footer')
            Footer que va al fondo
        @show
    </body>
</html>
