<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('post/index', compact('posts'));
//   return $posts;
  }

  public function create()
  {
    return view('post/create');
  }

  public function store()
  {

    $data = request()->validate([
      'title' => 'required',
      'content' => 'required',
      'likes' => 'required',
    ]);

    Post::create($data);
    return redirect('/posts');
  }

  public function show(Post $post)
  {
    return view('post/show', compact('post'));
  }

  public function edit(Post $post) {
    return view('post/edit', compact('post'));
  }

  public function update(Post $post){

    $data = request()->validate([
      'title' => 'required',
      'content' => 'required',
      'likes' => 'required',
    ]);

   $post->update($data);
    return redirect()->route('post.show', $post->id);
  }

  public function destroy(Post $post){

    $post->delete();
    return redirect('/posts');
  }
}
