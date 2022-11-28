@extends('questions.layout')

@section('content')
    <h1>{{ $question->title }}</h1>

    {!! $question->body !!}

    <a href="{{ route('questions.index') }}">Back to all questions</a>
@stop
