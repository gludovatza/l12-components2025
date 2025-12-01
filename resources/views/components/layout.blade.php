<!DOCTYPE HTML>
<!--
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Future Imperfect by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		{{-- <link rel="stylesheet" href="assets/css/main.css" /> --}}
        @vite('resources/css/main.css', 'resources/css/app.css')
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
                @include('includes._header')

				<!-- Menu -->
                @include('includes._menu')

				<!-- Main -->
				<div id="main">
                    @yield('content')
                </div>

				<!-- Sidebar -->
                @include('includes._sidebar')

			</div>

		<!-- Scripts -->
        @include('includes._scripts')

	</body>
</html>
