<ul>
	@foreach ($menu as $link => $name)
		@if(Request::is($link))
			<li><a href={{ $link }} class="menu__link menu__link--is-action">{{ $name }}</a>
		@else
			<li><a href={{ $link }} class="menu__link">{{ $name }}</a>
		@endif
	@endforeach
</ul>