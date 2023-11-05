@extends('layouts.main')
    
@section('container')
<h1 class="mb-5">Post Category : {{ $category }}</h1>
<article class="mb-5">
    @foreach ($posts as $post)
    <a href="/posts/{{$post->slug}}"><h2> {{ $post->title }}</h2></a>
    <p> {{ $post->excerpt }}</p>
    @endforeach
</article>
@endsection

