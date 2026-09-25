@extends('layout')

@section('content')
    <h2>New Task</h2>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Task Name</label>
        <input type="text" name="task_name" required>
        <label>Description</label>
        <textarea name="description"></textarea>
        <label>Due Date</label>
        <input type="date" name="due_date">
        <button class="btn btn-add">Add Task</button>
    </form>
@endsection