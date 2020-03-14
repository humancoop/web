<html>
    <head>
        <title>Humancoop - @yield('title')</title>
				<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
				<script src="{{ mix('js/app.js') }}"></script>
    </head>
    <body class="antialiased bg-gray-200 min-h-screen">
						<nav class="flex items-center justify-between flex-wrap bg-gray-900 p-6">
							<div class="flex items-center flex-shrink-0 text-white mr-6">
								<i class="px-1 text-3xl fas fa-globe-africa"></i>
								<span class="font-semibold text-xl tracking-tight">Human</span>
								<span class="font-semibold text-xl tracking-tight text-teal-500">Coop</span>
							</div>
							<div class="block lg:hidden">
								<button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
									<svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
								</button>
							</div>
							<div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
								<div class="text-sm lg:flex-grow">
									<a href="https://facebook.com/humancoop.ong.9" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
										<i class="fab fa-facebook-square"></i>
									</a>
									<a href="https://instagram.com/ong.humancoop" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
										<i class="fab fa-instagram"></i>
									</a>
									<a href="https://twitter.com/human_coop" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
										<i class="fab fa-twitter-square"></i>
									</a>
									<a href="email" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
										<i class="fas fa-envelope-square"></i>
									</a>
								</div>
							</div>
						</nav>
        @show

        <div class='content flex-grow text-gray-900 p-6'>
            @yield('content')
        </div>

				<footer class="text-center text-white w-full bg-gray-900 p-4">
            Humancoop&trade;  2019
				</footer>
    </body>
</html>
