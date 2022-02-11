<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
