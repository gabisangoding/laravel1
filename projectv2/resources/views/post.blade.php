
@extends('layout.main')

@section('container')
    <article>
        <h1 class="mb-3">{{$post->title}}</h1>
        
        <h5>By : orang-orangan in <a href="/categories/{{$post->categories->slug}}">{{$post->categories->name}}</a></h5>
        @endforeach
        {!!$post->body!!} 
        {{-- {!! tujuan post!!} untuk post semua elemen yang di masukkan seperti tag html <p></p>--}}
    <a href="/posts">Kembali</a>
@endsection



