@extends('layout')

@section('title', 'project')

@section('container')
    <h1>Projects</h1>
    <ul>
        @foreach($projects as $project)
            <li>
                <a href="/projects/{{ $project->id }}">
                    {{ $project->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

