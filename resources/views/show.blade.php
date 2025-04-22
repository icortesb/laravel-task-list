@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p class="text-2xl"><span class="font-bold underline ">Description: </span>{{ $task->description }}</p>
    <div class="my-3">
        @if ($task->long_description)
            <p class="text-2xl"><span class="font-bold underline">Long description: </span>{{ $task->long_description }}</p>
        @endif
    </div>
    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <p>
        @if ($task->completed)
            <span class="text-green-600 border">Completed</span>
        @else
            <span class="text-red-600 border">Not Completed</span>

        @endif
    </p>

    <div>
        <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="p-2  bg-blue-400 rounded-md text-gray-100">Edit</a>
    </div>

    <div>
        <form method="POST" action="{{ route('tasks.toggle-complete', ['task' => $task]) }}">
            @csrf
            @method('PUT')
            <button type="submit">
                Mark as {{ $task->completed ? 'incomplete' : 'complete' }}
        </form>
    </div>

    <div>
        <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>

    <a href="{{ route('home') }}">Back to task list</a>
@endsection
