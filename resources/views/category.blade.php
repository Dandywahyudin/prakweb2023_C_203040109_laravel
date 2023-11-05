@extends('layouts.main')
    
@section('container')
<h2 class="mb-5">Post Category : {{ $category }}</h2>
<article class="mb-5">
    @foreach ($posts as $post)
    <a href="/posts/{{$post->slug}}" class="text-decoration-none"><h2> {{ $post->title }}</h2></a>
    <p> {{ $post->excerpt }}</p>
    @endforeach
</article>
@endsection

