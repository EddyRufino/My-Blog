<x-layout>

@section('created_at', $post->created_at)
@section('title', $post->title)
@section('slug', $post->slug)

@section('styles')
<style>
    pre {
        background: rgba(31,41,55,1);
        padding: .8571429em 1.1428571em;
        margin-top: .8rem;
        margin-bottom: .8rem;
        border-radius: .75rem;
        color: #fff;
        font-size: 16px;
        line-height: 1.7142857;
        font-family: monospace;
        font-weight: 400;
        overflow: hidden;
        overflow-x: auto;
    }

    blockquote {
        display: block;
        border-left: 5px solid #34D399;
        padding-left: 1rem;
        font-size: 1rem;
        font-family: italic;
    }
</style>
@endsection
    <div class="max-w-xl px-5 mt-5 w-full">
        <h1 class="text-5xl font-semibold">{{ $post->title }}</h1>
        <div class="py-6 text-xl font-light">
            {!! $post->body_html !!}
        </div>
    </div>
</x-layout>
