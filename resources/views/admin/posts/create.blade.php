<x-layout>
    <div class="max-w-xl py-6 px-5 mt-5 w-full bg-gray-100 rounded-xl">
        <p class="text-2xl font-bold mb-8 pb-2 border-b">Nuevo Post</p>
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <x-form.input name="title" placeholder="Write a title great!"/>

            <x-form.label name="Body" ></x-form.label>
            <textarea name="body" id="body">{{ old('body') }}</textarea>

            <x-form.button>Guardar</x-form.button>

        </form>
    </div>

    {{-- script and style --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    {{-- instance --}}
    <script>
        var body = new SimpleMDE({ element: document.getElementById("body") });
    </script>
</x-layout>
