@extends('layout')

@section('container')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">{{ $project->description }}</div>

    @if ($project->tasks->count())
        List of tasks :
        <ol type="1">
            @foreach ($project->tasks as $task)
                <li>{{ $task->description }}</li>
            @endforeach
        </ol>
    @endif
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
@endsection
