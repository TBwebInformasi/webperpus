<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('tittle')</title>
	<link rel="stylesheet" href="">
	<link href='{{ asset('icon/logoku.icon') }}' rel='shortcut icon'>
</head>
<body>
	<header id="header" class="">
		@yield('header')
	</header><!-- /header -->
	<nav class="">
	    @yield('navigasi')
	</nav>
	<content>
		@yield('content')
	</content>
</body>
</html>