@props(['title', 'slug'])

<div class="max-w-xl mt-8 w-full flex">
    <p class="text-xl font-light mr-3">Compartir:</p>
    <ul class="flex">
        <li class="mr-2">
            <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&quote={{ $title }} https://eddyrufino.com/blog/{{ $slug }}"
                title="Compartir en Facebook"
                target="_blank">
            <img alt="Compartir en Facebook" src="{{ asset('images/facebook.png') }}"></a>
        </li>
        <li>
            <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $title }}&via=rufino_eddy&hashtags={{ config('app.name') }}"
                target="_blank"
                title="Compartir en twitter">
            <img alt="Compartir en Tweet" src="{{ asset('images/twitter.png') }}"></a>
        </li>
    </ul>
</div>
