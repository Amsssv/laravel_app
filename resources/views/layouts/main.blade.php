<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>posts laravel</title>

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <ul class="nav nav-pills mt-4 mb-4 ">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="{{route('welcome.index')}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about.index')}}">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('post.index')}}">Posts</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('post.create')}}">Create post</a>
      </li>
    </ul>

@yield('content')
</div>
</body>
</html>
