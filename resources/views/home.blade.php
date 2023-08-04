<x-layout>
	<main>
		<h1>Главная страница</h1>
		<div style="display: flex;justify-content: space-between;">
			@foreach ($posts as $post)
				<div>
					<h2>{{ $post->title }}</h2>
					<img src="{{$post->thumbnail}}" alt="" width="400">
					<p>{!! $post->preview !!}</p>
				</div>
			@endforeach
		</div>
	</main>
</x-layout>