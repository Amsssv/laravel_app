@extends('layouts.main')
@section('content')
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->content}}</p>
    <a href="{{route('post.edit', $post)}}" class="btn btn-primary">edit</a>
    <a href="{{route('post.index')}}" class="btn btn-secondary">Go back</a>
  </div>
</div>
@endsection
