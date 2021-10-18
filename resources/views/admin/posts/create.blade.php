<x-layout>
    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-6xl font-semibold">Nuevo Post</h1>
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
