<x-layout>
    <div class="max-w-xl py-6 px-5 mt-5 w-full bg-gray-100 rounded-xl">
        <p class="text-2xl font-bold mb-8 pb-2 border-b">Registrate</p>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <x-form.input name="email" placeholder="Write a email great"/>
            <x-form.input name="password" type="password" placeholder="Write a password great"/>
            <x-form.input name="password_confirmation" type="password" placeholder="Write a password great"/>
            <x-form.button>Registrate</x-form.button>
        </form>
    </div>
</x-layout>
