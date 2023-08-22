@extends('layouts.main')

@section('body')
{{-- <h1 class="container mt-5 text-center">{{ $title }}</h1> --}}
{{-- post 1 --}}


@foreach ($posts as $item)
<article class="container mt-3 py-5 px-5 bg-light rounded-4 shadow">
    <div class="my-5"> 
            <h2>{{ $item->title }}</h2>
            <h5>{{ $item->author }}</h5>
            <p>{{ $item->excerpt }}</p>
        <a href="/posts/{{ $item->id }}" class="btn btn-outline-primary">See more</a>
    </div>
</article>
@endforeach

@endsection
    


    

    