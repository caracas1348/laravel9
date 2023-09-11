
@extends('layouts.app')


@section('title','Blog - Primer algoritmo en laravel 9')
@section('meta-description','Blog meta description')

@section('content')
<h1>Welcome Blog</h1>
{{-- @dump($posts) --}}
@foreach ($posts as $post)
{{-- <h1>  {{ $post->title; }}  </h1> --}}
   <h2><a href="{{ route('posts.show', $post->id;)}}">{{$post->title;}}</a></h2>
@endforeach
@endsection

