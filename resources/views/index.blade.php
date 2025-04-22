@extends('layouts.app')
@section('title', 'The list of tasks')

@section('content')
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
        <nav>
            {{ $tasks->links() }}
            {{-- {{ $tasks->links('pagination::simple-default') }} --}}
        </nav>
    @endif
    <a href="{{ route('tasks.create') }}">Crear un nuevo task</a>

@endsection
