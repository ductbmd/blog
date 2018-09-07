<!DOCTYPE html>
<html>
<head>
	<title>@yield('head.title')</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	@yield('head.css')
</head>
<body>
	@include('partials/navbar')

	@yield('body.content')
	
	@include('partials/footer')
	<script src="/js/jquery-1.11.2.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	@yield('body.js')

</body>
</html>