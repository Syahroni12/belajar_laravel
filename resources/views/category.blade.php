
@extends('halaman.main')

@section('cont')
<h1 class="mb-5">Post category {{$category}}</h1>
@foreach($posts as $post)
<article class="mb-5">
<h2>
    <a href="/post/{{ $post->slug }}">
    {{ $post->title }}</a></h2>
<h5>By:</h5>
<p>{{ $post->excerpt}}</p> 

</article>
@endforeach

@endsection