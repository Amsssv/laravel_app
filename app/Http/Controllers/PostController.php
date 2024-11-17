<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
 public function index() {
   $post = Post::find(1);
   return $post->toJson();
//   return view('posts');
 }
}
