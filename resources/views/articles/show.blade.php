@extends('main')
 
@section('content')
    <h1>{{ $article->title }}</h1>
	<h1>{{ $article->published_at }}</h1>
    <article>{{ $article->body }}</article>
	
@stop