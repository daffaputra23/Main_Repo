dd($detail)
@extends('layout.main')

@section('viewPost')

<h5>{{ $data["title"] }}</h5>
<h5>{{ $data["author"] }}</h5>
<p>{{ $data["desc"] }}</p>
<a href="/blog">View Post</a>

@endsection