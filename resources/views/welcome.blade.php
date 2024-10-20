@extends('layouts.app')

@section('content')
    <div>
        <h1>Welcome tasks app</h1>
        <a href="{{ route('tasks.index') }}">All Tasks</a>
    </div>
@endsection
