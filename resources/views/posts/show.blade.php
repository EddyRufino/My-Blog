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
</style>

@endsection
    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-5xl font-semibold">{{ $post->title }}</h1>
        <div class="py-6 text-xl font-light markdown-body">
            {!! $post->body !!}
        </div>
    </div>
</x-layout>
