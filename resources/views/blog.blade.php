<x-layout>
    <div class="max-w-xl px-5 mt-5">
        <h1 class="text-6xl font-semibold">Posts.</h1>
        <p class="text-xl font-light py-6">En las siguientes publicaciones encontrarás algunas de las soluciones que le di a los diversos retos con los que me encontre a lo largo de mi vida como desarrollador web.</p>

        <div>
            @foreach ($posts as $post)
                <div>
                    <a href="{{ route('post.show', $post) }}" class="item text-xl font-light mb-4 inline-block">
                        {{ ucwords($post->title) }}
                    </a>
                </div>
            @endforeach
        </div>
        <div class="py-5">
            <p>{{ $posts->links() }}</p>
        </div>
    </div>
</x-layout>
