
@extends('halaman.main')

@section('cont')
<h1 class="mb-5">{{$title}}</h1>
@foreach($categories as $category)
<ul>
    <li>
    <h2>
    <a href="/categories/{{ $category->slug}}">
    {{ $category->name }}</a></h2>
    </li>
</ul>


 

@endforeach
@endsection