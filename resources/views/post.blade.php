
@extends('halaman.main')
@section("cont")
<h1>{{ $post["title"] }}</h1>
<h5>{{ $post["author"] }}</h5>
<p>{{ $post["body"] }}</p><a  class="btn btn-outline-danger" href="/blog" >kembali</a> 
@endsection