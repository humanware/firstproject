@extends('layout')

{{-- 
@section('title')
    Homepage
@endsection
--}}

@section('title', 'Homepage')

@section('content')
    <h1>Welcome to Laravel Homepage</h1>

    <ul>
        @foreach ($tasks as $task )
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection
