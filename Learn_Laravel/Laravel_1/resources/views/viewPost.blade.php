@extends('layout.main')

@section('viewPost')


<h1>{{ $data["title"] }}</h1>
<h5>{{ $data["author"] }}</h5>
<p>{{ $data["desc"] }}</p>
<a href="/blog">View Post</a>

@endsection