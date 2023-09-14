<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('post', ['posts' => $post]);
    }

    public function createPost()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;
        $post->save();

        return redirect('/post');
    }

    public function getById($id_post)
    {
        $post = Post::find($id_post);
        return view('getPostById', ['post' => $post]);
    }

    public function editPost($id_post)
    {
        $post = Post::find($id_post);
        return view('editPostById', ['post' => $post]);
    }

    public function update(Request $request, $id_post)
    {
        $post = Post::find($id_post);
        $post->judul = $request->judul;
        $post->deskripsi = $request->deskripsi;

        $post->save();
        return redirect('/post/' . $id_post);
    }

    public function deleteById($id_post)
    {
        $post = Post::find($id_post);
        $post->delete();

        return redirect('/post');
    }
}
