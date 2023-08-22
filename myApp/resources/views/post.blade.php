@extends('layouts.main')

@section('body')
<div class="container mt-3 py-5 px-5 bg-light rounded-4 shadow">
    <div class="my-5"> 
        <a href="/blog" class="btn btn-outline-secondary mb-4">Back to Posts</a>
        <h1>{{ $post->title }}</h1>
        <h5>{{ $post->author }}</h5>
        {!! $post->body !!} 
    </div>
</div>
@endsection


    