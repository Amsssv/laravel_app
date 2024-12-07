@extends('layouts.main')
@section('content')

  <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">Number</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Likes</th>
      <th scope="col">Links</th>
      <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->content}}</td>
        <td>{{$post->likes}}</td>
        <td>
          <a href="{{route('post.show', $post->id)}}">link</a>
        </td>
        <td>
          <form action="{{route('post.destroy', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">delete</button>
          </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
