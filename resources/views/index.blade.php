@extends('layouts.app')
@section('title', 'The list of tasks')

@section('content')
    <nav class="mb-4">
        <a href="{{ route('tasks.create') }}" class="font-medium text-gray-700">Crear un nuevo task</a>
    </nav>
    <ul>
        @forelse ($tasks as $task)
            <li>
                <a href="{{ route('tasks.show', ['task' => $task->id]) }}">{{ $task->title }}</a>
            </li>
        @empty
            <li>No tasks available</li>
        @endforelse
    </ul>
    @if ($tasks->count())
        <nav class="mt-4">
            {{ $tasks->links('pagination::simple-default') }}
        </nav>
    @endif

@endsection
