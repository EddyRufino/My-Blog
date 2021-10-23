@props(['title', 'slug'])

@push('styles')
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

    .tooltip {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      bottom: 125%;
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 50%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }
    .boton {
        bottom: 100%;
    }
</style>
@endpush

<div class="max-w-xl mt-8 w-full flex px-5">
    <p class="text-xl font-light mr-3">Compartir:</p>
    <ul class="flex mt-1">
        <li class="mr-3">
            <a href="https://www.facebook.com/sharer.php?u={{ request()->fullUrl() }}&quote={{ $title }} https://eddyrufino.com/blog/{{ $slug }}"
                title="Compartir en Facebook"
                target="_blank">
                <x-icons.facebook></x-icons.facebook>
            </a>
        </li>
        <li class="mr-2">
            <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text=Creo que podría ayudarte este nuevo post: {{ $title }}&via=rufino_eddy&hashtags={{ config('app.name') }}"
                target="_blank"
                title="Compartir en twitter">
                <x-icons.twitter></x-icons.twitter>
            </a>
        </li>
        <li class="copy">

            <button id="boton" type="button" class="tooltip" >
                <span id="tooltip" class="tooltiptext">Copia la url</span>
                <x-icons.copy></x-icons.copy>
            </button>
        </li>
    </ul>
</div>
<input id="caja" type="text" class="boton absolute p-0 border-0 focus:ring-2 focus:ring-transparent" value="https://eddyrufino.com/blog/{{ $slug }}">

@push('scripts')
<script>
(function() {
    let copyButton = document.querySelector('.copy #boton');
    let copyInput = document.querySelector('#caja');
    let tooltip = document.querySelector('#tooltip');
    copyButton.addEventListener('click', function(e) {
        e.preventDefault();
        let text = copyInput.select();
        document.execCommand('copy');
        tooltip.innerHTML = "Url copiada";
    });
})();
</script>
@endpush

