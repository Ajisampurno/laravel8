
@extends('layout.main')

@section('countainer')
    <article>
        <h2>{{ $post["judul"] }}</h2>
        <h3>{{ $post["author"] }}</h3>
        <p>{{ $post["body"] }}</p>
    </article>
@endsection