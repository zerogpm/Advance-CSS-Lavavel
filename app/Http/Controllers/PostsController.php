<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Post;
class PostsController extends Controller
{
    public function index($id)
    {
        try {
            $post = Post::findOrFail($id);
        } catch (ModelNotFoundException $e) {
            abort(404, 'page not found');
        }
        return view('post', compact('post'));
    }

    public function all()
    {
        $posts = Post::all();
        return view('show-all', compact('posts'));
    }
}
