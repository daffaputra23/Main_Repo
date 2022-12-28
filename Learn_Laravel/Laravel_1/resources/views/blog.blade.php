@extends('layout.main')

@section('blog')
    @foreach ($dataModel as $item)
        <h1>{{ $item["title"] }}</h1>
        <h5>{{ $item["author"] }}</h5>
        <p>{{ $item["desc"] }}</p>
        <a href="/viewPost/{{$item["slug"]}}">View Post</a>
        {{-- Viewpost/? item itu berarti kita ngambil routes dari data
            item yang dengan array atribut slug --}}
    @endforeach
@endsection