
@extends('layouts.main')
    
@section('container')
<article class="mb-5">
    @foreach ($posts as $post)
    <a href="/posts/{{$post["slug"]}}"><h1> {{ $post["title"] }}</h1></a>
    <h4>By : {{ $post["author"] }}</h4>
    <p> {{ $post["body"] }}</p>
    @endforeach
</article>
@endsection

