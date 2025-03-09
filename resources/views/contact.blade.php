@extends('layout')
@section('title', 'Contact')
@section('content')
<p class="text-center">    Nous contacter mes jeunes prodriges a l'avenir radieux</p>
    @foreach ($data as $item)
        <p class="mx-5 text-center">{{$item}}</p> 
        
    @endforeach
@endsection