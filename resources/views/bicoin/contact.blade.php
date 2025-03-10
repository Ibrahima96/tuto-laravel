@extends('layout')
@section('title', 'Contact')
@section('content')
<p class="text-center">    Nous contacter mes jeunes prodriges a l'avenir radieux</p>
    @foreach ($data as  $item)
        <ul class="text-center bg-slate-300 p-2 rounded-sm container mx-auto">
            <li>{{$item}}</li>
        </ul> 
            
    @endforeach
@endsection