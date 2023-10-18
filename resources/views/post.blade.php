
@extends('halaman.main')
@section("cont")
<h1>{{ $post->title }}</h1>
<h5> by <a href="/author/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> : in <a href="/categories/{{$post->category->slug}}">{{ $post->category->name}}</a></h5>
{!! $post->body !!}<a  class="btn btn-outline-danger" href="/blog" >kembali</a> 
@endsection