<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::all(); // get all post
        $posts = Post::paginate(5); // get post by paginate
        return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        ;
        // for ($i=11; $i <= 20; $i++) { 
            $post = new Post();
            $post->title = $request->title;
            $post->content = $request->content;
            $post->user_id = 1;
            $post->save();
        // }


        return redirect('post')->with('status', 'A post was created.');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('post.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
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
