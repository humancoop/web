<html>
    <head>
        <title>Humancoop - @yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}" />
    </head>
    <body class="antialiased bg-gray-200">
      <div id="app" class="flex flex-col h-screen justify-between">
		<header>
			<nav class="flex items-center justify-between flex-wrap bg-gray-900 p-6">
				@include('layouts.logo')
				@include('layouts.mobile_menu')
				<div class="w-full hidden lg:block flex-grow lg:flex lg:items-center lg:w-auto">
					@include('layouts.social_links')
					@include('layouts.link_buttons')
				</div>
			</nav>
			@include('layouts.navigation_links')
		</header>
        <main class='mb-auto mx-auto text-gray-900 max-w-4xl'>
            @yield('content')
        </main>
		<footer class="text-center w-full mt-16 bg-gray-900 p-4">
			@include('layouts.footer')
		</footer>
      </div>
	  <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
