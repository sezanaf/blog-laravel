@extends('layouts.app')

@section("title", "Vivify Blog")

@section('content')
<h2>Posts</h2>
<ul>
  @foreach($posts as $post)
  <!-- <li><a href="/posts/{{$post->id}}">{{$post->title}}</a></li> -->
  <li><a href="{{route('post', ['posts' => $post->id])}}">{{$post->title}}</a></li>
  @endforeach
</ul>
@endsection