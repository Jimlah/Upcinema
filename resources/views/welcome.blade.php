@extends('layout')

@section('content')
    <h1>Daily Tasks</h1>
    {{$title}}
    <ul>
    @foreach ($tasks as $task)
            <li> {{ $task   }} </li>
    @endforeach
    </ul>
@endsection