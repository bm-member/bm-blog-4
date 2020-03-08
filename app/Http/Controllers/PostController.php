<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function store()
    {
        // for ($i=11; $i <= 20; $i++) { 
            $post = new Post();
            $post->title = 'Post Title ';
            $post->content = 'Lorem ipsum, dolor sit amet';
            $post->user_id = 1;
            $post->save();
        // }


        return redirect('post')->with('msg', 'A post was created.');
    }

    public function update($id)
    {
        $post = Post::find($id);
        $post->title = 'Post title edited';
        $post->save();

        return redirect('post')->with('status', 'A post was updated.');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('post')->with('status', 'A post was deleted.');
    }
}
