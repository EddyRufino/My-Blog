<div class="mt-5 pl-6 pt-4 pb-2 flex justify-between max-w-xl w-full px-5">
    <div class="flex">
        <a href="{{ route('home') }}"
            class=" border-2 border-gray-900 px-2 py-1 text-gray-900 rounded mr-1 text-base inline-block font-semibold {{ request()->routeIs('home') ? 'text-green-600' : '' }}"
        >
            INICIO
        </a>
        <a href="{{ route('blog') }}"
            class=" border-2 border-gray-900 px-2 py-1 text-gray-900 rounded text-base inline-block font-semibold mr-1 {{ request()->routeIs('blog') ? 'text-green-600' : '' }}"
        >
            BLOG
        </a>
    </div>

    @admin
    <div class="relative" x-data="{ isOpen: false}">
        <button
            @click="isOpen = !isOpen"
            @keydown.escape="isOpen = false"
            class="flex items-center"
        >

            <img src="http://www.gravatar.com/avatar?d=mm"
                 alt="avatar"
                 class="w-8 h-8 rounded-full"
            >

            <x-icons.arrow-down />

        </button>

        <ul x-show="isOpen" style="display: none;"
            @click.away="isOpen = false"
            class="absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20"
        >
        <li>
            <a href="{{ route('posts.create') }}"
                class="flex items-center px-3 py-3 hover:bg-gray-200 font-light {{ request()->routeIs('posts.create') ? 'text-green-600' : '' }}"
            >
                <x-icons.add />
                <span class="ml-2">Nuevo Post</span>
            </a>
        </li>
        <li class="border-b border-gray-400">
            <a href="{{ route('posts.index') }}"
                class="flex items-center px-3 py-3 hover:bg-gray-200 font-light {{ request()->routeIs('posts.index') ? 'text-green-600' : '' }}"
            >
                <x-icons.list />
                <span class="ml-2">Listar Post</span>
            </a>
        </li>
        <li>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button class="flex items-center px-3 py-3 hover:bg-gray-200 font-light w-full">
                <x-icons.logout />
                <span class="ml-2">Salir</span>
            </button>
        </form>
        </li>
        </ul>
    </div>
    @endadmin
</div>
