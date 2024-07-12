@extends('layout')

@section('content')
    <h1 class="my-4">Tasks</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Create Task</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <ul class="list-group">
        @foreach ($tasks as $task)
            <li class="list-group-item">
                {{ $task->name }}
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="float-right">
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-sm btn-info mr-1">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
