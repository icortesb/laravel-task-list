@extends('layouts.app')

@section('title', isset($task) ? 'Edit task' : 'Create a new task')
@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" required>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" rows="5" required>{{ $task->title ?? old('description') }}</textarea>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10" required>{{ $task->title ?? old('long_description') }}</textarea>
            @error('long_description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit">
            @isset($task)
                Edit Task
            @else
                Add Task
            @endisset
        </button>
    </form>

    <a href="{{ route('tasks.index') }}">Back to tasks list</a>

@endsection
