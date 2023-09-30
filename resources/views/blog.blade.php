
@extends('halaman.main')

@section('cont')
@foreach($postingan as $post)
<article class="mb-5 border-bottom pb-4">
<h2>
    <a href="post/{{ $post->slug }}">
    {{ $post->title }}</a></h2>
<h5>By: <a href=""class="text-decoration-none">{{ $post->user->name }}</a> <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a></h5>
<p>{{ $post->excerpt}}</p> 

<a href="post/{{ $post->slug }}" class="text-decoration-none" >read more</a>
</article>
@endforeach
@endsection