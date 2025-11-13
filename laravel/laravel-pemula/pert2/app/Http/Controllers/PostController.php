<?php

namespace App\Http\Controllers;

use App\Models\Post; // ✅ tambahin ini
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all(); // sudah benar
        return view('posts.index', compact('posts'));
    }
}
