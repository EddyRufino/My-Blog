<x-layout>

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.css" integrity="sha512-pTg+WiPDTz84G07BAHMkDjq5jbLS/AqY0rU/QdugnfeE0+zu0Kjz++0rrtYNK9gtzEZ33p+S53S2skXAZttrug==" crossorigin="anonymous" />
@endsection

    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-6xl font-semibold">Editar Post</h1>
        <form method="POST" action="{{ route('post.update', $post) }}">
            @csrf
            @method('PUT')

            <x-form.input name="title" placeholder="Write a title great!" value="{{ old('title', $post->title) }}"/>

            <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
            <trix-editor input="body"></trix-editor>

            <x-form.button>Guardar</x-form.button>

        </form>
    </div>

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.js" integrity="sha512-EkeUJgnk4loe2w6/w2sDdVmrFAj+znkMvAZN6sje3ffEDkxTXDiPq99JpWASW+FyriFah5HqxrXKmMiZr/2iQA==" crossorigin="anonymous" defer></script>
@endsection

</x-layout>