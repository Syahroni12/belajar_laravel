
@extends('halaman.main')

@section('cont')
@foreach($posts as $post)
<article class="mb-5 border-bottom pb-4">
<h2>
    <a href="post/{{ $post->slug }}">
    {{ $post->title }}</a></h2>
<h5>By: <a href="/author/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a> <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name}}</a></h5>
<p>{{ $post->excerpt}}</p> 

<a href="post/{{ $post->slug }}" class="text-decoration-none" >read more</a>
</article>
@endforeach
@endsection