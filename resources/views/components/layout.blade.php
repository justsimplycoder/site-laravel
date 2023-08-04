<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ $title ?? 'Site Laravel' }}</title>
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
	@vite(['resources/stylus/main.styl', 'resources/js/app.js'])
</head>
<body class="page">
<header class="page__header header">
	<div style="width: 30px;"><a href="{{ route('home') }}">
		@include('svg.logo')
	</a></div>
	<x-menu />
</header>
<div class="page__content {{ $page_content ?? '' }}">
{{ $slot }}
</div>
<footer class="page__footer footer">
	<p>Developer: {{ $developer }}</p>
	<p>Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</p>
</footer>
</body>
</html>
