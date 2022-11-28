@extends('questions.layout')

@section('content')
    <h1>FAQ</h1>

    @foreach($questions as $question)
        <a class="block mb-2" href="{{ route('questions.show', $question) }}">{{ $question->title }}</a>
    @endforeach
@stop
