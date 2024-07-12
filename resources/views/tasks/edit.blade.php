@extends('layout')

@section('content')
    <h1 class="my-4">Edit Task</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Task Name:</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $task->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
