<div class="mt-5 pl-6 pt-4 pb-2 flex justify-start max-w-xl w-full">
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

    @admin
        <a href="{{ route('posts.create') }}"
            class=" border-2 border-gray-900 px-2 py-1 text-gray-900 rounded text-base inline-block font-semibold mr-1 {{ request()->routeIs('post.create') ? 'text-green-600' : '' }}"
        >
            NUEVO POST
        </a>
        <a href="{{ route('posts.index') }}"
            class=" border-2 border-gray-900 px-2 py-1 text-gray-900 rounded text-base inline-block font-semibold {{ request()->routeIs('posts.index') ? 'text-green-600' : '' }}"
        >
            VER POSTS
        </a>
    @endadmin
</div>
