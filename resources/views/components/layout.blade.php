<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title ?? 'Site Laravel' }}</title>
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="/css/main.css" />
</head>
<body>
<header class="header">
	<div style="width: 30px;">
		@include('svg.logo')
	</div>
	<x-menu />
</header>
{{ $slot }}
<footer class="footer">
	<p>Developer: {{ $developer }}</p>
	<p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
</footer>
</body>
</html>
