<x-layout>
    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-6xl font-semibold">Nuevo Post</h1>
        <form method="POST" action="{{ route('post.store') }}">
            @csrf

            <x-form.input name="title" placeholder="Write a title great!"/>
            <x-form.textarea name="body" />

            <x-form.button>Guardar</x-form.button>

        </form>
    </div>
</x-layout>
