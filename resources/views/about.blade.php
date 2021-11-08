@extends('layout.main')

@section('countainer')
    
    <h1>{{ $nama }}</h1>
    <h4>{{ $nim }}</h4>
    <img src="img/{{ $img }}" alt="">
@endsection

