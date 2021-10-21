<?php

namespace App\Http\Controllers\Admin;

use GitDown;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::latest()->paginate(5)
        ]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(PostRequest $request)
    {
        $data = array_merge($request->validated(), [
            'body' => GitDown::parseAndCache($request->body)
        ]);

        Post::create($data);

        return redirect()->route('posts.index')->with('success', 'Se creo el Post.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Se elimino el Post.');
    }
}
