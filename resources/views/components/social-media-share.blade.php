@props(['title', 'slug'])

<style>
input::selection {
    background: white;
    color: white;
    text-shadow: 1px 1px #fff;
}

/* Firefox */
input::-moz-selection {
    background: white;
    color: white;
    text-shadow: 1px 1px #fff;
}

</style>

<div class="max-w-xl mt-8 w-full flex">
    <p class="text-xl font-light mr-3">Compartir:</p>
    <ul class="flex mt-1">
        <li class="mr-3">
            <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&quote={{ $title }} https://eddyrufino.com/blog/{{ $slug }}"
                title="Compartir en Facebook"
                target="_blank">
                <x-icons.facebook></x-icons.facebook>
            </a>
        </li>
        <li class="mr-1">
            <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text=Creo que podría ayudarte este nuevo post: {{ $title }}&via=rufino_eddy&hashtags={{ config('app.name') }}"
                target="_blank"
                title="Compartir en twitter">
                <x-icons.twitter></x-icons.twitter>
            </a>
        </li>
        <li class="copy">
            <input type="text" class="w-0 p-0 border-0 focus:ring-2 focus:ring-transparent" value="https://eddyrufino.com/blog/{{ $slug }}">
            <button type="button"><x-icons.copy></x-icons.copy></button>
        </li>
    </ul>
</div>

<script>
(function() {
    var copyButton = document.querySelector('.copy button');
    var copyInput = document.querySelector('.copy input');
    copyButton.addEventListener('click', function(e) {
        e.preventDefault();
        var text = copyInput.select();
        document.execCommand('copy');
    });

    copyInput.addEventListener('click', function() {
        this.select();

    });
})();
</script>
