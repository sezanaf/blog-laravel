<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::where('is_published', true)
        //     ->orderBy('title')
        //     ->get(); //query builder
        $posts = Post::published()
            ->orderBy('title')
            ->get();
        // $posts = DB::table('posts')->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        if (!$post->is_published) {
            throw new ModelNotFoundException();
        }
        // return DB::table('posts')->where('id', $id)->get(); //kolekcija
        // $post = Post::findOrFail(Post $post);

        // return view('post', compact('post'));
        // return route('post', ['id' => $id]);
        return view('posts.show', compact('post'));
    }
}
