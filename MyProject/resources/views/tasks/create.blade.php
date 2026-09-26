@extends('layout')

@section('content')
    <h2>New Task</h2>


    @if ($errors->any())
        <ul style="color: #ff6b6b;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label>Task Name</label>
        <input type="text" name="task_name" required>
        <label>Description</label>
        <textarea name="description"></textarea>
        <label>Due Date</label>
        <input type="datetime-local" name="due_date" value="{{ old('due_date') }}">
        <button class="btn btn-add">Add Task</button>
    </form>
@endsection