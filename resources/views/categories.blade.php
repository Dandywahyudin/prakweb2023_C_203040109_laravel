@extends('layouts.main')
    
@section('container')
<h2 class="mb-5">Post Category</h2>
    @foreach ($categories as $category)
    <ul>
        <li>
            <h2><a href="/categories/{{$category->slug}}"> {{ $category->name }}</h2></a>
        </li>
    </ul>
    @endforeach

@endsection

