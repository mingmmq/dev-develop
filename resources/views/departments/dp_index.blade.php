@extends('app')

@section('content')
    <h1>Departments</h1>

    <hr>

    @foreach($departments as $department)
        <article>
            {{$department}}
        </article>
    @endforeach

@endsection
