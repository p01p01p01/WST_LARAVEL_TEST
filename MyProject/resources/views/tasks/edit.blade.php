@extends('layout')

@section('content')
    <h2>Edit Task</h2>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf @method('PUT')
        <label>Task Name</label>
        <input type="text" name="task_name" value="{{ $task->task_name }}" required>
        <label>Description</label>
        <textarea name="description">{{ $task->description }}</textarea>
        <label>Due Date</label>
        <input type="datetime-local" name="due_date" value="{{ old('due_date', isset($task) ? $task->due_date?->format('Y-m-d\TH:i') : '') }}">
        <button class="btn btn-add">Update Task</button>
    </form>
@endsection