@extends('layout')

@section('container')
    <h1 class="title">{{ $project->title }}</h1>
    <div class="content">{{ $project->description }}</div>

    @if ($project->tasks->count())
        <div class="box">
           <h2>List of tasks :</h2>
            @foreach ($project->tasks as $task)
                <div>
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf
                        <label class="label {{ $task->completed ? 'is-completed' : '' }}" for="completed">
                            <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            {{ $task->description }}
                        </label>
                    </form>
                </div>
            @endforeach
        </div>
    @endif

    <form action="/projects/{{ $project->id }}/tasks" method="POST" class="box">
        @csrf
        <div class="field">
            <label for="description" class="label">New Task</label>
            <div class="control">
                <input type="text" class="input" name="description" placeholder="Task name">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Add task</button>
            </div>
        </div>

        @include('errors')
    </form>
    <a href="/projects/{{ $project->id }}/edit">Edit</a>
@endsection
