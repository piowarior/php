<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.createpost');
    }

     public function store(Request $request)
    {
        // validasi input
        $validated = $request->validate([
            'title' => 'required',
            'picture' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'author' => 'required',
            'content' => 'required',
        ]);

        // upload gambar
        $pictureName = time().'.'.$request->picture->extension();
        $request->picture->move(public_path('images'), $pictureName);

        // simpan data
        Post::create([
            'title'   => $request->title,
            'picture' => $pictureName,
            'author'  => $request->author,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index')->with('success', 'Post berhasil ditambahkan!');
    }
}
