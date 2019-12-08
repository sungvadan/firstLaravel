@extends('layout')

@section('container')
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title">
        </div>

        <div>
            <textarea name="description" placeholder="Project description"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
@endsection
