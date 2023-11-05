
@extends('layouts.main')
    
@section('container')
<article class="mb-5">
    @foreach ($posts as $post)
    <a href="/posts/{{$post->slug}}"><h2> {{ $post->title }}</h2></a>
    <p> {{ $post->excerpt }}</p>
    @endforeach
</article>
@endsection

