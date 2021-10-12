<x-layout>
    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-6xl font-semibold">Posts.</h1>
        <p class="text-xl font-light py-6">En las siguientes publicaciones encontrarás algunas soluciones, consejos, buenas practicas y recomendaciones según mi experiencia como desarrollador web.</p>

        <div>
            @forelse ($posts as $post)
                <div class="flex justify-between">
                    <a href="{{ route('post.show', $post) }}" class="item text-xl font-light mb-4 inline-block">
                        {{ ucwords($post->title) }}
                    </a>
                </div>
            @empty
                <p>¡Aparecerá algo aquí en algunos momentos!</p>
            @endforelse
        </div>
        <div class="py-5">
            <p>{{ $posts->links() }}</p>
        </div>
    </div>
</x-layout>
