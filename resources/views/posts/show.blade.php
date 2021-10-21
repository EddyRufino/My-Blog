<x-layout>

@section('created_at', $post->created_at)
@section('title', $post->title)
@section('slug', $post->slug)

@section('styles')
    @gitdown

<style>
    .markdown-body {
        font-size: 20px;
    }

    .markdown-body h1 {
        font-size: 1.3em;
        font-weight: 700;
    }
</style>

@endsection
    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-5xl font-semibold">{{ $post->title }}</h1>
        <div class="py-6 text-xl font-light markdown-body">
            {!! $post->body !!}
        </div>
    </div>
</x-layout>
