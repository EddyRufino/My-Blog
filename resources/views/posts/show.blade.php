<x-layout>
    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-5xl font-semibold">{{ $post->title }}</h1>
        <div class="text-xl font-light py-6">
            <p>{{ $post->body }}</p>
        </div>
    </div>
</x-layout>
