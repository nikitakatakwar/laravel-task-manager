@extends('layout')

@section('content')
    <h2>{{ isset($task) ? 'Edit' : 'New' }} Task</h2>

    <form method="POST" enctype="multipart/form-data"
        action="{{ isset($task) ? route('tasks.update', $task) : route('tasks.store') }}">
        @csrf
        @if(isset($task)) @method('PUT') @endif

        <input type="text" name="title" value="{{ old('title', $task->title ?? '') }}" placeholder="Title" required><br>
        <textarea name="description" placeholder="Description">{{ old('description', $task->description ?? '') }}</textarea><br>
        <input type="date" name="due_date" value="{{ old('due_date', $task->due_date ?? '') }}"><br>
        <input type="file" name="image"><br>
        @if(isset($task))
            <label><input type="checkbox" name="is_completed" value="1" {{ $task->is_completed ? 'checked' : '' }}> Completed</label><br>
        @endif
        <button type="submit">Save</button>
    </form>
@endsection
