@extends('layouts.main')
@section('content')

<form action="{{route('post.update', $post->id)}}" method="post">
  @csrf
  @method('patch')
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$post->title}}">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea  class="form-control" name="content" id="content" placeholder="Content">{{$post->content}}</textarea>
  </div>
  <div class="mb-3">
    <label for="likes" class="form-label">Likes</label>
    <input type="number" name="likes" class="form-control" id="likes" placeholder="Likes" value="{{$post->likes}}">
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
  <a href="{{route('post.show', $post->id)}}" class="btn btn-secondary">Back</a>
</form>
@endsection
