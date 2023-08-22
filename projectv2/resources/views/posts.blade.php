
@extends('layout.main')
@section('container')
    @foreach ($posts as $post)
    <article>
    <h2><a href="/posts/{{$post->slug}}">{{$post->title}}</a></h2>
       <h5>By : orang-orangan in <a href="/categories/{{$post->categories->slug}}">{{$post->categories->name}}</a></h5>
    <p>{{$post->excerpt}}</p>
    </article>
    @endforeach
@endsection