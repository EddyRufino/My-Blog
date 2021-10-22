<x-layout>
    <div class="max-w-xl py-6 px-5 mt-5 w-full bg-gray-100 rounded-xl">
        <p class="text-2xl font-bold mb-8 pb-2 border-b">Tus Posts</p>
        <div>
            @forelse ($posts as $post)
                <div class="flex justify-between">
                    <a href="{{ route('post.show', $post) }}" class="text-xl font-light mb-4 inline-block">
                        {{ ucwords($post->title) }}
                    </a>
                    <div class="flex">
                        <td>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST"
                                onclick="return confirm('¿Seguro de querer eliminar la publicación?')"
                            >
                                @csrf
                                @method('DELETE')

                                <button><x-icons.delete /></button>
                            </form>
                        </td>
                    </div>
                </div>
            @empty
                <p>¡Aparecerá algo aquí en algunos momentos!</p>
            @endforelse
        </div>
    </div>
    <div class="pt-5 max-w-xl w-full">
        {{ $posts->links() }}
    </div>
</x-layout>

