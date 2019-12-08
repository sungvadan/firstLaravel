@extends('layout')

@section('title', 'project')

@section('container')
    <h1>Projects</h1>
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }}</li>
        @endforeach
    </ul>
@endsection

