<x-app-layout>
	<div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
		<h1 class="upercase text-center text-3xl font-bold">Categoria: {{$category->name}}</h1>
		@foreach($posts as $post)
           <article class="mb-8">
           	<img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
           </article>
		@endforeach
	</div>

	</x-app-layout>	